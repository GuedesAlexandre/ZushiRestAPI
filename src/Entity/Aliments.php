<?php

namespace App\Entity;

use App\Repository\AlimmentsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AlimmentsRepository::class)
 */
class Aliments
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="integer")
     */
    private $quantite;

    /**
     * @ORM\ManyToMany(targetEntity=Possede::class, mappedBy="id_alimments")
     */
    private $id_possedes;

    public function __construct()
    {
        $this->id_possedes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(int $quantite): self
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * @return Collection<int, Possede>
     */
    public function getIdPossedes(): Collection
    {
        return $this->id_possedes;
    }

    public function addIdPossede(Possede $idPossede): self
    {
        if (!$this->id_possedes->contains($idPossede)) {
            $this->id_possedes[] = $idPossede;
            $idPossede->addIdAliment($this);
        }

        return $this;
    }

    public function removeIdPossede(Possede $idPossede): self
    {
        if ($this->id_possedes->removeElement($idPossede)) {
            $idPossede->removeIdAliment($this);
        }

        return $this;
    }
}
