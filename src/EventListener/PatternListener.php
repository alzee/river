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
use App\Entity\Cost;
use App\Entity\Fertilizer;
use App\Entity\Irrigation;
use App\Entity\Seed;
use App\Entity\Soil;
use App\Entity\Tracking;

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
        
        $types = [
            '高标准农田建设',
            '平田整地',
            '播种',
            '灌溉排水',
            '施肥1',
            '施肥2',
            '施肥3',
            '管护1',
            '管护2',
            '管护3',
            '产品1',
            '产品2',
            '产品3',
            '产品4',
        ];
        foreach ($types as $t) {
            $entity = new Cost();
            $entity->setPattern($pattern);
            $entity->setType($t);
            $em->persist($entity);
        }
        
        $types = [
            '第1次',
            '第2次',
            '第3次',
            '第4次',
            '第5次',
            '第6次',
        ];
        foreach ($types as $t) {
            $entity = new Fertilizer();
            $entity->setPattern($pattern);
            $entity->setType($t);
            $em->persist($entity);
        }
        
        $types = [
            '第1次',
            '第2次',
            '第3次',
            '第4次',
            '第5次',
            '第6次',
            '第7次',
            '第8次',
            '第9次',
            '第10次',
            '第11次',
            '第12次',
        ];
        foreach ($types as $t) {
            $entity = new Irrigation();
            $entity->setPattern($pattern);
            $entity->setType($t);
            $em->persist($entity);
        }
        
        $types = [
            '第1次',
            '第2次',
            '第3次',
            '第4次',
            '第5次',
            '第6次',
            '第7次',
            '第8次',
        ];
        foreach ($types as $t) {
            $entity = new Seed();
            $entity->setPattern($pattern);
            $entity->setType($t);
            $em->persist($entity);
        }
        
        $types = [
            '0-20cm',
            '20-40cm',
            '40-60cm',
            '60-80cm',
        ];
        foreach ($types as $t) {
            $entity = new Soil();
            $entity->setPattern($pattern);
            $entity->setType($t);
            $em->persist($entity);
        }
        
        $types = [
            '1.气象水文环境',
            '2.灌溉',
            '3.排水',
            '4.施肥',
            '5.水分运动',
            '6.盐分运动',
            '7.作物生长',
        ];
        foreach ($types as $t) {
            $entity = new Tracking();
            $entity->setPattern($pattern);
            $entity->setType($t);
            $em->persist($entity);
        }
    }

    public function postPersist(Pattern $pattern, LifecycleEventArgs $event): void
    {
    }
    
    public function preUpdate(Pattern $pattern, PreUpdateEventArgs $event): void
    {
    }
}
