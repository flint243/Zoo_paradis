<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity(repositoryClass: UserRepository::class)]
class User implements UserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $pseudo = null;

    #[ORM\Column(length: 255)]
    private ?string $email = null;

    #[ORM\ManyToOne(inversedBy: 'pseudo')]
    private ?Avis $avis = null;

    /**
     * @var Collection<int, Donne>
     */
    #[ORM\OneToMany(targetEntity: Donne::class, mappedBy: 'id_Visiteur')]
    private Collection $id_Avis;

    #[ORM\Column]
    private array $roles = ['ROLE_USER'];

    #[ORM\Column]
    private ?\DateTimeImmutable $createdAt = null;

    public function __construct()
    {
        $this->id_Avis = new ArrayCollection();
        $this->createdAt = new \DateTimeImmutable(); // Initialisation de la date de création
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPseudo(): ?string
    {
        return $this->pseudo;
    }

    public function setPseudo(string $pseudo): static
    {
        $this->pseudo = $pseudo;

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

    public function getAvis(): ?Avis
    {
        return $this->avis;
    }

    public function setAvis(?Avis $avis): static
    {
        $this->avis = $avis;

        return $this;
    }

    /**
     * @return Collection<int, Donne>
     */
    public function getIdAvis(): Collection
    {
        return $this->id_Avis;
    }

    public function addIdAvi(Donne $idAvi): static
    {
        if (!$this->id_Avis->contains($idAvi)) {
            $this->id_Avis->add($idAvi);
            $idAvi->setIdVisiteur($this);
        }

        return $this;
    }

    public function removeIdAvi(Donne $idAvi): static
    {
        if ($this->id_Avis->removeElement($idAvi)) {
            // set the owning side to null (unless already changed)
            if ($idAvi->getIdVisiteur() === $this) {
                $idAvi->setIdVisiteur(null);
            }
        }

        return $this;
    }

    public function getRoles(): array
    {
        $roles = $this->roles;
        // Ajout du rôle par défaut "ROLE_USER" si ce n'est pas déjà présent
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): static
    {
        $this->roles = $roles;

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

    // Méthodes requises par l'interface UserInterface

    /**
     * Cette méthode remplace getUsername à partir de Symfony 5.3+.
     */
    public function getUserIdentifier(): string
    {
        return $this->email;
    }

    /**
     * Optionnel si vous n'avez pas de données sensibles à effacer après l'authentification.
     */
    public function eraseCredentials(): void
    {
        // Si vous avez des informations sensibles, vous pouvez les effacer ici
    }
}
