<?php
require_once __DIR__ . '/Categories.php';

class Product
{
    public function __construct(public String $name, public String $desc, public $price, public Categories $categories)
    {
        $this->name = $name;
        $this->desc = $desc;
        $this->price = $price;
        $this->categories = $categories;
    }
}

$product_1 = new Product('cuccia morbida', 'una cuccia circolare soffice e calda', 25, new Categories('Cane'));
var_dump($product_1);
