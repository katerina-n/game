<?php

namespace BinaryStudioAcademy\Game\Commands;

class HelpCommand
{
    public function Help()
    {
        return [
            CommandsList::$build,
            CommandsList::$mine,
            CommandsList::$help,
            CommandsList::$produce,
            CommandsList::$schema,
            CommandsList::$status,
            CommandsList::$exit
        ];
    }
}