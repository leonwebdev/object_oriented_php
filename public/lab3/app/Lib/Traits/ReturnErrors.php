<?php

namespace App\Lib\Traits;

trait ReturnErrors
{
    /**
     * [errors will return all errors]
     *
     * @return  array   [return all errors]
     */
    public function errors(): array
    {
        return $this->errors;
    }
}