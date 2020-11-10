<?php

include_once "ResizeableCircle.php";
include_once "ResizeableRectangle.php";
include_once "ResizeableSquare.php";

echo "hinh tron<br>";

$circle = new ResizeableCircle("Hinh tron", 10);
echo $circle->getRadius() . "<br>";
$circle->reSize(50);
echo $circle->getRadius() . "<br>";

echo "hcn<br>";

$rectangle = new ResizeableRectangle("hcn", 10, 20);
echo $rectangle->getHeight() . "<br>";
echo $rectangle->getWidth() . "<br>";
$rectangle->reSize(100);
echo $rectangle->getHeight() . "<br>";
echo $rectangle->getWidth() . "<br>";


echo "hinh vuong<br>";


$square = new ResizeableSquare("hv", 10, 10);
echo $square->getHeight() . "<br>";
echo $square->getWidth() . "<br>";
$square->reSize(100);
echo $square->getHeight() . "<br>";
echo $square->getWidth() . "<br>";

