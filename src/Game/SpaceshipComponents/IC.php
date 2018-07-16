<?php

namespace BinaryStudioAcademy\Game\SpaceshipComponents;

use BinaryStudioAcademy\Game\Resources\Metal;
use BinaryStudioAcademy\Game\Resources\Silicon;

class IC
{
    public $metal;
    public $silicon;

    public function __construct(Metal $metal = null, Silicon $silicon = null)
    {
        $this->metal = $metal;
        $this->silicon = $silicon;
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
     * @return IC
     */
    public function setMetal(Metal $metal): self
    {
        $this->metal = $metal;
        return $this;
    }

    /**
     * Gets Silicon.
     *
     * @return Silicon
     */
    public function getSilicon(): Silicon
    {
        return $this->silicon;
    }

    /**
     * Sets Silicon.
     *
     * @param Silicon $silicon
     *
     * @return IC
     */
    public function setSilicon(Silicon $silicon): self
    {
        $this->silicon = $silicon;
        return $this;
    }

}