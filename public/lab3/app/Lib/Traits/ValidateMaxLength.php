<?php

namespace App\Lib\Traits;

trait ValidateMaxLength
{

    /**
     * [validateMaxLength will check if the field input is shorter than the given number]
     *
     * @param   int     $length  [$length the given max number]
     * @param   string  $field   [$field the given field]
     *
     * @return  void             [return void]
     */
    public function validateMaxLength(int $length, string $field): void
    {
        if (strlen($this->array[$field]) > $length) {
            $this->errors[$field][] = 'You must input less than ' . $length . ' characters.';
        }
    }

}