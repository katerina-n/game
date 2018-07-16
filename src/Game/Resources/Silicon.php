<?php

namespace BinaryStudioAcademy\Game\Resources;

class Silicon
{
    public $silicon;

    public function setSilicon($silicon = 1)
    {
        $this->silicon = $silicon;
    }

    /**
     * Gets Silicon.
     *
     * @return mixed
     */
    public function getSilicon()
    {
        return $this->silicon;
    }

}