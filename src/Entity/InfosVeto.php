<?php

namespace App\Entity;

use App\Repository\InfosVetoRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: InfosVetoRepository::class)]
class InfosVeto
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $etat_animal = null;

    #[ORM\Column(length: 255)]
    private ?string $nourriture_proposee = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $commentaire_habitat = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $detail_animal = null;

    /**
     * @var Collection<int, Animal>
     */
    #[ORM\OneToMany(targetEntity: Animal::class, mappedBy: 'veterinaire')]
    private Collection $animal;

    #[ORM\Column(type: 'date', nullable: true)] // Permettre la valeur NULL
    private ?\DateTimeInterface $datePassage = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $createdAt = null;

    /**
     * @var Collection<int, Animal>
     */
    #[ORM\OneToMany(targetEntity: Animal::class, mappedBy: 'infosVeto')]
    private Collection $animal_id;

    

    public function __construct()
    {
        $this->animal = new ArrayCollection();
        $this->createdAt = new \DateTimeImmutable();
        $this->animal_id = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getEtatAnimal(): ?string
    {
        return $this->etat_animal;
    }

    public function setEtatAnimal(string $etat_animal): static
    {
        $this->etat_animal = $etat_animal;

        return $this;
    }

    public function getNourritureProposee(): ?string
    {
        return $this->nourriture_proposee;
    }

    public function setNourritureProposee(string $nourriture_proposee): static
    {
        $this->nourriture_proposee = $nourriture_proposee;

        return $this;
    }

    public function getCommentaireHabitat(): ?string
    {
        return $this->commentaire_habitat;
    }

    public function setCommentaireHabitat(string $commentaire_habitat): static
    {
        $this->commentaire_habitat = $commentaire_habitat;

        return $this;
    }

    /**
     * @return Collection<int, Animal>
     */
    public function getAnimal(): Collection
    {
        return $this->animal;
    }

    public function addAnimal(Animal $animal): static
    {
        if (!$this->animal->contains($animal)) {
            $this->animal->add($animal);
            $animal->setVeterinaire(null);
        }

        return $this;
    }

    public function removeAnimal(Animal $animal): static
    {
        if ($this->animal->removeElement($animal)) {
            // set the owning side to null (unless already changed)
            if ($animal->getVeterinaire() === $this) {
                $animal->setVeterinaire(null);
            }
        }

        return $this;
    }

    public function getDatePassage(): ?\DateTimeInterface
    {
        return $this->datePassage;
    }

    public function setDatePassage(\DateTimeInterface $datePassage): static
    {
        $this->datePassage = $datePassage;

        return $this;
    }

    public function getDetailAnimal(): ?string
    {
        return $this->detail_animal;
    }

    public function setDetailAnimal(string $detail_animal): static
    {
        $this->detail_animal = $detail_animal;

        return $this;
    }

    /**
     * @return Collection<int, Animal>
     */
    public function getAnimalId(): Collection
    {
        return $this->animal_id;
    }

    public function addAnimalId(Animal $animalId): static
    {
        if (!$this->animal_id->contains($animalId)) {
            $this->animal_id->add($animalId);
            $animalId->setInfosVeto($this);
        }

        return $this;
    }

    public function removeAnimalId(Animal $animalId): static
    {
        if ($this->animal_id->removeElement($animalId)) {
            // set the owning side to null (unless already changed)
            if ($animalId->getInfosVeto() === $this) {
                $animalId->setInfosVeto(null);
            }
        }

        return $this;
    }
}
