<?php

include_once "Colorable.php";
include_once "Square.php";

class ColorableSquare extends Square implements Colorable
{
    public function __construct($name, $width)
    {
        parent::__construct($name, $width);
    }

    public function howToColor()
    {
        echo "Color all four sides.";
    }
}