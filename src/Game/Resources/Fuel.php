<?php

namespace BinaryStudioAcademy\Game\Resources;

class Fuel
{
    public $fuel = 'fuel';

    public function setFuel($fuel)
    {
        $this->fuel = $fuel;
    }

    /**
     * Gets Fuel.
     *
     * @return mixed
     */
    public function getFuel()
    {
        return $this->fuel;
    }

}