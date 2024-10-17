<?php

namespace App\Entity;

use App\Repository\LogerAnimalRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LogerAnimalRepository::class)]
class LogerAnimal
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    
    #[ORM\Column]
    private ?\DateTimeImmutable $created_at = null;


    #[ORM\ManyToOne(inversedBy: 'logerAnimals')]
    private ?Animal $animal_id = null;

    #[ORM\ManyToOne(inversedBy: 'logerAnimals')]
    private ?Habitat $habitat_id = null;


    public function __construct()
    {
        $this->created_at = new \DateTimeImmutable();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getAnimalId(): ?Animal
    {
        return $this->animal_id;
    }

    public function setAnimalId(?Animal $animal_id): static
    {
        $this->animal_id = $animal_id;

        return $this;
    }

    public function getHabitatId(): ?Habitat
    {
        return $this->habitat_id;
    }

    public function setHabitatId(?Habitat $habitat_id): static
    {
        $this->habitat_id = $habitat_id;

        return $this;
    }
}
