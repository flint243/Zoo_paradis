<?php

namespace App\Entity;

use App\Repository\ServicesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ServicesRepository::class)]
#[ORM\HasLifecycleCallbacks]
#[Vich\Uploadable]  // Annotaion Vich pour rendre l'entité "uploadable"
class Services
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\Column(type: 'datetime', nullable: true)]
    private ?\DateTimeInterface $updatedAt = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $servicesImages = null;

    #[Vich\UploadableField(mapping: 'services_uploads_images', fileNameProperty: 'servicesImages')]
    #[Assert\File(
        maxSize: '5M',
        mimeTypes: ['image/jpeg', 'image/jpg', 'image/png', 'image/gif'],
        mimeTypesMessage: 'Veuillez télécharger une image valide (jpeg, jpg, png, gif).'
    )]
    private ?File $servicesImageFile = null;

    public function __construct()
    {
        // Initialisation automatique de la date de création
        $this->createdAt = new \DateTimeImmutable();
    }


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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

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

    public function getUpdatedAt(): ?\DateTimeImmutable
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(\DateTimeImmutable $updatedAt): static
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function getServicesImages(): ?string
    {
        return $this->servicesImages;
    }

    public function setServicesImages(?string $servicesImages): static
    {
        $this->servicesImages = $servicesImages;

        return $this;
    }

    public function getServicesImageFile(): ?File
    {
        return $this->servicesImageFile;
    }

    public function setServicesImageFile(?File $servicesImageFile = null): void
    {
        $this->servicesImageFile = $servicesImageFile;

        if ($servicesImageFile) {
            // Si un fichier est téléchargé, on met à jour updatedAt
            $this->updatedAt = new \DateTime('now');
        }
    }

}
