<?php
namespace common;

class SizeText implements \common\DecorateText
{
    public function before()
    {
        echo "<div style='font-size:20px'>";
    }
    public function after()
    {
        echo "</div>";
    }
}