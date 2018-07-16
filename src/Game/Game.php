<?php

namespace BinaryStudioAcademy\Game;

use BinaryStudioAcademy\Game\Commands\BuildCommand;
use BinaryStudioAcademy\Game\Commands\StatusCommand;
use BinaryStudioAcademy\Game\Contracts\Io\Reader;
use BinaryStudioAcademy\Game\Contracts\Io\Writer;
use BinaryStudioAcademy\Game\Resources\Carbon;
use BinaryStudioAcademy\Game\Resources\Fire;
use BinaryStudioAcademy\Game\Resources\Fuel;
use BinaryStudioAcademy\Game\Resources\Iron;
use BinaryStudioAcademy\Game\Resources\Metal;
use BinaryStudioAcademy\Game\Resources\ResourcesContainer;
use BinaryStudioAcademy\Game\Resources\Sand;
use BinaryStudioAcademy\Game\Spaceship\Spaceship;
use BinaryStudioAcademy\Game\SpaceshipComponents\Porthole;
use BinaryStudioAcademy\Game\SpaceshipComponents\Tank;

class Game
{
    public function start(Reader $reader, Writer $writer): void
    {
        // TODO: Implement infinite loop and process user's input
        // Feel free to delete these lines
        $writer->writeln("You can't play yet. Please read input and convert it to commands.");
        $writer->writeln("Don't forget to create game's world.");
        $writer->write("Type your name:");
        $input = trim($reader->read());
        $writer->writeln("Good luck with this task, {$input}!");
        $s = new Spaceship();
        $p = new Porthole();

        $sand = new Sand();
       // $sand->setSand('sand');
        ResourcesContainer::addToContainer($sand);
        $fire = new Fire();
       // $fire->setFire('fire');
        ResourcesContainer::addToContainer($fire);
        $p = $p->createPorthole($sand, $fire);

        $met = new Metal();
        ResourcesContainer::addToContainer($met);
        $iro = new Iron();
        ResourcesContainer::addToContainer($iro);
        //$iro->setIron('iron');
        $met = $met->createMetal($iro, $fire);
        $carbon = new Carbon();
        ResourcesContainer::addToContainer($carbon);
       // print_r($met);
        $fue = new Fuel();
       // $fue->setFuel('fuel');
        $fue1 = new Fuel();
        ResourcesContainer::addToContainer($fue);
        ResourcesContainer::addToContainer($fue1);
        $tank = new Tank();


        $tank = $tank->createTank($met, $fue);
       // print_r($tank);
        $spaceship =  $s->createSpaceShip(null, $p, null, null, null, $tank);
      //  print_r($spaceship);
        StatusCommand::status($s->createSpaceShip(null, $p, null, null, null, $tank));
        //print_r($spaceship);
       //$writer->writeln($spaceship);
        print_r(array_count_values(ResourcesContainer::$resourcesContainer)); //exit;
        BuildCommand::build($spaceship, 'engine');
    }

    public function run(Reader $reader, Writer $writer): void
    {
        // TODO: Implement step by step mode with game state persistence between steps
        $writer->writeln("You can't play yet. Please read input and convert it to commands.");
        $writer->writeln("Don't forget to create game's world.");
    }
}
