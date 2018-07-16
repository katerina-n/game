<?php

namespace BinaryStudioAcademy\Game\SpaceshipComponents;

use BinaryStudioAcademy\Game\Resources\Fire;
use BinaryStudioAcademy\Game\Resources\Sand;

class Porthole
{
public $sand;
public $fire;

public function __construct($sand = null , $fire = null)
{
    $this->sand = $sand;
    $this->fire = $fire;
}

    /**
     * Gets Sand.
     *
     * @return Sand
     */
    public function getSand(): Sand
    {
        return $this->sand;
    }

    /**
     * Sets Sand.
     *
     * @param Sand $sand
     *
     * @return Porthole
     */
    public function setSand(Sand $sand): self
    {
        $this->sand = $sand;
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
     * @return Porthole
     */
    public function setFire(Fire $fire): self
    {
        $this->fire = $fire;
        return $this;
    }

    public function createPorthole(Sand $sand, Fire $fire){
        if($sand !== null && $fire !== null){

            return new Porthole($sand->getSand(), $fire->getFire());
        }
        return 0;
    }
}