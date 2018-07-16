<?php

namespace BinaryStudioAcademy\Game\Resources;

class Copper
{
    public $copper;

    public function setCopper($copper = 1)
    {
        $this->copper = $copper;
    }

    /**
     * Gets Copper.
     *
     * @return mixed
     */
    public function getCopper()
    {
        return $this->copper;
    }

}