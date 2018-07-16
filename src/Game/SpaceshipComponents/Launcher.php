<?php

namespace BinaryStudioAcademy\Game\SpaceshipComponents;

use BinaryStudioAcademy\Game\Resources\Fire;
use BinaryStudioAcademy\Game\Resources\Fuel;
use BinaryStudioAcademy\Game\Resources\Water;

class Launcher
{
    public $water;
    public $fire;
    public $fuel;

    public function __construct(Water $water = null, Fire $fire = null, Fuel $fuel = null)
    {
        $this->water = $water;
        $this->fire = $fire;
        $this->fuel = $fuel;
    }

    /**
     * Gets Water.
     *
     * @return Water
     */
    public function getWater(): Water
    {
        return $this->water;
    }

    /**
     * Sets Water.
     *
     * @param Water $water
     *
     * @return Launcher
     */
    public function setWater(Water $water): self
    {
        $this->water = $water;
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
     * @return Launcher
     */
    public function setFire(Fire $fire): self
    {
        $this->fire = $fire;
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
     * @return Launcher
     */
    public function setFuel(Fuel $fuel): self
    {
        $this->fuel = $fuel;
        return $this;
    }

}