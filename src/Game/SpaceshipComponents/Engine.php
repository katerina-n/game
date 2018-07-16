<?php

namespace BinaryStudioAcademy\Game\SpaceshipComponents;

use BinaryStudioAcademy\Game\Resources\Carbon;
use BinaryStudioAcademy\Game\Resources\Fire;
use BinaryStudioAcademy\Game\Resources\Metal;

class Engine
{
    public $metal;
    public $carbon;
    public $fire;

    public function __construct(Metal $metal = null, Carbon $carbon = null, Fire $fire = null)
    {
        $this->metal = $metal;
        $this->carbon = $carbon;
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
     * @return Engine
     */
    public function setMetal(Metal $metal): self
    {
        $this->metal = $metal;
        return $this;
    }

    /**
     * Gets Carbon.
     *
     * @return Carbon
     */
    public function getCarbon(): Carbon
    {
        return $this->carbon;
    }

    /**
     * Sets Carbon.
     *
     * @param Carbon $carbon
     *
     * @return Engine
     */
    public function setCarbon(Carbon $carbon): self
    {
        $this->carbon = $carbon;
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
     * @return Engine
     */
    public function setFire(Fire $fire): self
    {
        $this->fire = $fire;
        return $this;
    }

    public static function createEngine(Metal $metal = null, Carbon $carbon = null, Fire $fire){
        if(!empty($metal) && $carbon !== null && $fire !==null){

            return new Engine($metal, $carbon->getCarbon(), $fire );
        }
        return null;
    }

}