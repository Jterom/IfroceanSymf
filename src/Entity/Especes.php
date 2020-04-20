<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Especes
 *
 * @ORM\Table(name="especes", indexes={@ORM\Index(name="fk_Especes_Zones_De_Prelevements1_idx", columns={"Zones_De_Prelevements_idZone_De_Prelevement"})})
 * @ORM\Entity
 */
class Especes
{
    /**
     * @var int
     *
     * @ORM\Column(name="IdEspece", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idespece;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Nom", type="string", length=45, nullable=true)
     */
    private $nom;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Nombre", type="integer", nullable=true)
     */
    private $nombre;

    /**
     * @var \ZonesDePrelevements
     *
     * @ORM\ManyToOne(targetEntity="ZonesDePrelevements")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Zones_De_Prelevements_idZone_De_Prelevement", referencedColumnName="idZone_De_Prelevement")
     * })
     */
    private $zonesDePrelevementsIdzoneDePrelevement;

    public function getIdespece(): ?int
    {
        return $this->idespece;
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

    public function getNombre(): ?int
    {
        return $this->nombre;
    }

    public function setNombre(?int $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getZonesDePrelevementsIdzoneDePrelevement(): ?ZonesDePrelevements
    {
        return $this->zonesDePrelevementsIdzoneDePrelevement;
    }

    public function setZonesDePrelevementsIdzoneDePrelevement(?ZonesDePrelevements $zonesDePrelevementsIdzoneDePrelevement): self
    {
        $this->zonesDePrelevementsIdzoneDePrelevement = $zonesDePrelevementsIdzoneDePrelevement;

        return $this;
    }


}
