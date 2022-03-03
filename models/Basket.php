<?php

namespace app\models;


class Basket extends Model
{
    public $id;
    public $name;
    public $price;
    public $count;

    public function getTableName() {
        return 'basket';
    }
}