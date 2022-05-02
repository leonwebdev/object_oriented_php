<?php

// NO NAMESPACE, PLEASE

class Input
{
    protected static $post = [];

    public function __construct($post)
    {
        self::$post = $post;
    }

    public static function post(?string $field)
    {
        //
    }
}