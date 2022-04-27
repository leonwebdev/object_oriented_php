<?php

abstract class Model
{
    protected static $dbh;
    protected $table;
    protected $key = 'id';


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
        $query = "  SELECT * 
                    FROM {$this->table}
                    WHERE deleted = 0
                    ";

        $stmt = self::$dbh->prepare($query);

        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function getOne($id)
    {
        $query = "  SELECT * 
                    FROM {$this->table}
                    WHERE {$this->key} = :id
                    AND deleted =0";

        $stmt = self::$dbh->prepare($query);

        $stmt->bindValue(':id', $id);

        $stmt->execute();

        return $stmt->fetch();
    }
}
