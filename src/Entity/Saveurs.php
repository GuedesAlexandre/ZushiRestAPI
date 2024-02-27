<?php

namespace App\Entity;

use App\Repository\SaveursRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: SaveursRepository::class)]
class Saveurs
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Groups(['boxs'])]
    private ?string $nom = null;

    #[ORM\Column]
    private ?int $quantite = null;

    #[ORM\ManyToMany(targetEntity: Boxs::class, mappedBy: 'id_saveurs')]
    private Collection $boxs;

    public function __construct()
    {
        $this->boxs = new ArrayCollection();
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
     * @return Collection<int, Boxs>
     */
    public function getBoxs(): Collection
    {
        return $this->boxs;
    }

    public function addBox(Boxs $box): static
    {
        if (!$this->boxs->contains($box)) {
            $this->boxs->add($box);
            $box->addIdSaveur($this);
        }

        return $this;
    }

    public function removeBox(Boxs $box): static
    {
        if ($this->boxs->removeElement($box)) {
            $box->removeIdSaveur($this);
        }

        return $this;
    }
}
