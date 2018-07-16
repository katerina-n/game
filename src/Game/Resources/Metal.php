<?php

namespace BinaryStudioAcademy\Game\Resources;

use BinaryStudioAcademy\Game\Resources\Iron;
use BinaryStudioAcademy\Game\Resources\Fire;

class Metal
{
    public $iron;

    public $fire;


    public function __construct($iron = null, $fire = null)
    {
        $this->iron = $iron;
        $this->fire = $fire;
    }

//    public function setMetal($metal)
//    {
//        $this->metal = $metal;
//    }

    /**
     * Gets Iron.
     *
     * @return \BinaryStudioAcademy\Game\Resources\Iron
     */
    public function getIron(): \BinaryStudioAcademy\Game\Resources\Iron
    {
        return $this->iron;
    }

    /**
     * Sets Iron.
     *
     * @param \BinaryStudioAcademy\Game\Resources\Iron $iron
     *
     * @return Metal
     */
    public function setIron(\BinaryStudioAcademy\Game\Resources\Iron $iron): self
    {
        $this->iron = $iron;
        return $this;
    }

    /**
     * Gets Fire.
     *
     * @return \BinaryStudioAcademy\Game\Resources\Fire
     */
    public function getFire(): \BinaryStudioAcademy\Game\Resources\Fire
    {
        return $this->fire;
    }

    /**
     * Sets Fire.
     *
     * @param \BinaryStudioAcademy\Game\Resources\Fire $fire
     *
     * @return Metal
     */
    public function setFire(\BinaryStudioAcademy\Game\Resources\Fire $fire): self
    {
        $this->fire = $fire;
        return $this;
    }

    public function createMetal(Iron $iron = null, Fire $fire = null)
    {
        if($iron !== null && $fire !== null){

            return new Metal($iron->getIron(), $fire->getFire());
        }
        return 0;
    }

}