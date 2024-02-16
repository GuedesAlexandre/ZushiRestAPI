<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\PossedeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=PossedeRepository::class)
 * @ApiResource
 */
#[ApiResource()]
class Possede
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;


    /**
     * @ORM\ManyToMany(targetEntity=box::class, inversedBy="id_possedes")
     */
    private $id_box;

    /**
     * @ORM\ManyToMany(targetEntity=Aliments::class, inversedBy="id_possedes")
     */
    private $id_aliments;

    public function __construct()
    {
        $this->id_box = new ArrayCollection();
        $this->id_aliments = new ArrayCollection();
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
     * @return Collection<int, Aliments>
     */
    public function getIdAliments(): Collection
    {
        return $this->id_aliments;
    }

    public function addIdAliment(Aliments $idAliment): self
    {
        if (!$this->id_aliments->contains($idAliment)) {
            $this->id_aliments[] = $idAliment;
        }

        return $this;
    }

    public function removeIdAliment(Aliments $idAliment): self
    {
        $this->id_aliments->removeElement($idAliment);

        return $this;
    }
}
