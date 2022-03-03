<?php

namespace app\models\figures;


abstract  class Figure {

 //public $area;
 //public $perimeter;
 //public $type;

abstract public function getArea();
abstract public function getPerimeter();
abstract public function getType();
public function getInfo()
{
    echo $this->area . $this->perimeter . $this->type;
}

}