<?php

namespace App\Lib\Traits;

trait ValidatePostalCode
{
    /**
     * [validatePostalCode will check the postal code]
     *
     * @param   string  $field  [$field the given postal code]
     *
     * @return  void            [return void]
     */
    public function validatePostalCode(string $field): void
    {
        if (!preg_match('/^([a-zA-Z]\d[a-zA-Z])\ {0,1}(\d[a-zA-Z]\d)$/', $this->array[$field])) {
            $this->errors[$field][] = 'Postal Code must be like A2A 2A2';
        }
    }
}