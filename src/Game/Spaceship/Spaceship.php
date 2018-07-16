<?php

namespace BinaryStudioAcademy\Game\Spaceship;

use BinaryStudioAcademy\Game\SpaceshipComponents\ControlUnit;
use BinaryStudioAcademy\Game\SpaceshipComponents\Engine;
use BinaryStudioAcademy\Game\SpaceshipComponents\Launcher;
use BinaryStudioAcademy\Game\SpaceshipComponents\Porthole;
use BinaryStudioAcademy\Game\SpaceshipComponents\Shell;
use BinaryStudioAcademy\Game\SpaceshipComponents\Tank;

class Spaceship
{
   public $shell;
   public $porthole;
   public $controlUnit;
   public $engine;
   public $launcher;
   public $tank;

   public function __construct(Shell $shell = null,
                               Porthole $porthole = null,
                               ControlUnit $controlUnit = null,
                               Engine $engine = null,
                               Launcher $launcher = null,
                               Tank $tank = null)
   {
       $this->shell = $shell;
       $this->porthole = $porthole;
       $this->controlUnit = $controlUnit;
       $this->engine = $engine;
       $this->launcher = $launcher;
       $this->tank = $tank;
   }

    /**
     * Gets Shell.
     *
     * @return Shell
     */
    public function getShell(): Shell
    {
        return $this->shell;
    }

    /**
     * Sets Shell.
     *
     * @param Shell $shell
     *
     * @return Spaceship
     */
    public function setShell(Shell $shell): self
    {
        $this->shell = $shell;
        return $this;
    }

    /**
     * Gets Porthole.
     *
     * @return Porthole
     */
    public function getPorthole(): Porthole
    {
        return $this->porthole;
    }

    /**
     * Sets Porthole.
     *
     * @param Porthole $porthole
     *
     * @return Spaceship
     */
    public function setPorthole(Porthole $porthole): self
    {
        $this->porthole = $porthole;
        return $this;
    }

    /**
     * Gets ControlUnit.
     *
     * @return ControlUnit
     */
    public function getControlUnit(): ControlUnit
    {
        return $this->controlUnit;
    }

    /**
     * Sets ControlUnit.
     *
     * @param ControlUnit $controlUnit
     *
     * @return Spaceship
     */
    public function setControlUnit(ControlUnit $controlUnit): self
    {
        $this->controlUnit = $controlUnit;
        return $this;
    }

    /**
     * Gets Engine.
     *
     * @return Engine
     */
    public function getEngine(): Engine
    {
        return $this->engine;
    }

    /**
     * Sets Engine.
     *
     * @param Engine $engine
     *
     * @return Spaceship
     */
    public function setEngine(Engine $engine): self
    {
        $this->engine = $engine;
        return $this;
    }

    /**
     * Gets Launcher.
     *
     * @return Launcher
     */
    public function getLauncher(): Launcher
    {
        return $this->launcher;
    }

    /**
     * Sets Launcher.
     *
     * @param Launcher $launcher
     *
     * @return Spaceship
     */
    public function setLauncher(Launcher $launcher): self
    {
        $this->launcher = $launcher;
        return $this;
    }

    /**
     * Gets Tank.
     *
     * @return Tank
     */
    public function getTank(): Tank
    {
        return $this->tank;
    }

    /**
     * Sets Tank.
     *
     * @param Tank $tank
     *
     * @return Spaceship
     */
    public function setTank(Tank $tank): self
    {
        $this->tank = $tank;
        return $this;
    }


    public function createSpaceShip(Shell $shell = null,
                                    Porthole $porthole = null,
                                    ControlUnit $controlUnit = null,
                                    Engine $engine = null,
                                    Launcher $launcher = null,
                                    Tank $tank = null)
    {
       // if(!empty($shell) && !empty($porthole) && !empty($controlUnit) && !empty($engine) && !empty($launcher) && !empty($tank)){
            return new Spaceship($shell, $porthole, $controlUnit, $engine, $launcher, $tank);
       // }
       // return 0;
    }
}