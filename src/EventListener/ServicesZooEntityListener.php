<?php

namespace App\EventListener;

use App\Entity\ServicesZoo;
use Doctrine\ORM\Event\PrePersistEventArgs;
use Doctrine\ORM\Event\PreUpdateEventArgs;

class ServicesZooEntityListener
{
    // Définit la date de création avant que l'entité ne soit persistée
    public function prePersist(ServicesZoo $servicesZoo, PrePersistEventArgs $event): void
    {
        if ($servicesZoo->getCreatedAt() === null) {
            $servicesZoo->setCreatedAt(new \DateTimeImmutable());
        }
    }

    // Met à jour la date de modification avant que l'entité ne soit mise à jour
    public function preUpdate(ServicesZoo $habitat, PreUpdateEventArgs $event): void
    {
        $habitat->setUpdatedAt(new \DateTimeImmutable());
    }
}
