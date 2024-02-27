<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\BoissonsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BoissonsRepository::class)]
#[ApiResource()]

class Boissons
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?float $prix = null;

    #[ORM\Column(length: 255)]

    private ?string $nom = null;

    #[ORM\Column]
    private ?int $quantite = null;

    #[ORM\ManyToMany(targetEntity: Commandes::class, mappedBy: 'id_boissons')]
    private Collection $id_commandes;

    public function __construct()
    {
        $this->id_commandes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): static
    {
        $this->prix = $prix;

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

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(int $quantite): static
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * @return Collection<int, Commandes>
     */
    public function getIdCommandes(): Collection
    {
        return $this->id_commandes;
    }

    public function addIdCommande(Commandes $idCommande): static
    {
        if (!$this->id_commandes->contains($idCommande)) {
            $this->id_commandes->add($idCommande);
            $idCommande->addIdBoisson($this);
        }

        return $this;
    }

    public function removeIdCommande(Commandes $idCommande): static
    {
        if ($this->id_commandes->removeElement($idCommande)) {
            $idCommande->removeIdBoisson($this);
        }

        return $this;
    }
}
