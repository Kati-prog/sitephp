<?php

namespace app\models\figures;


class Triangle extends Figure
{

    public $a= null;
    public $b= null;


 function __construct($a,$b) {

     $this->a=$a;
     $this->b=$b;

 }
 public function getArea(){
     return 0.5 * $this->a * $this->b;
 }
 public function getPerimeter(){
     return 3 * $this->a;
 }
 //public function getType() {
 //   return 'triangle';
 //}
 public function getInfo()
 {
     echo "{$this->getType()},{$this->getArea()},{$this->getPerimeter()}";
 }
}

