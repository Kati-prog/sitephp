<?php

namespace app\models\figures;

class Rectangle extends Figure
{
 protected $a = null;
 protected $b = null;

 public function __construct($a, $b) {
     $this->a=$a;
     $this->b=$b;
 }
 public function getArea()
 {
     return $this->a * $this->b;
 }
public function getPerimeter()
{
    return 2 * ($this->a + $this->b);
}

public function getType()
{
    return 'rectangle';
}

public function getInfo()
{

    echo "Area: {$this->getArea()}, Perimeter: {$this->getPerimeter()}, {$this->getType()}";
}
}