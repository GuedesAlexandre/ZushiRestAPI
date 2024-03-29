<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\BoxsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: BoxsRepository::class)]
#[ApiResource(
    normalizationContext: ['groups' => ['boxs']]

)]
class Boxs
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['boxs', 'commandes'])]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Groups(['boxs', 'commandes'])]
    private ?string $nom = null;

    #[ORM\Column]
    #[Groups(['boxs', 'commandes'])]
    private ?float $prix = null;

    #[ORM\Column]
    #[Groups(['boxs'])]
    private ?int $pieces = null;

    #[ORM\Column(length: 255)]
    #[Groups(['boxs'])]
    private ?string $img = null;



    #[ORM\ManyToMany(targetEntity: Aliments::class, inversedBy: 'id_boxes')]
    #[Groups(['boxs'])]
    private Collection $id_aliments;

    #[ORM\ManyToMany(targetEntity: Commandes::class, inversedBy: 'id_boxs')]
    private Collection $id_commandes;

    #[ORM\ManyToMany(targetEntity: Saveurs::class, inversedBy: 'boxs')]
    #[Groups(['boxs'])]
    private Collection $id_saveurs;

    public function __construct()
    {
        $this->id_aliments = new ArrayCollection();
        $this->id_commandes = new ArrayCollection();
        $this->id_saveurs = new ArrayCollection();
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

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): static
    {
        $this->prix = $prix;

        return $this;
    }

    public function getPieces(): ?int
    {
        return $this->pieces;
    }

    public function setPieces(int $pieces): static
    {
        $this->pieces = $pieces;

        return $this;
    }

    public function getImg(): ?string
    {
        return $this->img;
    }

    public function setImg(string $img): static
    {
        $this->img = $img;

        return $this;
    }


    /**
     * @return Collection<int, Aliments>
     */
    public function getIdAliments(): Collection
    {
        return $this->id_aliments;
    }

    public function addIdAliment(Aliments $idAliment): static
    {
        if (!$this->id_aliments->contains($idAliment)) {
            $this->id_aliments->add($idAliment);
        }

        return $this;
    }

    public function removeIdAliment(Aliments $idAliment): static
    {
        $this->id_aliments->removeElement($idAliment);

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
        }

        return $this;
    }

    public function removeIdCommande(Commandes $idCommande): static
    {
        $this->id_commandes->removeElement($idCommande);

        return $this;
    }

    /**
     * @return Collection<int, Saveurs>
     */
    public function getIdSaveurs(): Collection
    {
        return $this->id_saveurs;
    }

    public function addIdSaveur(Saveurs $idSaveur): static
    {
        if (!$this->id_saveurs->contains($idSaveur)) {
            $this->id_saveurs->add($idSaveur);
        }

        return $this;
    }

    public function removeIdSaveur(Saveurs $idSaveur): static
    {
        $this->id_saveurs->removeElement($idSaveur);

        return $this;
    }
}
