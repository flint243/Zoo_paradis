<?php

namespace App\Entity;

use App\Repository\VueAnimalRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: VueAnimalRepository::class)]
class VueAnimal
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $animal_id = null;

    #[ORM\Column]
    private ?int $consultation_id = null;

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

    public function getAnimalId(): ?int
    {
        return $this->animal_id;
    }

    public function setAnimalId(int $animal_id): static
    {
        $this->animal_id = $animal_id;

        return $this;
    }

    public function getConsultationId(): ?int
    {
        return $this->consultation_id;
    }

    public function setConsultationId(int $consultation_id): static
    {
        $this->consultation_id = $consultation_id;

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
