<?php

namespace App\Entity;

use DateTimeInterface;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\HabitatRepository;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\HttpFoundation\File\File;
use Doctrine\Common\Collections\ArrayCollection;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

#[ORM\Entity(repositoryClass: HabitatRepository::class)]
#[Vich\Uploadable]
class Habitat
{
    public function __toString(): string
    {
        return $this->id;
    }

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    /**
     * @var Collection<int, Animal>
     */
    #[ORM\OneToMany(targetEntity: Animal::class, mappedBy: 'habitat')]
    private Collection $animals;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[ORM\Column(length: 255)]
    private ?string $habitat_image = null;

    #[Vich\UploadableField(mapping: 'habitat_uploads_images', fileNameProperty: 'habitat_image')]
    private ?File $habitat_image_file = null;

    #[ORM\Column(type: 'datetime', nullable: true)]
    private ?DateTimeInterface $updatedAt = null;

    #[ORM\Column(length: 255)]
    private ?string $liste_animaux = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $created_at = null;

    

    public function __construct()
    {
        $this->animals = new ArrayCollection();
        $this->liste_animaux = new ArrayCollection();
        $this->created_at = new \DateTimeImmutable();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection<int, Animal>
     */
    public function getAnimals(): Collection
    {
        return $this->animals;
    }

    public function addAnimal(Animal $animal): static
    {
        if (!$this->animals->contains($animal)) {
            $this->animals->add($animal);
            $animal->setHabitat($this);
        }

        return $this;
    }

    public function removeAnimal(Animal $animal): static
    {
        if ($this->animals->removeElement($animal)) {
            // set the owning side to null (unless already changed)
            if ($animal->getHabitat() === $this) {
                $animal->setHabitat(null);
            }
        }

        return $this;
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getHabitatImage(): ?string
    {
        return $this->habitat_image;
    }

    public function setHabitatImage(string $habitat_image): static
    {
        $this->habitat_image = $habitat_image;

        return $this;
    }

    public function getHabitatImageFile(): ?File
    {
        return $this->habitat_image_file;
    }

    public function setHabitatImageFile(?File $habitat_image_file = null): void
    {
        $this->habitat_image_file = $habitat_image_file;

        if ($habitat_image_file) {
            // Si un fichier est téléchargé, on met à jour updatedAt
            $this->updatedAt = new \DateTime('now');
        }
    }

    public function getUpdatedAt(): ?\DateTimeImmutable
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(\DateTimeImmutable $updatedAt): static
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function getListeAnimaux(): ?string
    {
        return $this->liste_animaux;
    }

    public function setListeAnimaux(string $liste_animaux): static
    {
        $this->liste_animaux = $liste_animaux;

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
