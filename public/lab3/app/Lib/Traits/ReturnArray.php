<?php

namespace App\Lib\Traits;

trait ReturnArray
{
    /**
     * [array will return the value in original $_POST]
     *
     * @return  array   [return all original $_POST values]
     */
    public function array(): array
    {
        return $this->array;
    }
}