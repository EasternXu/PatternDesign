<?php

define('BASEDIR',__DIR__);

include BASEDIR.'/common/Loader.php';

spl_autoload_register('\\common\\Loader::autoload');

$res = \common\Factory::create();
$db = \common\RegisterTree::get('db');
// $db = common\DataBase::Instantiation();
// echo $db->where()->find();
var_dump($db);

$db2 = \common\RegisterTree::get('db');

var_dump($db2);


class event extends \common\EventGenerator
{
    function tiget()
    {
        echo 'event';
        $this->notify();
    }
}

class observer1 implements \common\Observer
{
    function update($event = null)
    {
        echo 'observers1';
    }
}


$event = new event;
$event->addObserver(new observer1);
$event->tiget();