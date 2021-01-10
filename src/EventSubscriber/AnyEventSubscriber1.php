<?php

namespace App\EventSubscriber;

use App\Entity\AnyEntity;
use Doctrine\Common\EventSubscriber;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Events;

class AnyEventSubscriber1 implements EventSubscriber
{
    public function __construct(EntityManagerInterface $em)
    {
        $em->getRepository(AnyEntity::class);
    }

    public function getSubscribedEvents()
    {
        return [
            Events::postFlush,
        ];
    }

}