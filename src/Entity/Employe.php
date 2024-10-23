<?php

namespace App\Entity;

use App\Repository\EmployeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;


#[ORM\Entity(repositoryClass: EmployeRepository::class)]
class Employe 
{
    private array $roles = ["ROLE_EMPLOYE"];

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $email = null;

    #[ORM\Column(length: 255)]
    private ?string $alimentation = null;

    #[ORM\Column(length: 255)]
    private ?string $quantite = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date_alimentation = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $created_at = null;

    /**
     * @var Collection<int, Avis>
     */
    #[ORM\OneToMany(targetEntity: Avis::class, mappedBy: 'employe')]
    private Collection $avis;

    /**
     * @var Collection<int, Animal>
     */
    #[ORM\OneToMany(targetEntity: Animal::class, mappedBy: 'employe')]
    private Collection $animals;

    /**
     * @var Collection<int, Contact>
     */
    #[ORM\OneToMany(targetEntity: Contact::class, mappedBy: 'employe')]
    private Collection $contacts;

    /**
     * @var Collection<int, Services>
     */
    #[ORM\OneToMany(targetEntity: Services::class, mappedBy: 'employe')]
    private Collection $services;

    public function __construct()
    {
        $this->avis = new ArrayCollection();
        $this->animals = new ArrayCollection();
        $this->contacts = new ArrayCollection();
        $this->services = new ArrayCollection();
        $this->created_at = new \DateTimeImmutable();
    }

    public function getRoles(): array
    {
        $roles = $this->roles;
        // S'assurer que tous les employés ont au moins le rôle ROLE_EMPLOYEE
        $roles[] = 'ROLE_EMPLOYEE';
        return array_unique($roles);
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getAlimentation(): ?string
    {
        return $this->alimentation;
    }

    public function setAlimentation(string $alimentation): static
    {
        $this->alimentation = $alimentation;

        return $this;
    }

    public function getQuantite(): ?string
    {
        return $this->quantite;
    }

    public function setQuantite(string $quantite): static
    {
        $this->quantite = $quantite;

        return $this;
    }

    public function getDateAlimentation(): ?\DateTimeInterface
    {
        return $this->date_alimentation;
    }

    public function setDateAlimentation(\DateTimeInterface $date_alimentation): static
    {
        $this->date_alimentation = $date_alimentation;

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

    /**
     * @return Collection<int, Avis>
     */
    public function getAvis(): Collection
    {
        return $this->avis;
    }

    public function addAvi(Avis $avi): static
    {
        if (!$this->avis->contains($avi)) {
            $this->avis->add($avi);
            $avi->setEmploye($this);
        }

        return $this;
    }

    public function removeAvi(Avis $avi): static
    {
        if ($this->avis->removeElement($avi)) {
            // set the owning side to null (unless already changed)
            if ($avi->getEmploye() === $this) {
                $avi->setEmploye(null);
            }
        }

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
            $animal->setEmploye($this);
        }

        return $this;
    }

    public function removeAnimal(Animal $animal): static
    {
        if ($this->animals->removeElement($animal)) {
            // set the owning side to null (unless already changed)
            if ($animal->getEmploye() === $this) {
                $animal->setEmploye(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Contact>
     */
    public function getContacts(): Collection
    {
        return $this->contacts;
    }

    public function addContact(Contact $contact): static
    {
        if (!$this->contacts->contains($contact)) {
            $this->contacts->add($contact);
            $contact->setEmploye($this);
        }

        return $this;
    }

    public function removeContact(Contact $contact): static
    {
        if ($this->contacts->removeElement($contact)) {
            // set the owning side to null (unless already changed)
            if ($contact->getEmploye() === $this) {
                $contact->setEmploye(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Services>
     */
    public function getServicess(): Collection
    {
        return $this->servicess;
    }

    public function addServices(Services $services): static
    {
        if (!$this->servicess->contains($services)) {
            $this->servicess->add($services);
            $services->setEmploye($this);
        }

        return $this;
    }

    public function removeServices(Services $services): static
    {
        if ($this->servicess->removeElement($services)) {
            // set the owning side to null (unless already changed)
            if ($services->getEmploye() === $this) {
                $services->setEmploye(null);
            }
        }

        return $this;
    }
}
