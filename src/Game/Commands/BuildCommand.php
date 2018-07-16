<?php

namespace BinaryStudioAcademy\Game\Commands;

use BinaryStudioAcademy\Game\Resources\ResourcesContainer;
use BinaryStudioAcademy\Game\Spaceship\Spaceship;

class BuildCommand
{
    public static function build(Spaceship $spaceship, $spaceshipModule)
    {
        $array = get_object_vars($spaceship);
        if(!isset($array->$spaceshipModule)){
            $obj = '\BinaryStudioAcademy\Game\SpaceshipComponents\\'.ucfirst($spaceshipModule);
            $obj = new $obj();
            $properties = get_object_vars($obj);
            $keys = array_keys($properties);
            $keys = array_map('ucfirst', $keys);
            foreach($keys as $k => $v) {
                if (!in_array($v, ResourcesContainer::$resourcesContainer)) {
                    //ResourcesContainer::removeFromContainer($key);

                    return new \Exception();
                }
            }
            $s = 'create'.ucfirst($spaceshipModule);
            print_r($s); exit;
        }
    }
}