<?php

class User extends Model
{
    protected $table = 'users';

    public function getDbh()
    {
        return self::$dbh;
    }
}