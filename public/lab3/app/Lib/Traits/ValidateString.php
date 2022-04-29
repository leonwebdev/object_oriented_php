<?php

namespace App\Lib\Traits;

trait ValidateString
{

    /**
     * [validateString will check if there are invalid characters]
     *
     * @param   string  $field  [$field the given string]
     *
     * @return  void            [return void]
     */
    public function validateString(string $field): void
    {
        if (!preg_match('/^[A-z0-9\s\-\,\']{1,255}$/', $this->array[$field])) {
            $this->errors[$field][] = 'There are invalid characters.';
        }
    }

}