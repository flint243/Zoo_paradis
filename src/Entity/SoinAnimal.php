<?php

namespace App\Entity;

use App\Repository\SoinAnimalRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SoinAnimalRepository::class)]
class SoinAnimal
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $veterinaire_id = null;

    #[ORM\Column]
    private ?int $animal_id = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $created_at = null;

    public function __construct()
    {
        $this->created_at = new \DateTimeImmutable();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getVeterinaireId(): ?int
    {
        return $this->veterinaire_id;
    }

    public function setVeterinaireId(int $veterinaire_id): static
    {
        $this->veterinaire_id = $veterinaire_id;

        return $this;
    }

    public function getAnimalId(): ?int
    {
        return $this->animal_id;
    }

    public function setAnimalId(int $animal_id): static
    {
        $this->animal_id = $animal_id;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeImmutable $created_at): static
    {
        $this->created_at = $created_at;

        return $this;
    }
}
