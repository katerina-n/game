<?php

namespace BinaryStudioAcademy\Game\SpaceshipComponents;

use BinaryStudioAcademy\Game\Resources\Copper;
use BinaryStudioAcademy\Game\Resources\Fire;

class Wires
{
    public $copper;
    public $fire;

    public function __construct(Copper $copper = null, Fire $fire = null)
    {
        $this->copper = $copper;
        $this->fire = $fire;
    }

    /**
     * Gets Copper.
     *
     * @return Copper
     */
    public function getCopper(): Copper
    {
        return $this->copper;
    }

    /**
     * Sets Copper.
     *
     * @param Copper $copper
     *
     * @return Wires
     */
    public function setCopper(Copper $copper): self
    {
        $this->copper = $copper;
        return $this;
    }

    /**
     * Gets Fire.
     *
     * @return Fire
     */
    public function getFire(): Fire
    {
        return $this->fire;
    }

    /**
     * Sets Fire.
     *
     * @param Fire $fire
     *
     * @return Wires
     */
    public function setFire(Fire $fire): self
    {
        $this->fire = $fire;
        return $this;
    }

}