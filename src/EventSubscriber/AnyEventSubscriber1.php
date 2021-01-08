<?php

namespace App\EventSubscriber;

use App\Repository\AnyEntityRepository;
use Doctrine\Common\EventSubscriber;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Events;

class AnyEventSubscriber1 implements EventSubscriber
{
    public function __construct(EntityManagerInterface $em, AnyEntityRepository $anyEntityRepository)
    {

    }

    public function getSubscribedEvents()
    {
        return [
            Events::postFlush,
        ];
    }

}