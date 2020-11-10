<?php

include_once "Rectangle.php";
include_once "Resizeable.php";

class ResizeableRectangle extends Rectangle implements Resizeable
{
    public function __construct($name, $width, $height)
    {
        parent::__construct($name, $width, $height);
    }

    public function reSize($percent)
    {
        $this->width = $this->width + $this->width * $percent / 100;
        $this->height = $this->height + $this->height * $percent / 100;
    }
}