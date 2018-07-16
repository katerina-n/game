<?php

namespace BinaryStudioAcademy\Game\Resources;

class Iron
{
   public $iron = 'iron';

   public function setIron($iron)
   {
       $this->iron = $iron;
   }

    /**
     * Gets Iron.
     *
     * @return mixed
     */
    public function getIron()
    {
        return $this->iron;
    }

}