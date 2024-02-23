<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\Wx;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Pattern;
use App\Entity\User;

#[Route('/api')]
class ApiController extends AbstractController
{
    private $doctrine;
    private $wx;

    public function __construct(ManagerRegistry $doctrine, Wx $wx)
    {
        $this->doctrine = $doctrine;
        $this->wx = $wx;
    }
    
    #[Route(path: '/wxgetphone', name: 'api_wx_getphone', methods: ['POST'])]
    public function wxLogin(Request $request)
    {
        $data = json_decode($request->getContent());
        $code = $data->code;
        $resp = $this->wx->getPhoneNumber($code);
        return $this->json($resp);
    }
    
    #[Route(path: '/getPatternProps', name: 'api_pattern_props', methods: ['GET'])]
    public function getPatternProps()
    {
        $reflect = new \ReflectionClass('App\Entity\Pattern');
        $props = $reflect->getProperties();
        // dump($props);
        foreach ($props as $p) {
            $attrs = $p->getAttributes();
            // dump($attrs);
        }
        // return $this->json($resp);
        return new Response('<body></body>');
    }

    #[Route('/media_objects', methods: ['POST'])]
    public function upload(Request $request): Response
    {
        $file = $request->files->get('upload');
        $newName = uniqid() . '-' .  $file->getClientOriginalName();
        // copy($file->getPathname(), 'images/' . $newName);
        $file->move('images/', $newName);
        
        $type = $request->request->get('type');
        if ($type === 1) {
            $user = $this->doctrine->getRepository(User::class)->find($object->getEntityId());
            $user->setAvatar('images/' . $newName);
            $this->em->flush();
        }
        
        return $this->json(['url' => '/images/' . $newName]);
    }
}
