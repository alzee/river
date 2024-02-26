<?php

namespace App\Controller\Admin;

use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use App\Entity\Cost;
use App\Entity\Fertilizer;
use App\Entity\Irrigation;
use App\Entity\Pattern;
use App\Entity\Seed;
use App\Entity\Soil;
use App\Entity\Tracking;
use App\Entity\User;

class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        // return parent::index();

        // Option 1. You can make your dashboard redirect to some common page of your backend
        //
        $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
        return $this->redirect($adminUrlGenerator->setController(PatternCrudController::class)->generateUrl());

        // Option 2. You can make your dashboard redirect to different pages depending on the user
        //
        // if ('jane' === $this->getUser()->getUsername()) {
        //     return $this->redirect('...');
        // }

        // Option 3. You can render some custom template to display a proper dashboard with widgets, etc.
        // (tip: it's easier if your template extends from @EasyAdmin/page/content.html.twig)
        //
        // return $this->render('some/path/my-dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('河套灌区节水控盐技术模式');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::section('Pattern Management');
        // yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Pattern List', 'fas fa-memory', Pattern::class)
            ->setController(PatternCrudController::class)
            ;
        yield MenuItem::linkToCrud('Soil', 'fas fa-earth', Pattern::class)
            ->setController(PatternSoilCrudController::class)
            ;
        yield MenuItem::linkToCrud('Irrigation', 'fas fa-droplet', Seed::class);
        yield MenuItem::linkToCrud('Fertilizer', 'fas fa-plant-wilt', Irrigation::class);
        yield MenuItem::linkToCrud('Seed', 'fas fa-seedling', Fertilizer::class);
        yield MenuItem::linkToCrud('Tracking', 'fas fa-eye', Tracking::class);
        yield MenuItem::linkToCrud('Cost', 'fas fa-money-bill', Cost::class);
        
        yield MenuItem::section('Settings');
        yield MenuItem::linkToCrud('Change Password', 'fas fa-key', User::class)
            ->setQueryParameter('action', 'chpw')
            ->setAction('edit')
            // ->setEntityId($this->getUser()->getId())
            ;
        yield MenuItem::linkToCrud('User Management', 'fas fa-users', User::class);
        
        if ($this->isGranted('ROLE_SUPER_ADMIN')) {
            yield MenuItem::section('Super Admin');
            yield MenuItem::linkToCrud('Soil', 'fas fa-earth', Soil::class);
            yield MenuItem::linkToCrud('Irrigation', 'fas fa-droplet', Irrigation::class);
            yield MenuItem::linkToCrud('Fertilizer', 'fas fa-plant-wilt', Fertilizer::class);
            yield MenuItem::linkToCrud('Seed', 'fas fa-seedling', Seed::class);
            yield MenuItem::linkToCrud('Tracking', 'fas fa-eye', Tracking::class);
            yield MenuItem::linkToCrud('Cost', 'fas fa-money-bill', Cost::class);
        }
    }

    public function configureCrud(): Crud
    {
        return Crud::new()
            ->showEntityActionsInlined()
            ->setTimezone('Asia/Shanghai')
            ->setDateTimeFormat('yyyy/MM/dd HH:mm')
            ->setDefaultSort(['id' => 'DESC'])
        ;
    }

    public function configureActions(): Actions
    {
        return Actions::new()
            // ->disable('delete')
            ->add('detail', 'edit')
            ->add('index', 'edit')
            ->add('index', 'new')
            ->add('index', 'delete')
            // ->add('index', 'detail')
            ->add(Crud::PAGE_NEW, Action::SAVE_AND_RETURN)
            ->add(Crud::PAGE_EDIT, Action::SAVE_AND_RETURN)
            ->add(Crud::PAGE_EDIT, Action::SAVE_AND_CONTINUE)
        ;
    }
}
