<?php

namespace App\Lib\Traits;

trait ValidateMinLength
{

    /**
     * [validateMinLength will check if the field input is longer than the given number]
     *
     * @param   int     $length  [$length the given min number]
     * @param   string  $field   [$field the given field]
     *
     * @return  void             [return void]
     */
    public function validateMinLength(int $length, string $field): void
    {
        if (strlen($this->array[$field]) < $length) {
            $this->errors[$field][] = 'You must input more than ' . $length . ' characters.';
        }
    }

}