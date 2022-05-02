<?php

// NO NAMESPACE, PLEASE

class Input
{
    protected static $request = [];
    protected static $post = [];
    protected static $get = [];
    protected static $cookie = [];

    public function __construct($request, $post, $get, $cookie)
    {
        self::$request = $request;
        self::$post = $post;
        self::$get = $get;
        self::$cookie = $cookie;
    }

    /**
     * handle $_REQUEST
     *
     * @param string $field
     *   field name if you want specific field value
     *
     * @return mixed
     *   return array containing full fields, or specific field value,
     *   or null if this field does not exist.
     */
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

    /**
     * handle $_POST
     *
     * @param string $field
     *   field name if you want specific field value
     *
     * @return mixed
     *   return array containing full fields, or specific field value,
     *   or null if this field does not exist.
     */
    public static function post(string $field = null)
    {
        if (is_null($field)) {

            return self::$post;
        } elseif (array_key_exists($field, self::$post)) {

            return self::$post[$field];
        } else {

            return null;
        }
    }

    /**
     * handle $_GET
     *
     * @param string $field
     *   field name if you want specific field value
     *
     * @return mixed
     *   return array containing full fields, or specific field value,
     *   or null if this field does not exist.
     */
    public static function get(string $field = null)
    {
        if (is_null($field)) {

            return self::$get;
        } elseif (array_key_exists($field, self::$get)) {

            return self::$get[$field];
        } else {

            return null;
        }
    }

    /**
     * handle $_COOKIE
     *
     * @param string $field
     *   field name if you want specific field value
     *
     * @return mixed
     *   return array containing full fields, or specific field value,
     *   or null if this field does not exist.
     */
    public static function cookie(string $field = null)
    {
        if (is_null($field)) {

            return self::$cookie;
        } elseif (array_key_exists($field, self::$cookie)) {

            return self::$cookie[$field];
        } else {

            return null;
        }
    }
}

$input = new Input($_REQUEST, $_POST, $_GET, $_COOKIE);