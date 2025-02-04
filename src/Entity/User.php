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
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\HasLifecycleCallbacks()]
#[Vich\Uploadable]  // Annotaion Vich pour rendre l'entité "uploadable"
#[UniqueEntity(fields: ['email'], message: 'Il y a déjà un compte avec cet email')]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    public function __toString(): string
    {
        return $this->nom;
    }
    
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[Assert\NotBlank(message: "Le nom est obligatoire.")]
    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[Assert\NotBlank(message: "L'email est obligatoire.")]
    #[Assert\Email(message: "L'email '{{ value }}' n'est pas valide.")]
    #[ORM\Column(length: 255)]
    private ?string $email = null;

    #[Assert\NotBlank(message: "Le mot de passe est obligatoire.")]
    #[Assert\Length(min: 8, minMessage: "Le mot de passe doit contenir au moins 8 caractères.")]
    #[ORM\Column]
    private ?string $password = null;

    private $passwordHasher;

    private $plainPassword;

    #[ORM\Column]
    private array $roles = ["ROLE_SUPER_ADMIN"];

    #[ORM\Column]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\Column(type: 'datetime', nullable: true)]
    private ?\DateTimeInterface $updatedAt = null;

    /**
     * @var Collection<int, Animal>
     */
    #[ORM\OneToMany(targetEntity: Animal::class, mappedBy: 'user')]
    private Collection $animals;

    #[ORM\ManyToOne(inversedBy: 'userId')]
    private ?Animal $animal = null;

    #[ORM\ManyToOne(inversedBy: 'userId')]
    private ?Habitat $habitat = null;

    #[ORM\ManyToOne(inversedBy: 'userId')]
    private ?Services $services = null;

    #[ORM\ManyToOne(inversedBy: 'userId')]
    private ?InfosAnimal $infosAnimal = null;


    /**
     * @Assert\Length(min=6, max=4096)
     */
    public function getPlainPassword(): ?string
    {
        return $this->plainPassword;
    }

    public function setPlainPassword(?string $plainPassword): self
    {
        $this->plainPassword = $plainPassword;

        return $this;
    }
    

    public function __construct()
    {
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

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;
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

    public function getRoles(): array
    {
        return $this->roles ?? ['ROLE_SUPER_ADMIN'];
    }

    public function setRoles(array $roles): static
    {
        $this->roles = $roles;
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
        }

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

    public function getAnimal(): ?Animal
    {
        return $this->animal;
    }

    public function setAnimal(?Animal $animal): static
    {
        $this->animal = $animal;

        return $this;
    }

    public function getHabitat(): ?Habitat
    {
        return $this->habitat;
    }

    public function setHabitat(?Habitat $habitat): static
    {
        $this->habitat = $habitat;

        return $this;
    }

    public function getServices(): ?Services
    {
        return $this->services;
    }

    public function setServices(?Services $services): static
    {
        $this->services = $services;

        return $this;
    }

    public function getInfosAnimal(): ?InfosAnimal
    {
        return $this->infosAnimal;
    }

    public function setInfosAnimal(?InfosAnimal $infosAnimal): static
    {
        $this->infosAnimal = $infosAnimal;

        return $this;
    }


}
