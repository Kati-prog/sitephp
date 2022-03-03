<?php

use app\engine\Db;
use app\engine\Autoload;
use app\models\{Goods,Users,Basket};


include "../engine/Autoload.php";


spl_autoload_register([new Autoload(), 'loadClass']);


$db = new Db();
$good = new Goods($db);


echo $good->getOne(1);
echo $good->getAll();

$basket = new Basket($db);

echo $basket->getOne(1);
echo $basket->getAll();

$user = new Users($db);

echo $user->getOne(1);
echo $user->getAll();


//3 не сделано(
use app\models\figures\{Rectangle,Triangle,Circle};

$triangle = new Triangle();
echo $triangle->getInfo();