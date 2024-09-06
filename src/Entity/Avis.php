<?php

namespace App\Entity;

use App\Repository\AvisRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AvisRepository::class)]
class Avis
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    /**
     * @var Collection<int, User>
     */
    #[ORM\OneToMany(targetEntity: User::class, mappedBy: 'avis')]
    private Collection $pseudo_visiteur;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $text = null;

    #[ORM\Column]
    private ?int $valide = null;

    #[ORM\ManyToOne(inversedBy: 'Id_Avis')]
    private ?Donne $donne = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $createdAt = null;

    public function __construct()
    {
        $this->pseudo_visiteur = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection<int, User>
     */
    public function getPseudoVisiteur(): Collection
    {
        return $this->pseudo_visiteur;
    }

    public function addPseudoVisiteur(User $pseudoVisiteur): static
    {
        if (!$this->pseudo_visiteur->contains($pseudoVisiteur)) {
            $this->pseudo_visiteur->add($pseudoVisiteur);
            $pseudoVisiteur->setAvis($this);
        }

        return $this;
    }

    public function removePseudoVisiteur(User $pseudoVisiteur): static
    {
        if ($this->pseudo_visiteur->removeElement($pseudoVisiteur)) {
            // set the owning side to null (unless already changed)
            if ($pseudoVisiteur->getAvis() === $this) {
                $pseudoVisiteur->setAvis(null);
            }
        }

        return $this;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(string $text): static
    {
        $this->text = $text;

        return $this;
    }

    public function getValide(): ?int
    {
        return $this->valide;
    }

    public function setValide(int $valide): static
    {
        $this->valide = $valide;

        return $this;
    }

    public function getDonne(): ?Donne
    {
        return $this->donne;
    }

    public function setDonne(?Donne $donne): static
    {
        $this->donne = $donne;

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
}
