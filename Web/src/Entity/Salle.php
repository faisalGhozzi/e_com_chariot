<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="SalleRepository::class")
 */
class Salle
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(name="idSalle", type="integer")
     */
    private $idsalle;

    /**
     * @var string
     * @ORM\Column(name="nom", type="string", length=50)
     * @Assert\NotBlank(message="Nom doit etre non vide !")
     * @Assert\Regex(
     *     pattern     = "/^[a-z]+$/i",
     *     htmlPattern = "[a-zA-Z]+",
     *     message = "Essayer un autre nom!"
     * )
     */
    private $nom;

    /**
     * @var float
     * @Assert\Range(
     *      min=1,
     *      notInRangeMessage="Le prix doit etre >0")
     * @Assert\NotBlank(message="Prix doit etre non vide !")
     * @Assert\Positive(message="entrer une valeure positive")
     * @ORM\Column(name="prixSalle", type="float", precision=10, scale=0, nullable=false)
     */
    private $prixsalle;

    /**
     * @var string
     * @ORM\Column(name="image", type="string", length=200, nullable=false)

     */
    private $image;

    /**
     * @var int
     * @Assert\NotBlank(message="la capacité ne doit pas etre vide !")
     * @Assert\Positive(message="entrer une valeure positive")
     * @Assert\Range(
     *      min = 5,
     *      max = 500,
     *      notInRangeMessage = "la capacite doit etre entre {{ min }} et {{ max }}")
     * @ORM\Column(name="capacite", type="integer", nullable=false)
     */
    private $capacite;


    public function getIdsalle(): ?int
    {
        return $this->idsalle;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrixsalle(): ?float
    {
        return $this->prixsalle;
    }

    public function setPrixsalle(?float $prixsalle): self
    {
        $this->prixsalle = $prixsalle;

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

    public function getCapacite(): ?int
    {
        return $this->capacite;
    }

    public function setCapacite(?int $capacite): self
    {
        $this->capacite = $capacite;

        return $this;
    }







}
