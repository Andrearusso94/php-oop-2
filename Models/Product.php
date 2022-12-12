<?php
require_once __DIR__ . '/Categories.php';
require_once __DIR__ . '/Type.php';

class Product
{
    public function __construct(public String $name, public Type $type, public $price, public Categories $categories, public $image)
    {
        $this->name = $name;
        $this->type = $type;
        $this->price = $price;
        $this->categories = $categories;
        $this->image = $image;
    }
}

$product_1 = new Product('Croccantini', new Type(new EatType('Cibo per cani', 'Manzo')), 25, new Categories('Cane'), 'urlimg');
var_dump($product_1);
