<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Type
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(name="idType", type="integer")
     */
    private $idtype;

    /**
     * @var string
     *
     * @ORM\Column(name="libelleType", type="string", length=20, nullable=false)
     */
    private $libelletype;

    public function getIdtype(): ?int
    {
        return $this->idtype;
    }

    public function getLibelletype(): ?string
    {
        return $this->libelletype;
    }

    public function setLibelletype(string $libelletype): self
    {
        $this->libelletype = $libelletype;

        return $this;
    }


}
