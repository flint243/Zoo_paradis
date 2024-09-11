<?php

namespace App\Entity;

use App\Repository\ConsultationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ConsultationRepository::class)]
class Consultation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $etat_animal = null;

    #[ORM\Column(length: 255)]
    private ?string $nourriture = null;

    #[ORM\Column]
    private ?int $quantite = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $veterinaire_consultation = null;

    #[ORM\Column(length: 255)]
    private ?string $animal_consultation = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $createdAt = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEtatAnimal(): ?string
    {
        return $this->etat_animal;
    }

    public function setEtatAnimal(string $etat_animal): static
    {
        $this->etat_animal = $etat_animal;

        return $this;
    }

    public function getNourriture(): ?string
    {
        return $this->nourriture;
    }

    public function setNourriture(string $nourriture): static
    {
        $this->nourriture = $nourriture;

        return $this;
    }

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(int $quantite): static
    {
        $this->quantite = $quantite;

        return $this;
    }

    public function getVeteronaireConsultation(): ?string
    {
        return $this->veterinaire_consultation;
    }

    public function setVeteronaireConsultation(string $veterinaire_consultation): static
    {
        $this->veterinaire_consultation = $veterinaire_consultation;

        return $this;
    }

    public function getAnimalConsultation(): ?string
    {
        return $this->animal_consultation;
    }

    public function setAnimalConsultation(string $animal_consultation): static
    {
        $this->animal_consultation = $animal_consultation;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): static
    {
        $this->createdAt = $createdAt;

        return $this;
    }
}
