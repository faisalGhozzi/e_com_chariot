<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="ReactsRepository::class")
 */
class Reacts
{
    /**
     * @var int
     *
     * @ORM\Column(name="idReact", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idreact;

    /**
     * @var \Commentaire
     *
     * @ORM\ManyToOne(targetEntity="Commentaire",inversedBy="reacts")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idcommentaire", referencedColumnName="idCommentaire")
     * })
     */
    private $idcommentaire;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idusers", referencedColumnName="idUser")
     * })
     */
    private $idusers;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datecrea", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $datecrea;

    public function getIdCommentaire(): ?Commentaire
    {
        return $this->idcommentaire;
    }

    public function getIdusers(): ?User
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

    /**
     * @return int
     */
    public function getIdreact(): int
    {
        return $this->idreact;
    }

    /**
     * @param int $idreact
     */
    public function setIdreact(int $idreact): void
    {
        $this->idreact = $idreact;
    }
    public function setIdCommentaire(?Commentaire $idcommentaire)
    {
        $this->idcommentaire=$idcommentaire;
    }

    public function setIdUser(?User $iduser)
    {
        $this->idusers=$iduser;
    }



}
