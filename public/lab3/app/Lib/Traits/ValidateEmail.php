<?php

namespace App\Lib\Traits;

trait ValidateEmail
{
    /**
     * [validateEmail will check email]
     *
     * @param   string  $field  [$field the given email]
     *
     * @return  void            [return void]
     */
    public function validateEmail(string $field): void
    {
        if (!filter_var($this->array[$field], FILTER_VALIDATE_EMAIL)) {
            $this->errors[$field][] = 'Email must be a legal email';
        }
    }
}