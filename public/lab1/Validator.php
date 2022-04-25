<?php

class Validator
{
    private $array;
    private $errors;

    public function __construct(array $array)
    {
        $this->array = $array;
    }

    public function validateMinLength(int $length, string $field): void
    {
        if (strlen($this->array[$field]) < $length) {
            $this->errors[$field][] = 'You must input more than ' . $length . ' characters.';
        }
    }

    public function validateMaxLength(int $length, string $field): void
    {
        if (strlen($this->array[$field]) > $length) {
            $this->errors[$field][] = 'You must input less than ' . $length . ' characters.';
        }
    }

    public function validateString(string $field): void
    {
        if (!preg_match('/^[A-z0-9\s\-\,\']{1,255}$/', $this->array[$field])) {
            $this->errors[$field][] = 'There are invalid characters.';
        }
    }

    public function validatePhone(string $field): void
    {
        if (!preg_match('/^[\(]?[0-9]{3}[\-\)\ \.]?[0-9]{3}[\-\ \.]?[0-9]{4}$/', $this->array[$field])) {
            $this->errors[$field][] = 'Phone must be like 123-123-1234';
        }
    }

    public function validatePostalCode(string $field): void
    {
        if (!preg_match('/^([a-zA-Z]\d[a-zA-Z])\ {0,1}(\d[a-zA-Z]\d)$/', $this->array[$field])) {
            $this->errors[$field][] = 'Postal Code must be like A2A 2A2';
        }
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
