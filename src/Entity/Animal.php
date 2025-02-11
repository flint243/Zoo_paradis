<?php

namespace App\Entity;

use DateTimeInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\AnimalRepository;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

#[ORM\Entity(repositoryClass: AnimalRepository::class)]
#[Vich\Uploadable]
class Animal
{
    public function __toString(): string
    {
        return $this->id;
    }
    
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(length: 255, nullable: true)]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $prenom = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $race = null;

    #[ORM\Column(length: 255, nullable:true)]
    private ?string $imagesanimal = null;

    #[Vich\UploadableField(mapping: 'animal_uploads_images', fileNameProperty: 'imagesanimal')]
    private ?File $images_animal_File = null;

    #[ORM\Column(type: 'datetime', nullable: true)]
    private ?DateTimeInterface $updatedAt = null;

    #[ORM\ManyToOne(inversedBy: 'animals')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Habitat $habitat = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $created_at = null;

    #[ORM\ManyToOne(inversedBy: 'animals')]
    private ?User $user = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;



    public function __construct()
    {
        $this->created_at = new \DateTimeImmutable();
        //$this->animals = new ArrayCollection();
        //$this->userId = new ArrayCollection();
        $this->updatedAt = new \DateTime('now');
        $this->created_at = new \DateTimeImmutable();
        //$this->user = new ArrayCollection();
        //$this->habitat = new ArrayCollection();
        $this->imagesanimal = new ArrayCollection();
        $this->nom = new ArrayCollection();
        $this->prenom = new ArrayCollection();
        
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id)
    {
        $this->id = $id;
        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): static
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getRace(): ?string
    {
        return $this->race;
    }

    public function setRace(string $race): static
    {
        $this->race = $race;

        return $this;
    }

    public function getImagesAnimal(): ?string
    {
        return $this->imagesanimal;
    }

    public function setImagesAnimal(?string $imagesanimal): self
    {
        $this->imagesanimal = $imagesanimal;

        return $this;
    }

    public function getImagesAnimalFile(): ?File
    {
        return $this->images_animal_File;
    }

    public function setImagesAnimalFile(?File $images_animal_File = null): void
    {
        $this->images_animal_File = $images_animal_File;

        if ($images_animal_File) {
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

    public function getHabitat(): ?Habitat
    {
        return $this->habitat;
    }

    public function setHabitat(?Habitat $habitat): self
    {
        $this->habitat = $habitat;

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

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        $this->user = $user;

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


}
