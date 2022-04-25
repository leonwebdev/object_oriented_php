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

    public function errors()
    {
        return $this->errors;
    }

    public function array()
    {
        return $this->array;
    }
}
