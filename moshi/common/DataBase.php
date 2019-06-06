<?php

namespace common;

interface IDatabase
{
    function connect($host,$user,$pwd,$dbname);
    function query($sql);
    function close();
}

class DataBase
{
    protected static $db;
    protected static $sql;
    private function __construct()
    {

    }

    static function Instantiation()
    {
        if(self::$db)
        {
            return self::$db;
        }
        else{
            self::$db =  new self();
            return self::$db;
        }
        
    }

    public function where()
    {
        self::$sql = 'where';
        return $this;
    }

    public function find()
    {
        self::$sql .= 'find';
        return self::$sql;
    }

}