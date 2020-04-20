<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Plages
 *
 * @ORM\Table(name="plages", indexes={@ORM\Index(name="fk_Plages_Communes1_idx", columns={"Communes_idCommune"}), @ORM\Index(name="fk_Plages_table11_idx", columns={"table1_idDepartement"})})
 * @ORM\Entity
 */
class Plages
{
    /**
     * @var int
     *
     * @ORM\Column(name="IdPlage", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idplage;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Nom", type="string", length=45, nullable=true)
     */
    private $nom;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Superficie", type="float", precision=10, scale=0, nullable=true)
     */
    private $superficie;

    /**
     * @var \Communes
     *
     * @ORM\ManyToOne(targetEntity="Communes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Communes_idCommune", referencedColumnName="idCommune")
     * })
     */
    private $communesIdcommune;

    /**
     * @var \Departements
     *
     * @ORM\ManyToOne(targetEntity="Departements")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="table1_idDepartement", referencedColumnName="idDepartement")
     * })
     */
    private $table1Iddepartement;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Etudes", inversedBy="plagesIdplage")
     * @ORM\JoinTable(name="plages_has_etudes",
     *   joinColumns={
     *     @ORM\JoinColumn(name="Plages_IdPlage", referencedColumnName="IdPlage")
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

    public function getIdplage(): ?int
    {
        return $this->idplage;
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

    public function getSuperficie(): ?float
    {
        return $this->superficie;
    }

    public function setSuperficie(?float $superficie): self
    {
        $this->superficie = $superficie;

        return $this;
    }

    public function getCommunesIdcommune(): ?Communes
    {
        return $this->communesIdcommune;
    }

    public function setCommunesIdcommune(?Communes $communesIdcommune): self
    {
        $this->communesIdcommune = $communesIdcommune;

        return $this;
    }

    public function getTable1Iddepartement(): ?Departements
    {
        return $this->table1Iddepartement;
    }

    public function setTable1Iddepartement(?Departements $table1Iddepartement): self
    {
        $this->table1Iddepartement = $table1Iddepartement;

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
