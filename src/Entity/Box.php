<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\BoxRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=BoxRepository::class)
 * @ApiResource
 */
#[ApiResource(

    normalizationContext: [
        'groups' => [
            'read:collection',
            'read:item',
            'box',
            'write'
        ]
    ],
    itemOperations: [
        'get' => [
            'normalization_context' => [
                'groups' => ['read:collection', 'read:item', 'box']
            ]
        ],
        'put' => [
            'denormalization_context' => [
                'groups' => ['write']
            ]
        ]
    ]
)]

class Box
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    #[Groups(['read:collection', 'read:item'])]
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    #[Groups(['read:collection', 'read:item'])]
    private $nom;

    /**
     * @ORM\Column(type="float")
     */
    #[Groups(['read:collection', 'read:item'])]
    private $prix;

    /**
     * @ORM\Column(type="integer")
     */
    #[Groups(['read:collection', 'read:item'])]
    private $pieces;

    /**
     * @ORM\Column(type="string", length=255)
     */
    #[Groups(['read:collection', 'read:item'])]
    private $img;

    /**
     * @ORM\Column(type="string", length=255)
     */
    #[Groups(['read:collection', 'read:item'])]
    private $saveurs;

    /**
     * @ORM\ManyToMany(targetEntity=Contient::class, mappedBy="id_box")
     */
    private $id_contients;

    /**
     * @ORM\ManyToMany(targetEntity=Possede::class, mappedBy="id_box")
     */
    private $id_possedes;

    public function __construct()
    {
        $this->id_contients = new ArrayCollection();
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

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getPieces(): ?int
    {
        return $this->pieces;
    }

    public function setPieces(int $pieces): self
    {
        $this->pieces = $pieces;

        return $this;
    }

    public function getImg(): ?string
    {
        return $this->img;
    }

    public function setImg(string $img): self
    {
        $this->img = $img;

        return $this;
    }

    public function getSaveurs(): ?string
    {
        return $this->saveurs;
    }

    public function setSaveurs(string $saveurs): self
    {
        $this->saveurs = $saveurs;

        return $this;
    }

    /**
     * @return Collection<int, Contient>
     */
    public function getIdContients(): Collection
    {
        return $this->id_contients;
    }

    public function addIdContients(Contient $idContients): self
    {
        if (!$this->id_contients->contains($idContients)) {
            $this->id_contients[] = $idContients;
            $idContients->addIdBox($this);
        }

        return $this;
    }

    public function removeIdContients(Contient $idContients): self
    {
        if ($this->id_contients->removeElement($idContients)) {
            $idContients->removeIdBox($this);
        }

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
            $idPossede->addIdBox($this);
        }

        return $this;
    }

    public function removeIdPossede(Possede $idPossede): self
    {
        if ($this->id_possedes->removeElement($idPossede)) {
            $idPossede->removeIdBox($this);
        }

        return $this;
    }
}
