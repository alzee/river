<?php
/**
 * vim:ft=php et ts=4 sts=4
 * @version
 * @todo
 */

namespace App\EventListener;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Pattern;
use Doctrine\Persistence\Event\LifecycleEventArgs;
use Doctrine\Bundle\DoctrineBundle\Attribute\AsEntityListener;
use Doctrine\ORM\Events;
use Doctrine\ORM\Event\PreUpdateEventArgs;
use App\Entity\Soil;

#[AsEntityListener(event: Events::prePersist, entity: Pattern::class)]
// #[AsEntityListener(event: Events::postPersist, entity: Pattern::class)]
// #[AsEntityListener(event: Events::preUpdate, entity: Pattern::class)]
class PatternListener extends AbstractController
{

    public function __construct()
    {
    }

    public function prePersist(Pattern $pattern, LifecycleEventArgs $event): void
    {
        $em = $event->getEntityManager();
        $soil = new Soil();
        $soil->setPattern($pattern);
        $soil->setType('test');
        $em->persist($soil);
    }

    public function postPersist(Pattern $pattern, LifecycleEventArgs $event): void
    {
    }
    
    public function preUpdate(Pattern $pattern, PreUpdateEventArgs $event): void
    {
    }
}
