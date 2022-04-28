<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reacts
 *
 * @ORM\Table(name="reacts")
 * @ORM\Entity
 */
class Reacts
{
    /**
     * @var int
     *
     * @ORM\Column(name="idarticles", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idarticles;

    /**
     * @var int
     *
     * @ORM\Column(name="idusers", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idusers;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datecrea", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $datecrea = 'CURRENT_TIMESTAMP';

    public function getIdarticles(): ?int
    {
        return $this->idarticles;
    }

    public function getIdusers(): ?int
    {
        return $this->idusers;
    }

    public function getDatecrea(): ?\DateTimeInterface
    {
        return $this->datecrea;
    }

    public function setDatecrea(\DateTimeInterface $datecrea): self
    {
        $this->datecrea = $datecrea;

        return $this;
    }


}
