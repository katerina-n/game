<?php

namespace BinaryStudioAcademy\Game\SpaceshipComponents;

use BinaryStudioAcademy\Game\Resources\Fire;
use BinaryStudioAcademy\Game\Resources\Metal;

class Shell
{
    public $metal;
    public $fire;

    public function __construct(Metal $metal = null, Fire $fire = null)
    {
        $this->metal = $metal;
        $this->fire = $fire;
    }

    /**
     * Gets Metal.
     *
     * @return Metal
     */
    public function getMetal(): Metal
    {
        return $this->metal;
    }

    /**
     * Sets Metal.
     *
     * @param Metal $metal
     *
     * @return Shell
     */
    public function setMetal(Metal $metal): self
    {
        $this->metal = $metal;
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
     * @return Shell
     */
    public function setFire(Fire $fire): self
    {
        $this->fire = $fire;
        return $this;
    }


}