<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Etudes
 *
 * @ORM\Table(name="etudes")
 * @ORM\Entity
 */
class Etudes
{
    /**
     * @var int
     *
     * @ORM\Column(name="IdEtude", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idetude;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Titre", type="string", length=45, nullable=true)
     */
    private $titre;

    /**
     * @var int|null
     *
     * @ORM\Column(name="NombreDePersonnes", type="integer", nullable=true)
     */
    private $nombredepersonnes;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Date", type="date", nullable=true)
     */
    private $date;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Plages", mappedBy="etudesIdetude")
     */
    private $plagesIdplage;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Utilisateurs", mappedBy="etudesIdetude")
     */
    private $utilisateursIdutilisateur;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->plagesIdplage = new \Doctrine\Common\Collections\ArrayCollection();
        $this->utilisateursIdutilisateur = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getIdetude(): ?int
    {
        return $this->idetude;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(?string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getNombredepersonnes(): ?int
    {
        return $this->nombredepersonnes;
    }

    public function setNombredepersonnes(?int $nombredepersonnes): self
    {
        $this->nombredepersonnes = $nombredepersonnes;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(?\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    /**
     * @return Collection|Plages[]
     */
    public function getPlagesIdplage(): Collection
    {
        return $this->plagesIdplage;
    }

    public function addPlagesIdplage(Plages $plagesIdplage): self
    {
        if (!$this->plagesIdplage->contains($plagesIdplage)) {
            $this->plagesIdplage[] = $plagesIdplage;
            $plagesIdplage->addEtudesIdetude($this);
        }

        return $this;
    }

    public function removePlagesIdplage(Plages $plagesIdplage): self
    {
        if ($this->plagesIdplage->contains($plagesIdplage)) {
            $this->plagesIdplage->removeElement($plagesIdplage);
            $plagesIdplage->removeEtudesIdetude($this);
        }

        return $this;
    }

    /**
     * @return Collection|Utilisateurs[]
     */
    public function getUtilisateursIdutilisateur(): Collection
    {
        return $this->utilisateursIdutilisateur;
    }

    public function addUtilisateursIdutilisateur(Utilisateurs $utilisateursIdutilisateur): self
    {
        if (!$this->utilisateursIdutilisateur->contains($utilisateursIdutilisateur)) {
            $this->utilisateursIdutilisateur[] = $utilisateursIdutilisateur;
            $utilisateursIdutilisateur->addEtudesIdetude($this);
        }

        return $this;
    }

    public function removeUtilisateursIdutilisateur(Utilisateurs $utilisateursIdutilisateur): self
    {
        if ($this->utilisateursIdutilisateur->contains($utilisateursIdutilisateur)) {
            $this->utilisateursIdutilisateur->removeElement($utilisateursIdutilisateur);
            $utilisateursIdutilisateur->removeEtudesIdetude($this);
        }

        return $this;
    }

}
