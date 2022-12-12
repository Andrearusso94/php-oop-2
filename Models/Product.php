<?php
require __DIR__ . '/Categories.php';
require __DIR__ . '/Type.php';

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
