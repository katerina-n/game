<?php

namespace BinaryStudioAcademy\Game\Resources;

class Water
{
    public $water;

    public function setWater($water = 1)
    {
        $this->water = $water;
    }

    /**
     * Gets Water.
     *
     * @return mixed
     */
    public function getWater()
    {
        return $this->water;
    }

}