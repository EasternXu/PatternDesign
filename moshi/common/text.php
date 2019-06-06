<?php
namespace common;

class text
{
    private $objects = array();

    public function addObject(DecorateText $decorateText)
    {
        $this->objects[] = $decorateText;
    }

    private function before()
    {
        foreach($this->objects as $v)
        {
            $v->before();
        }
    }
    private  function after()
    {
        $decorateTexts = array_reverse($this->objects);
        foreach($decorateTexts as $v)
        {
            $v->after();
        }
    }
    function thing()
    {
        $this->before();
        echo "<p>这是要装饰的类</p>";
        $this->after();
    }
}