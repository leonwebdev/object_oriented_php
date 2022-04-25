<?php

class Validator
{
    private $array;
    private $errors;

    public function __construct(array $array)
    {
        $this->array = $array;
    }

    public function validateEmail(string $field): void
    {
        if (!filter_var($this->array[$field], FILTER_VALIDATE_EMAIL)) {
            $this->errors[$field][] = 'Email must be a legal email';
        }
    }

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

    public function errors()
    {
        return $this->errors;
    }

    public function array()
    {
        return $this->array;
    }
}