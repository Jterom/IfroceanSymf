<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ZonesDePrelevements
 *
 * @ORM\Table(name="zones_de_prelevements", indexes={@ORM\Index(name="fk_Zones_De_Prelevements_Plages1_idx", columns={"Plages_IdPlage"})})
 * @ORM\Entity
 */
class ZonesDePrelevements
{
    /**
     * @var int
     *
     * @ORM\Column(name="idZone_De_Prelevement", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idzoneDePrelevement;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Superficie", type="float", precision=10, scale=0, nullable=true)
     */
    private $superficie;

    /**
     * @var float|null
     *
     * @ORM\Column(name="XA", type="float", precision=10, scale=0, nullable=true)
     */
    private $xa;

    /**
     * @var float|null
     *
     * @ORM\Column(name="YA", type="float", precision=10, scale=0, nullable=true)
     */
    private $ya;

    /**
     * @var float|null
     *
     * @ORM\Column(name="XB", type="float", precision=10, scale=0, nullable=true)
     */
    private $xb;

    /**
     * @var float|null
     *
     * @ORM\Column(name="YB", type="float", precision=10, scale=0, nullable=true)
     */
    private $yb;

    /**
     * @var float|null
     *
     * @ORM\Column(name="XC", type="float", precision=10, scale=0, nullable=true)
     */
    private $xc;

    /**
     * @var float|null
     *
     * @ORM\Column(name="YC", type="float", precision=10, scale=0, nullable=true)
     */
    private $yc;

    /**
     * @var float|null
     *
     * @ORM\Column(name="XD", type="float", precision=10, scale=0, nullable=true)
     */
    private $xd;

    /**
     * @var float|null
     *
     * @ORM\Column(name="YD", type="float", precision=10, scale=0, nullable=true)
     */
    private $yd;

    /**
     * @var \Plages
     *
     * @ORM\ManyToOne(targetEntity="Plages")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Plages_IdPlage", referencedColumnName="IdPlage")
     * })
     */
    private $plagesIdplage;

    public function getIdzoneDePrelevement(): ?int
    {
        return $this->idzoneDePrelevement;
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

    public function getXa(): ?float
    {
        return $this->xa;
    }

    public function setXa(?float $xa): self
    {
        $this->xa = $xa;

        return $this;
    }

    public function getYa(): ?float
    {
        return $this->ya;
    }

    public function setYa(?float $ya): self
    {
        $this->ya = $ya;

        return $this;
    }

    public function getXb(): ?float
    {
        return $this->xb;
    }

    public function setXb(?float $xb): self
    {
        $this->xb = $xb;

        return $this;
    }

    public function getYb(): ?float
    {
        return $this->yb;
    }

    public function setYb(?float $yb): self
    {
        $this->yb = $yb;

        return $this;
    }

    public function getXc(): ?float
    {
        return $this->xc;
    }

    public function setXc(?float $xc): self
    {
        $this->xc = $xc;

        return $this;
    }

    public function getYc(): ?float
    {
        return $this->yc;
    }

    public function setYc(?float $yc): self
    {
        $this->yc = $yc;

        return $this;
    }

    public function getXd(): ?float
    {
        return $this->xd;
    }

    public function setXd(?float $xd): self
    {
        $this->xd = $xd;

        return $this;
    }

    public function getYd(): ?float
    {
        return $this->yd;
    }

    public function setYd(?float $yd): self
    {
        $this->yd = $yd;

        return $this;
    }

    public function getPlagesIdplage(): ?Plages
    {
        return $this->plagesIdplage;
    }

    public function setPlagesIdplage(?Plages $plagesIdplage): self
    {
        $this->plagesIdplage = $plagesIdplage;

        return $this;
    }


}
