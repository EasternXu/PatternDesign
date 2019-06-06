<?php
namespace common;

class RedText implements \common\DecorateText
{
    public function before()
    {
        echo "<div style='color:red'>";
    }
    public function after()
    {
        echo "</div>";
    }
}