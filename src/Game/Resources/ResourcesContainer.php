<?php

namespace BinaryStudioAcademy\Game\Resources;

class ResourcesContainer
{
    public static $resourcesContainer = [];

    public static function addToContainer($resources){
       $a = get_class($resources);
       $b = explode("\\", $a);
        $resources = end($b);
        self::$resourcesContainer [] = $resources;

    }

    public static function removeFromContainer($resources){
        $a = get_class($resources);
        $b = explode("\\", $a);
        $resources = end($b);
       if( ($key = array_search($resources, self::$resourcesContainer)) !== FALSE){
          unset(self::$resourcesContainer[$key]);
       }
    }
}