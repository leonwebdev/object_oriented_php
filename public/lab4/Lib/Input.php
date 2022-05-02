<?php

// NO NAMESPACE, PLEASE

class Input
{
    protected static $request = [];

    public function __construct($request)
    {
        self::$request = $request;
    }

    public static function request(string $field = null)
    {
        if (is_null($field)) {

            return self::$request;
        } elseif (array_key_exists($field, self::$request)) {

            return self::$request[$field];
        } else {

            return null;
        }
    }
}

$input = new Input($_REQUEST);