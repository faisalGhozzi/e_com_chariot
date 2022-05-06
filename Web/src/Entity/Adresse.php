<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Adresse
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(name="id_adresse", type="integer")
     */
    private $idAdresse;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=50, nullable=false)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="rue", type="string", length=50, nullable=false)
     */
    private $rue;

    /**
     * @var int
     *
     * @ORM\Column(name="numMaison", type="integer", nullable=false)
     */
    private $nummaison;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="iduser", referencedColumnName="idUser")
     * })
     */
    private $iduser;

    public function getIdAdresse(): ?int
    {
        return $this->idAdresse;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getRue(): ?string
    {
        return $this->rue;
    }

    public function setRue(string $rue): self
    {
        $this->rue = $rue;

        return $this;
    }

    public function getNummaison(): ?int
    {
        return $this->nummaison;
    }

    public function setNummaison(int $nummaison): self
    {
        $this->nummaison = $nummaison;

        return $this;
    }

    public function getIduser(): ?User
    {
        return $this->iduser;
    }

    public function setIduser(?User $iduser): self
    {
        $this->iduser = $iduser;

        return $this;
    }


}
