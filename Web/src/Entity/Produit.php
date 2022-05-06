<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="ProduitRepository::class")
 */
class Produit
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(name="idProduit", type="integer")
     */
    private $idproduit;

    /**
     * @var string
     * @Assert\NotBlank(message="Le nom doit etre non vide !")
     * @Assert\Length(
     *      min = 1,
     *      max = 50,
     *      minMessage = "le nom est vide",
     *      maxMessage = "Le nom de produit ne doit pas depasser 50 carac" )
     * @ORM\Column(name="nomProduit", type="string", length=30, nullable=false)
     */
    private $nomproduit;

    /**
     * @var int
     * @Assert\NotBlank(message="La quantité doit etre non vide !")
     * @Assert\Range(
     *      min=1,
     *      max=100,
     *      notInRangeMessage="La quantite doit etre entre 1 et 100")
     * @ORM\Column(name="quantite", type="integer", nullable=false)
     */
    private $quantite;

    /**
     * @var float
     * @Assert\NotBlank(message="Prix ne doit pas etre vide !")
     * @Assert\Range(
     *      min=1,
     *      notInRangeMessage="Le prix doit etre >0")
     * @ORM\Column(name="prix", type="float", precision=10, scale=0, nullable=false)
     */
    private $prix;

    /**
     * @var string
     * @Assert\NotBlank(message="La description ne doit pas etre vide !")
     * @ORM\Column(name="description", type="string", length=250, nullable=false)
     */
    private $description;

    /**
     * @var string
     * @ORM\Column(name="image", type="string", length=200, nullable=false)
     */
    private $image;

    /**
     * @var \Categorie
     *
     * @ORM\ManyToOne(targetEntity="Categorie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_categ", referencedColumnName="idCateg")
     * })
     */
    private $idCateg;

    public function getIdproduit(): ?int
    {
        return $this->idproduit;
    }

    public function getNomproduit(): ?string
    {
        return $this->nomproduit;
    }

    public function setNomproduit(?string $nomproduit): self
    {
        $this->nomproduit = $nomproduit;

        return $this;
    }

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(?int $quantite): self
    {
        $this->quantite = $quantite;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(?float $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getIdCateg(): ?Categorie
    {
        return $this->idCateg;
    }

    public function setIdCateg(?Categorie $idCateg): self
    {
        $this->idCateg = $idCateg;

        return $this;
    }


}
