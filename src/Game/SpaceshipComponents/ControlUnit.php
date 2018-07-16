<?php

namespace BinaryStudioAcademy\Game\SpaceshipComponents;

class ControlUnit
{
    public $ic;
    public $wires;

    public function __construct(IC $ic = null, Wires $wires = null)
    {
        $this->ic = $ic;
        $this->wires = $wires;
    }

    /**
     * Gets Ic.
     *
     * @return IC
     */
    public function getIc(): IC
    {
        return $this->ic;
    }

    /**
     * Sets Ic.
     *
     * @param IC $ic
     *
     * @return ControlUnit
     */
    public function setIc(IC $ic): self
    {
        $this->ic = $ic;
        return $this;
    }

    /**
     * Gets Wires.
     *
     * @return Wires
     */
    public function getWires(): Wires
    {
        return $this->wires;
    }

    /**
     * Sets Wires.
     *
     * @param Wires $wires
     *
     * @return ControlUnit
     */
    public function setWires(Wires $wires): self
    {
        $this->wires = $wires;
        return $this;
    }

}