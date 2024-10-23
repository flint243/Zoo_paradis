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
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $prenom = null;

    #[ORM\Column(length: 255)]
    private ?string $race = null;

    #[ORM\Column(length: 255)]
    private ?string $images_animal = null;

    #[Vich\UploadableField(mapping: 'animal_uploads_images', fileNameProperty: 'images_animal')]
    private ?File $images_animal_File = null;

    #[ORM\Column(type: 'datetime', nullable: true)]
    private ?DateTimeInterface $updatedAt = null;

    #[ORM\ManyToOne(inversedBy: 'animals')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Habitat $habitat = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $created_at = null;

    #[ORM\ManyToOne(inversedBy: 'animal')]
    private ?Veterinaire $veterinaire = null;

    #[ORM\ManyToOne(inversedBy: 'animals')]
    private ?Employe $employe = null;

    #[ORM\OneToMany(targetEntity: AnimalImage::class, mappedBy: 'animal', cascade: ['persist', 'remove'])]
    private Collection $images;

    /**
     * @var Collection<int, LogerAnimal>
     */
    #[ORM\OneToMany(targetEntity: LogerAnimal::class, mappedBy: 'animal_id')]
    private Collection $logerAnimals;



    public function __construct()
    {
        $this->created_at = new \DateTimeImmutable();
        $this->logerAnimals = new ArrayCollection();
        $this->images = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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
        return $this->images_animal;
    }

    public function setImagesAnimal(string $images_animal): self
    {
        $this->images_animal = $images_animal;

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

    public function getVeterinaire(): ?Veterinaire
    {
        return $this->veterinaire;
    }

    public function setVeterinaire(?Veterinaire $veterinaire): static
    {
        $this->veterinaire = $veterinaire;

        return $this;
    }

    public function getEmploye(): ?Employe
    {
        return $this->employe;
    }

    public function setEmploye(?Employe $employe): static
    {
        $this->employe = $employe;

        return $this;
    }

    /**
     * @return Collection<int, LogerAnimal>
     */
    public function getLogerAnimals(): Collection
    {
        return $this->logerAnimals;
    }

    public function addLogerAnimal(LogerAnimal $logerAnimal): static
    {
        if (!$this->logerAnimals->contains($logerAnimal)) {
            $this->logerAnimals->add($logerAnimal);
            $logerAnimal->setAnimalId($this);
        }

        return $this;
    }

    public function removeLogerAnimal(LogerAnimal $logerAnimal): static
    {
        if ($this->logerAnimals->removeElement($logerAnimal)) {
            // set the owning side to null (unless already changed)
            if ($logerAnimal->getAnimalId() === $this) {
                $logerAnimal->setAnimalId(null);
            }
        }

        return $this;
    }


    /**
     * @return Collection<int, AnimalImage>
     */
    public function getImages(): Collection
    {
        return $this->images;
    }

    public function addImage(AnimalImage $image): self
    {
        if (!$this->images->contains($image)) {
            $this->images->add($image);
            $image->setAnimal($this);
        }

        return $this;
    }

    public function removeImage(AnimalImage $image): self
    {
        if ($this->images->removeElement($image)) {
            // set the owning side to null (unless already changed)
            if ($image->getAnimal() === $this) {
                $image->setAnimal(null);
            }
        }

        return $this;
    }


}
