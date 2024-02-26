<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Pattern;
use App\Entity\User;

#[Route('/api')]
class ApiController extends AbstractController
{
    private $doctrine;

    public function __construct(ManagerRegistry $doctrine)
    {
        $this->doctrine = $doctrine;
    }

    #[Route('/media_objects', methods: ['POST'])]
    public function upload(Request $request): Response
    {
        $file = $request->files->get('upload');
        $newName = uniqid() . '-' .  $file->getClientOriginalName();
        // copy($file->getPathname(), 'images/' . $newName);
        $file->move('images/', $newName);
        
        $type = $request->request->get('type');
        if ($type == 1) {
            $uid = $request->request->get('uid');
            $user = $this->doctrine->getRepository(User::class)->find($uid);
            $user->setAvatar($newName);
            $this->doctrine->getManager()->flush();
        }
        
        return $this->json(['url' => '/images/' . $newName]);
    }
}
