<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\CommandeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=CommandeRepository::class)
 * @ApiResource
 */
#[ApiResource()]
class Commande
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date;

    /**
     * @ORM\Column(type="float")
     */
    private $prix_total;

    /**
     * @ORM\ManyToMany(targetEntity=Contient::class, mappedBy="id_commande")
     */
    private $id_contients;

    public function __construct()
    {
        $this->id_contients = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getPrixTotal(): ?float
    {
        return $this->prix_total;
    }

    public function setPrixTotal(float $prix_total): self
    {
        $this->prix_total = $prix_total;

        return $this;
    }

    /**
     * @return Collection<int, Contient>
     */
    public function getIdContients(): Collection
    {
        return $this->id_contients;
    }

    public function addIdContient(Contient $idContient): self
    {
        if (!$this->id_contients->contains($idContient)) {
            $this->id_contients[] = $idContient;
            $idContient->addIdCommande($this);
        }

        return $this;
    }

    public function removeIdContient(Contient $idContient): self
    {
        if ($this->id_contients->removeElement($idContient)) {
            $idContient->removeIdCommande($this);
        }

        return $this;
    }
}
