<?php

namespace App\Lib\Traits;

trait ValidatePhone
{

    /**
     * [validatePhone will check the phone number]
     *
     * @param   string  $field  [$field the given phone field]
     *
     * @return  void            [return void]
     */
    public function validatePhone(string $field): void
    {
        if (!preg_match('/^[\(]?[0-9]{3}[\-\)\ \.]?[0-9]{3}[\-\ \.]?[0-9]{4}$/', $this->array[$field])) {
            $this->errors[$field][] = 'Phone must be like 123-123-1234';
        }
    }
}