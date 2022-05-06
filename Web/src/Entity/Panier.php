<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Panier
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(name="idPanier", type="integer")
     */
    private $idpanier;

    /**
     * @var \Produit
     *
     * @ORM\ManyToOne(targetEntity="Produit")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idProduit", referencedColumnName="idProduit")
     * })
     */
    private $idproduit;

    public function getIdpanier(): ?int
    {
        return $this->idpanier;
    }

    public function getIdproduit(): ?Produit
    {
        return $this->idproduit;
    }

    public function setIdproduit(?Produit $idproduit): self
    {
        $this->idproduit = $idproduit;

        return $this;
    }


}
