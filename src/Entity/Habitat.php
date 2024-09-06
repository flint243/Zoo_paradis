<?php

namespace App\Entity;

use App\Repository\HabitatRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: HabitatRepository::class)]
class Habitat
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description_habitat = null;

    #[ORM\Column(length: 255)]
    private ?string $images_habitat = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getDescriptionHabitat(): ?string
    {
        return $this->description_habitat;
    }

    public function setDescriptionHabitat(string $description_habitat): static
    {
        $this->description_habitat = $description_habitat;

        return $this;
    }

    public function getImagesHabitat(): ?string
    {
        return $this->images_habitat;
    }

    public function setImagesHabitat(string $images_habitat): static
    {
        $this->images_habitat = $images_habitat;

        return $this;
    }
}
