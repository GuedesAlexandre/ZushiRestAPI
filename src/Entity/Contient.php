<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\ContientRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=ContientRepository::class)
 * @ApiResource
 */
#[ApiResource()]
class Contient
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToMany(targetEntity=box::class, inversedBy="id_commande")
     */
    private $id_box;

    /**
     * @ORM\ManyToMany(targetEntity=Commande::class, inversedBy="id_contients")
     */
    private $id_commande;

    public function __construct()
    {
        $this->id_box = new ArrayCollection();
        $this->id_commande = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection<int, box>
     */
    public function getIdBox(): Collection
    {
        return $this->id_box;
    }

    public function addIdBox(box $idBox): self
    {
        if (!$this->id_box->contains($idBox)) {
            $this->id_box[] = $idBox;
        }

        return $this;
    }

    public function removeIdBox(box $idBox): self
    {
        $this->id_box->removeElement($idBox);

        return $this;
    }

    /**
     * @return Collection<int, Commande>
     */
    public function getIdCommande(): Collection
    {
        return $this->id_commande;
    }

    public function addIdCommande(Commande $idCommande): self
    {
        if (!$this->id_commande->contains($idCommande)) {
            $this->id_commande[] = $idCommande;
        }

        return $this;
    }

    public function removeIdCommande(Commande $idCommande): self
    {
        $this->id_commande->removeElement($idCommande);

        return $this;
    }
}
