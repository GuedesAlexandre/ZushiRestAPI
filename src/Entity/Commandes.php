<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\CommandesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommandesRepository::class)]
#[ApiResource()]
class Commandes
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column]
    private ?float $prix_total = null;

    #[ORM\ManyToMany(targetEntity: Boxs::class, mappedBy: 'id_commandes')]
    private Collection $id_boxs;

    #[ORM\ManyToMany(targetEntity: Boissons::class, inversedBy: 'id_commandes')]
    private Collection $id_boissons;

    public function __construct()
    {
        $this->id_boxs = new ArrayCollection();
        $this->id_boissons = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): static
    {
        $this->date = $date;

        return $this;
    }

    public function getPrixTotal(): ?float
    {
        return $this->prix_total;
    }

    public function setPrixTotal(float $prix_total): static
    {
        $this->prix_total = $prix_total;

        return $this;
    }

    /**
     * @return Collection<int, Boxs>
     */
    public function getIdBoxs(): Collection
    {
        return $this->id_boxs;
    }

    public function addIdBox(Boxs $idBox): static
    {
        if (!$this->id_boxs->contains($idBox)) {
            $this->id_boxs->add($idBox);
            $idBox->addIdCommande($this);
        }

        return $this;
    }

    public function removeIdBox(Boxs $idBox): static
    {
        if ($this->id_boxs->removeElement($idBox)) {
            $idBox->removeIdCommande($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, Boissons>
     */
    public function getIdBoissons(): Collection
    {
        return $this->id_boissons;
    }

    public function addIdBoisson(Boissons $idBoisson): static
    {
        if (!$this->id_boissons->contains($idBoisson)) {
            $this->id_boissons->add($idBoisson);
        }

        return $this;
    }

    public function removeIdBoisson(Boissons $idBoisson): static
    {
        $this->id_boissons->removeElement($idBoisson);

        return $this;
    }
}
