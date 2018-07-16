<?php

namespace BinaryStudioAcademy\Game\SpaceshipComponents;

use BinaryStudioAcademy\Game\Resources\Fuel;
use BinaryStudioAcademy\Game\Resources\Metal;

class Tank
{
    public $metal;
    public $fuel;

    public function __construct($metal = null, $fuel = null)
    {
        $this->metal = $metal;
        $this->fuel = $fuel;
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
     * @return Tank
     */
    public function setMetal(Metal $metal): self
    {
        $this->metal = $metal;
        return $this;
    }

    /**
     * Gets Fuel.
     *
     * @return Fuel
     */
    public function getFuel(): Fuel
    {
        return $this->fuel;
    }

    /**
     * Sets Fuel.
     *
     * @param Fuel $fuel
     *
     * @return Tank
     */
    public function setFuel(Fuel $fuel): self
    {
        $this->fuel = $fuel;
        return $this;
    }

    public function createTank(Metal $metal = null, Fuel $fuel = null){
        if(!empty($metal) && $fuel !== null){

            return new Tank($metal, $fuel->getFuel());
        }
        return null;
    }

}