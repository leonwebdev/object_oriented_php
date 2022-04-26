<?php

class User extends Model
{
    public function getDbh()
    {
        return self::$dbh;
    }
}
