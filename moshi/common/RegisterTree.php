<?php

namespace common;

class RegisterTree
{
    protected static $objects;

    static function set($key,$object)
    {
        self::$objects[$key] = $object;
    }

    public static function get($key)
    {
        return self::$objects[$key];
    }

    static function _unset($key)
    {
        unset(self::$objects[$key]);
    }
}