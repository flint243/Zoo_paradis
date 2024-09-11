<?php

namespace App\Entity;

use App\Repository\DonneRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DonneRepository::class)]
class Donne
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'id_Avis')]
    private ?User $id_Visiteur = null;

    /**
     * @var Collection<int, Avis>
     */
    #[ORM\OneToMany(targetEntity: Avis::class, mappedBy: 'donne')]
    private Collection $Id_Avis;

    public function __construct()
    {
        $this->Id_Avis = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdVisiteur(): ?User
    {
        return $this->id_Visiteur;
    }

    public function setIdVisiteur(?User $id_Visiteur): static
    {
        $this->id_Visiteur = $id_Visiteur;

        return $this;
    }

    /**
     * @return Collection<int, Avis>
     */
    public function getIdAvis(): Collection
    {
        return $this->Id_Avis;
    }

    public function addIdAvi(Avis $idAvi): static
    {
        if (!$this->Id_Avis->contains($idAvi)) {
            $this->Id_Avis->add($idAvi);
            $idAvi->setDonne($this);
        }

        return $this;
    }

    public function removeIdAvi(Avis $idAvi): static
    {
        if ($this->Id_Avis->removeElement($idAvi)) {
            // set the owning side to null (unless already changed)
            if ($idAvi->getDonne() === $this) {
                $idAvi->setDonne(null);
            }
        }

        return $this;
    }
}
