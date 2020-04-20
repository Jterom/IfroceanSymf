<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Utilisateurs
 *
 * @ORM\Table(name="utilisateurs")
 * @ORM\Entity
 */
class Utilisateurs
{
    /**
     * @var int
     *
     * @ORM\Column(name="IdUtilisateur", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idutilisateur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Nom", type="string", length=45, nullable=true)
     */
    private $nom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Prenom", type="string", length=45, nullable=true)
     */
    private $prenom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Mdp", type="string", length=45, nullable=true)
     */
    private $mdp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Email", type="string", length=45, nullable=true)
     */
    private $email;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Etudes", inversedBy="utilisateursIdutilisateur")
     * @ORM\JoinTable(name="utilisateurs_has_etudes",
     *   joinColumns={
     *     @ORM\JoinColumn(name="Utilisateurs_IdUtilisateur", referencedColumnName="IdUtilisateur")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="Etudes_IdEtude", referencedColumnName="IdEtude")
     *   }
     * )
     */
    private $etudesIdetude;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->etudesIdetude = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getIdutilisateur(): ?int
    {
        return $this->idutilisateur;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(?string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getMdp(): ?string
    {
        return $this->mdp;
    }

    public function setMdp(?string $mdp): self
    {
        $this->mdp = $mdp;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return Collection|Etudes[]
     */
    public function getEtudesIdetude(): Collection
    {
        return $this->etudesIdetude;
    }

    public function addEtudesIdetude(Etudes $etudesIdetude): self
    {
        if (!$this->etudesIdetude->contains($etudesIdetude)) {
            $this->etudesIdetude[] = $etudesIdetude;
        }

        return $this;
    }

    public function removeEtudesIdetude(Etudes $etudesIdetude): self
    {
        if ($this->etudesIdetude->contains($etudesIdetude)) {
            $this->etudesIdetude->removeElement($etudesIdetude);
        }

        return $this;
    }

}
