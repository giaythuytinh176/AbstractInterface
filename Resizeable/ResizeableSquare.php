<?php

include_once "ResizeableRectangle.php";

class ResizeableSquare extends ResizeableRectangle
{
    public function __construct($name, $width)
    {
        parent::__construct($name, $width, $width);
    }

}