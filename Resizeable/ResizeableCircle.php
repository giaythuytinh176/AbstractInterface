<?php

include "Circle.php";
include "Resizeable.php";

class ResizeableCircle extends Circle implements Resizeable
{
    public function __construct($name, $radius)
    {
        parent::__construct($name, $radius);
    }

    public function reSize($percent)
    {
        $this->radius = $this->radius + $this->radius * $percent / 100;
        //return $this->radius + $this->radius * $percent / 100;
    }

}
