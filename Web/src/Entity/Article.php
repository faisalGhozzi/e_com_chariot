<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="ArticleRepository::class")
 */
class Article
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(name="idArticle", type="integer")
     */
    private $idarticle;

    /**
     * @var string
     * @ORM\Column(name="contenu", type="text", length=200, nullable=false)
     * @Assert\NotBlank(message="description  doit etre non vide")
     * @Assert\Length(
     *      min = 7,
     *      max = 100,
     *      minMessage = "doit etre >=7 ",
     *      maxMessage = "doit etre <=100" )
     */
    private $contenu;

    /**
     * @var string
     * @ORM\Column(name="titre", type="string", length=15, nullable=false)
     * @Assert\NotBlank(message=" titre doit etre non vide")
     * @Assert\Length(
     *      min = 5,
     *      minMessage=" Entrer un titre au mini de 5 caracteres"
     *
     *     )
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="Etat", type="string", length=200, nullable=false)
     */
    private $etat;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=200, nullable=false)
     */
    private $image;

    /**
     * @var int
     *
     * @ORM\Column(name="nbrreact", type="integer", nullable=false)
     */
    private $nbrreact;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="auteur", referencedColumnName="idUser")
     * })
     */
    private $auteur;

    public function getIdarticle(): ?int
    {
        return $this->idarticle;
    }

    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    public function setContenu(string $contenu): self
    {
        $this->contenu = $contenu;

        return $this;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(string $etat): self
    {
        $this->etat = $etat;

        return $this;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    public function getNbrreact(): ?int
    {
        return $this->nbrreact;
    }

    public function setNbrreact(int $nbrreact): self
    {
        $this->nbrreact = $nbrreact;

        return $this;
    }

    public function getAuteur(): ?User
    {
        return $this->auteur;
    }

    public function setAuteur(?User $auteur): self
    {
        $this->auteur = $auteur;

        return $this;
    }


}
