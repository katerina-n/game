<?php

namespace BinaryStudioAcademy\Game\Commands;

use BinaryStudioAcademy\Game\Spaceship\Spaceship;

class StatusCommand
{
    public static function status($spaceship)
    {
        $array = get_object_vars($spaceship);
        print_r($array);
        $notEmptyValue = [];

        foreach ($array as $key => $value){
            if($value!==Null){
//                $ko = $key;
//                $key = '\BinaryStudioAcademy\Game\SpaceshipComponents\\'.ucfirst($key);
//                foreach(new $key() as $k => $v) {
//                        $k = '\BinaryStudioAcademy\Game\Resources\\' . ucfirst($k);
//                        foreach (new $k() as $ke => $va) {
//                            $n[$i] = get_object_vars(new $k());
//                            if ($va !== Null) {
//                                $newn[$i] = $va;
//                            }
//
//                            if (in_array(null, get_object_vars(new $k())) === FALSE) {
//                                $notEmptyValue[$ko.$i] = $ko;
//                            }
//                            $i++;
//                        }
//
//                }
                $notEmptyValue[$key] = $key;

            }

        }


            print_r($notEmptyValue);

    }
}