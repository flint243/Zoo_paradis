<?php

namespace App\EventListener;

use App\Entity\Habitat;
use Doctrine\ORM\Event\PrePersistEventArgs;
use Doctrine\ORM\Event\PreUpdateEventArgs;

class HabitatEntityListener
{
    // Définit la date de création avant que l'entité ne soit persistée
    public function prePersist(Habitat $habitat, PrePersistEventArgs $event): void
    {
        if ($habitat->getCreatedAt() === null) {
            $habitat->setCreatedAt(new \DateTimeImmutable());
        }
    }

    // Met à jour la date de modification avant que l'entité ne soit mise à jour
    public function preUpdate(Habitat $habitat, PreUpdateEventArgs $event): void
    {
        $habitat->setUpdatedAt(new \DateTime());
    }
}
