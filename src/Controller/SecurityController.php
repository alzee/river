<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use App\Entity\User;
use Doctrine\Persistence\ManagerRegistry;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;

class SecurityController extends AbstractDashboardController
{
    private $doctrine;

    public function __construct(ManagerRegistry $doctrine)
    {
        $this->doctrine = $doctrine;
    }

    #[Route(path: '/login', name: 'app_login')]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // if ($this->getUser()) {
        //     return $this->redirectToRoute('target_path');
        // }

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        // return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
        return $this->render('@EasyAdmin/page/login.html.twig', [
          'last_username' => $lastUsername,
          'error' => $error,
          // 'page_title' => $conf->getSiteName(),
          'csrf_token_intention' => 'authenticate',
          'target_path' => $this->generateUrl('admin'),
        ]);
    }

    #[Route(path: '/logout', name: 'app_logout')]
    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }

    #[Route(path: '/api/login', name: 'api_login', methods: ['POST'])]
    public function apiLogin()
    {
        if (! $this->isGranted('IS_AUTHENTICATED_FULLY')) {
            $resp = [
                "code" => 1
            ];
        } else {
            $user = $this->getUser();
            $uid = $user->getId();
            $role = $user->getOrg()->getType();
            $username = $user->getUsername();
            $data = [
                "uid" => $uid,
                "role" => $role,
                "roles" => $user->getRoles(),
                "username" => $username,
            ];
            $resp = [
                "code" => 0,
                "data" => $data
            ];
        }
        return $this->json($resp);
    }
}
