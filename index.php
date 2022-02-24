<?php
//1Придумать класс, который описывает любую сущность из предметной области интернет-магазинов:
// продукт, ценник, посылка и т.п. или любой другой области. Опишите свойства и методы,
// придумайте наследника, расширяющего функционал родителя. Приведите пример использования.
class Animal
{
    public $type;
    public $name;
    public $color;
    public $speed;


    public function __construct($type,$name, $color, $speed)
    {
        $this->type = $type;
        $this->name = $name;
        $this->color = $color;
        $this->speed = $speed;

    }

    function run()
    {
        echo "$this->type  $this->name  $this->color бежит со скоростью ". $this->speed . "<br>";

    }
}
class Dog extends Animal
{
    public $swimspeed;
    public $voice;
    function __construct($type, $name, $color, $speed, $swimspeed, $voice) {
        parent::__construct($type,$name,$color,$speed);

        $this->swimspeed = $swimspeed;
        $this->voice = $voice;
    }
    function swim() {
        echo "$this->type $this->name может плыть со скоростью $this->swimspeed <br>";
    }
    function bark(){
        echo "$this->type может издавать звук $this->voice";
    }
}
$animal = new Animal('Кот', 'Sasha', 'белый', 10);
$animal ->run();
$animal2 = new Dog('Собака', 'Маша', 'желтая', 20, 30, 'Гавгав');
$animal2->swim();
$animal2->bark();

var_dump($animal2);
/*3. Дан код:


class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
$a1 = new A();
$a2 = new A();
$a1->foo();
$a2->foo();
$a1->foo();
$a2->foo();
//Что он выведет на каждом шаге? Почему?
/* Статические методы и свойства принадлежат классу (static $x = 0;), а не его экземплярам,
поэтому будет прибавлять единицу(++$x) и выводить 1 2 3 4.Метод будет существовать лишь в одном экземпляре, просто при каждом вызове в него будет пробрасываться разный $this
*/

//4. Объясните результаты в этом случае.

class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
class B extends A {
}
$a1 = new A();
$b1 = new B();
$a1->foo();
$b1->foo();
$a1->foo();
$b1->foo();

//в это случае выведет 1 1 2 2, класс В наследуется от класса А и использует его метод




