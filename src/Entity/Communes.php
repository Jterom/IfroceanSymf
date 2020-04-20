<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Communes
 *
 * @ORM\Table(name="communes", indexes={@ORM\Index(name="fk_Communes_Departements1_idx", columns={"Departements_idDepartement"})})
 * @ORM\Entity
 */
class Communes
{
    /**
     * @var int
     *
     * @ORM\Column(name="idCommune", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcommune;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NomCommune", type="string", length=45, nullable=true)
     */
    private $nomcommune;

    /**
     * @var \Departements
     *
     * @ORM\ManyToOne(targetEntity="Departements")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Departements_idDepartement", referencedColumnName="idDepartement")
     * })
     */
    private $departementsIddepartement;

    public function getIdcommune(): ?int
    {
        return $this->idcommune;
    }

    public function getNomcommune(): ?string
    {
        return $this->nomcommune;
    }

    public function setNomcommune(?string $nomcommune): self
    {
        $this->nomcommune = $nomcommune;

        return $this;
    }

    public function getDepartementsIddepartement(): ?Departements
    {
        return $this->departementsIddepartement;
    }

    public function setDepartementsIddepartement(?Departements $departementsIddepartement): self
    {
        $this->departementsIddepartement = $departementsIddepartement;

        return $this;
    }


}
