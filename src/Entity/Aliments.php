<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\AlimentsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: AlimentsRepository::class)]
#[ApiResource()]
class Aliments
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]

    private ?int $id = null;

    #[Groups(['boxs'])]
    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column]

    private ?int $quantite = null;

    #[ORM\ManyToMany(targetEntity: Boxs::class, mappedBy: 'id_aliments')]
    private Collection $id_boxes;

    public function __construct()
    {
        $this->id_boxes = new ArrayCollection();
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
    public function getIdBoxes(): Collection
    {
        return $this->id_boxes;
    }

    public function addIdBox(Boxs $idBox): static
    {
        if (!$this->id_boxes->contains($idBox)) {
            $this->id_boxes->add($idBox);
            $idBox->addIdAliment($this);
        }

        return $this;
    }

    public function removeIdBox(Boxs $idBox): static
    {
        if ($this->id_boxes->removeElement($idBox)) {
            $idBox->removeIdAliment($this);
        }

        return $this;
    }
}
