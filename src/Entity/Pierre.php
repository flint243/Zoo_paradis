<?php

namespace App\Entity;

use App\Repository\PierreRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PierreRepository::class)]
class Pierre
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
