<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Categorie
 *
 * @ORM\Table(name="categorie")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\CategorieRepository")
 */
class Categorie
{
    /**
     * @var int
     *
     * @ORM\Column(name="idCateg", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcateg;

    /**
     * @var string
     *
     * @ORM\Column(name="nomCateg", type="string", length=10, nullable=false)
     * @Assert\NotBlank(message="Nom doit etre non vide !")
     * @Assert\Length(
     *      min = 3,
     *      max = 50,
     *      minMessage = "la taille est trés courte",
     *      maxMessage = "Le nom de categorie ne doit pas depasser 50 carac" )
     */
    private $nomcateg;

    /**
     * @var string
     * @Assert\NotBlank(message="la description doit etre non vide !")
     * @Assert\Length(
     *      min = 3,
     *      max = 255,
     *      minMessage = "La description est trés courte",
     *      maxMessage = "ne doit pas depasser 255 carac" )
     * @ORM\Column(name="description", type="text", length=65535, nullable=false)
     */
    private $description;

    public function getIdcateg(): ?int
    {
        return $this->idcateg;
    }

    public function getNomcateg(): ?string
    {
        return $this->nomcateg;
    }

    public function setNomcateg(string $nomcateg): self
    {
        $this->nomcateg = $nomcateg;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }


}
