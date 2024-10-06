<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\HasLifecycleCallbacks()]
#[Vich\Uploadable]  // Annotaion Vich pour rendre l'entité "uploadable"
#[UniqueEntity(fields: ['email'], message: 'Il y a déjà un compte avec cet email')]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $email = null;

    #[ORM\Column]
    private array $roles = [];

    #[ORM\Column]
    private ?string $password = null;

    private $passwordHasher;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $profileImage = null;

    #[Vich\UploadableField(mapping: 'user_uploads_images', fileNameProperty: 'profileImage')]
    private ?File $profileImageFile = null;


    #[ORM\Column(type: 'datetime', nullable: true)]
    private ?\DateTimeInterface $updatedAt = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\OneToMany(targetEntity: Avis::class, mappedBy: 'user', cascade: ['persist', 'remove'])]
    private Collection $avis;


    public function __construct()
    {
        $this->createdAt = new \DateTimeImmutable();
        $this->avis = new ArrayCollection();
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

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;
        return $this;
    }

    public function getRoles(): array
    {
        $roles = $this->roles;

        return array_unique($roles);
    }

    public function setRoles(array $roles): static
    {
        $this->roles = $roles;
        return $this;
    }

    /**
     * @ORM\PrePersist
     * @ORM\PreUpdate
     */
    public function hashPassword(): void
    {
        if ($this->password) {
            $hashedPassword = $this->passwordHasher->hashPassword($this, $this->password);
            $this->setPassword($hashedPassword);
        }
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;
        return $this;
    }

    public function getProfileImageFile(): ?File
    {
        return $this->profileImageFile;
    }

    public function setProfileImageFile(?File $profileImageFile = null): void
    {
        $this->profileImageFile = $profileImageFile;

        if ($profileImageFile) {
            // Si un fichier est téléchargé, on met à jour updatedAt
            $this->updatedAt = new \DateTime('now');
        }
    }

    public function getProfileImage(): ?string
    {
        return $this->profileImage;
    }

    public function setProfileImage(?string $profileImage): self
    {
        $this->profileImage = $profileImage;

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

    /**
     * Cette méthode remplace getUsername() depuis Symfony 5.3.
     * Elle retourne l'identifiant unique de l'utilisateur (email dans ce cas).
     */
    public function getUserIdentifier(): string
    {
        return $this->email;
    }

    /**
     * Cette méthode permet d'effacer des données sensibles après l'authentification.
     * Ici, elle est vide car nous n'avons rien à effacer.
     */
    public function eraseCredentials(): void
    {
        // Efface des informations sensibles si nécessaire (ex: mots de passe en clair).
    }

    public function getAvis(): Collection
    {
        return $this->avis;
    }

    public function addAvis(Avis $avis): static
    {
        if (!$this->avis->contains($avis)) {
            $this->avis->add($avis);
            $avis->setUser($this);
        }

        return $this;
    }

    public function removeAvis(Avis $avis): static
    {
        if ($this->avis->removeElement($avis)) {
            if ($avis->getUser() === $this) {
                $avis->setUser(null);
            }
        }

        return $this;
    }

    public function addAvi(Avis $avi): static
    {
        if (!$this->avis->contains($avi)) {
            $this->avis->add($avi);
            $avi->setUser($this);
        }

        return $this;
    }

    public function removeAvi(Avis $avi): static
    {
        if ($this->avis->removeElement($avi)) {
            // set the owning side to null (unless already changed)
            if ($avi->getUser() === $this) {
                $avi->setUser(null);
            }
        }

        return $this;
    }
}
