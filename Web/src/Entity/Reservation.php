<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * Reservation
 *
 * @ORM\Table(name="reservation", indexes={@ORM\Index(name="id_client", columns={"id_client"}), @ORM\Index(name="id_salle", columns={"id_salle"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\ReservationRepository")
 */
class Reservation
{
    /**
     * @var int
     *
     * @ORM\Column(name="idReservation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idreservation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     * @Assert\GreaterThan("today")
     */
    private $date;

    /**
     * @var int
     *
     * @ORM\Column(name="nbrP", type="integer", nullable=false)
     * @Assert\NotBlank(message="le nombre ne doit pas etre vide !")
     * @Assert\Range(
     *      min=5,
     *      notInRangeMessage="doit etre >5")
     */
    private $nbrp;

    /**
     * @var \Salle
     *
     * @ORM\ManyToOne(targetEntity="Salle")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_salle", referencedColumnName="idSalle")
     * })
     */
    private $idSalle;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_client", referencedColumnName="idUser")
     * })
     */
    private $idClient;

    public function getIdreservation(): ?int
    {
        return $this->idreservation;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getNbrp(): ?int
    {
        return $this->nbrp;
    }

    public function setNbrp(int $nbrp): self
    {
        $this->nbrp = $nbrp;

        return $this;
    }

    public function getIdSalle(): ?Salle
    {
        return $this->idSalle;
    }

    public function setIdSalle(?Salle $idSalle): self
    {
        $this->idSalle = $idSalle;

        return $this;
    }

    public function getIdClient(): ?User
    {
        return $this->idClient;
    }

    public function setIdClient(?User $idClient): self
    {
        $this->idClient = $idClient;

        return $this;
    }


}
