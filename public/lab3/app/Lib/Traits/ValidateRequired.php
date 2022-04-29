<?php

namespace App\Lib\Traits;

/**
 *
 */
trait ValidateRequired
{
    /**
     * [validateRequired will check if this field is empty]
     *
     * @return  void    [return void]
     */
    public function validateRequired(): void
    {
        $required = ['first_name', 'last_name', 'email_address', 'phone_number', 'city', 'postal_code',];

        foreach ($required as $post_key) {

            if (empty($this->array[$post_key])) {
                $label = ucwords(str_replace('_', ' ', $post_key));
                $this->errors[$post_key][] = "* " . $label . " is required";
            }
        }
    }

}