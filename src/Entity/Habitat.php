<?php

namespace App\Entity;

use App\Repository\HabitatRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\Validator\Constraints as Assert;


#[ORM\Entity(repositoryClass: HabitatRepository::class)]
#[ORM\EntityListeners(['App\EventListener\HabitatEntityListener'])]
#[ORM\HasLifecycleCallbacks]
#[Vich\Uploadable] // Indiquer que l'entité est uploadable via VichUploader
class Habitat
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nom = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description_habitat = null;

    #[Vich\UploadableField(mapping: 'user_profile_image', fileNameProperty: 'imagesHabitat')]
    #[Assert\File(
        maxSize: '5M',
        mimeTypes: ['image/jpeg', 'image/png', 'image/gif'],
        mimeTypesMessage: 'Veuillez télécharger une image valide (jpeg, png, gif).'
    )]
    private ?File $imageFile = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $imagesHabitat = null;

    #[ORM\Column(type: 'datetime', nullable: true)]
    private ?\DateTimeInterface $updatedAt = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $createdAt = null;

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

    public function getImageFile(): ?File
    {
        return $this->imageFile;
    }

    public function setImageFile(?File $imageFile = null): void
    {
        $this->imageFile = $imageFile;

        if ($imageFile) {
            // Si un fichier est téléchargé, on met à jour updatedAt
            $this->updatedAt = new \DateTime('now');
        }
    }

    public function getImagesHabitat(): ?string
    {
        return $this->imagesHabitat;
    }

    public function setImagesHabitat(?string $imagesHabitat): self
    {
        $this->imagesHabitat = $imagesHabitat;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

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

    #[ORM\PrePersist]
    public function onPrePersist(): void
    {
        $this->createdAt = new \DateTimeImmutable();
        $this->updatedAt = new \DateTime();  // Initialise également la date de mise à jour lors de la création
    }

    #[ORM\PreUpdate]
    public function onPreUpdate(): void
    {
        $this->updatedAt = new \DateTime();  // Met à jour uniquement updatedAt lors des modifications
    }
}