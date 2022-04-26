<?php

abstract class Model
{
    protected static $dbh;
    protected $table;

    public static function init($dbh)
    {
        self::$dbh = $dbh;
    }

    public function getDbh()
    {
        return self::$dbh;
    }

    public function getAll()
    {
        $query = "SELECT * FROM {$this->table}";

        $stmt = self::$dbh->prepare($query);

        $stmt->execute();

        return $stmt->fetchAll();
    }
}