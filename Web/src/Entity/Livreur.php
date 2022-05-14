<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity
 */
class Livreur
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(name="idLivreur", type="integer")
     */
    private $idlivreur;

    /**
     * @var string
     * @Assert\NotBlank(message="nom doit etre non vide")
     * @ORM\Column(name="nomLivreur", type="string", length=20, nullable=false)
     */
    private $nomlivreur;

    /**
     * @var int
     * @Assert\Positive(message="numero telephone doit etre non vide")
     * @ORM\Column(name="numtel", type="integer", nullable=false)
     */
    private $numtel;

    /**
     * @var string
     * @Assert\NotBlank(message="prenom doit etre non vide")
     * @ORM\Column(name="prenom", type="string", length=100, nullable=false)
     */
    private $prenom;

    /**
     * @var string
     * @Assert\NotBlank(message="email doit etre non vide")
     * @ORM\Column(name="email", type="string", length=250, nullable=false)
     */
    private $email;

    public function getIdlivreur(): ?int
    {
        return $this->idlivreur;
    }

    public function getNomlivreur(): ?string
    {
        return $this->nomlivreur;
    }

    public function setNomlivreur(string $nomlivreur): self
    {
        $this->nomlivreur = $nomlivreur;

        return $this;
    }

    public function getNumtel(): ?int
    {
        return $this->numtel;
    }

    public function setNumtel(int $numtel): self
    {
        $this->numtel = $numtel;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }


}
