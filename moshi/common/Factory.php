<?php

namespace common;

class Factory
{
    static function create()
    {
        $db =  DataBase::Instantiation();
        RegisterTree::set('db',$db);
        return $db;
    }
}