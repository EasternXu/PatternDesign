<?php

namespace common;

abstract class EventGenerator
{
    private $observers;
    function addObserver(Observer $observer)
    {
        $this->observers[] = $observer;
    }

    public function notify()
    {
        foreach($this->observers as $observer)
        {
            $observer->update();
        }
    }
}