<?php
namespace common;


class Loader
{
    static public function autoload($class)
    {
    //     var_dump($class);
    //     var_dump(BASEDIR.'/'.str_replace('\\','/',$class).'.php');
        require BASEDIR.'/'.str_replace('\\','/',$class).'.php';
    }
}