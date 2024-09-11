<?php

namespace App\Entity;

use App\Repository\ValideInvalideRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ValideInvalideRepository::class)]
class ValideInvalide
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    public function getId(): ?int
    {
        return $this->id;
    }
}
