<?php

namespace App\Entity;

use App\Entity\User;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Vangrg\ProfanityBundle\Validator\Constraints as ProfanityAssert;


/**
 *@ORM\Entity
 */
class Commentaire
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(name="idCommentaire", type="integer")
     */
    private $idcommentaire;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu_c", type="text", length=200, nullable=false)
     * @Assert\NotBlank(message="description  doit etre non vide")
     * @Assert\Length(
     *      min = 7,
     *      max = 100,
     *      minMessage = "doit etre >=7 ",
     *      maxMessage = "doit etre <=100" )
     * @ProfanityAssert\ProfanityCheck
     */
    private $contenuC;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datepub", type="datetime", nullable=false)
     */
    private $datepub;

    /**
     * @var \Article
     *
     * @ORM\ManyToOne(targetEntity="Article")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_article", referencedColumnName="idArticle")
     * })
     */
    private $idArticle;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="auteur_c", referencedColumnName="idUser")
     * })
     */
    private $auteurC;

    /**
     * @ORM\OneToMany(targetEntity="Reacts", mappedBy="idcommentaire",orphanRemoval=true)
     */
    private $reacts;

    public function __construct()
    {
        $this->datepub = new \DateTime();
        $this->reacts = new ArrayCollection();
    }

    public function getIdcommentaire(): ?int
    {
        return $this->idcommentaire;
    }

    public function getContenuC(): ?string
    {
        return $this->contenuC;
    }

    public function setContenuC(string $contenuC): self
    {
        $this->contenuC = $contenuC;

        return $this;
    }

    public function getDatepub(): ?\DateTimeInterface
    {
        return $this->datepub;
    }

    public function setDatepub(\DateTimeInterface $datepub): self
    {
        $this->datepub = $datepub;

        return $this;
    }

    public function getIdArticle(): ?Article
    {
        return $this->idArticle;
    }

    public function setIdArticle(?Article $idArticle): self
    {
        $this->idArticle = $idArticle;

        return $this;
    }

    public function getAuteurC(): ?User
    {
        return $this->auteurC;
    }

    public function setAuteurC(?User $auteurC): self
    {
        $this->auteurC = $auteurC;

        return $this;
    }


    /**
     * @return Collection|Reacts[]
     */
    public function getReacts(): Collection
    {
        return $this->reacts;
    }
    public function addReacts(Reacts $r): self
    {
        if (!$this->reacts->contains($r)) {
            $this->reacts[] = $r;
            $r->setIdCommentaire($this);
        }
        return $this;
    }
    public function removeReacts(Reacts $r): self
    {
        if ($this->reacts->contains($r)) {
            $this->reacts->removeElement($r);
            // set the owning side to null (unless already changed)
            if ($r->getIdCommentaire() === $this) {
                $r->setIdCommentaire(null);
            }
        }
        return $this;
    }
    public function isLikedByUser(User $user) : bool{
        foreach($this->reacts as $react){
            if($react->getIdusers() == $user) return true;

        }
        return false;
    }
}
