<?php
require __DIR__ . '/Product.php';




$product_1 = new Product('Croccantini', new Type('Cibo', 'Manzo/Zucchine'), 25, new Categories('Cane'), './img/dog.jpg');
$product_2 = new Product('Lettiera', new Type('Accessorio', 'Materiale non commestibile'), 25, new Categories('Gatto'), 'urlimg');
$product_3 = new Product('Croccantini', new Type('Cibo', 'Manzo/Zucchine'), 25, new Categories('Cane'), '/img/dog.jpg');
$product_4 = new Product('Lettiera', new Type('Accessorio', 'Materiale non commestibile'), 25, new Categories('Gatto'), 'urlimg');
$product_5 = new Product('Croccantini', new Type('Cibo', 'Manzo/Zucchine'), 25, new Categories('Cane'), '/img/dog.jpg');
$product_6 = new Product('Lettiera', new Type('Accessorio', 'Materiale non commestibile'), 25, new Categories('Gatto'), 'urlimg');
$product_7 = new Product('Croccantini', new Type('Cibo', 'Manzo/Zucchine'), 25, new Categories('Cane'), '/img/dog.jpg');
$product_8 = new Product('Lettiera', new Type('Accessorio', 'Materiale non commestibile'), 25, new Categories('Gatto'), 'urlimg');

$db = [
    new Product('Croccantini', new Type('Cibo', 'Manzo/Zucchine'), 25, new Categories('Cane'), '/img/dog.jpg'),
    new Product('Lettiera', new Type('Accessorio', 'Materiale non commestibile'), 25, new Categories('Gatto'), 'urlimg'),
    new Product('Croccantini', new Type('Cibo', 'Manzo/Zucchine'), 25, new Categories('Cane'), '/img/dog.jpg'),
    new Product('Lettiera', new Type('Accessorio ',  ' Materiale non commestibile'), 25, new Categories('Gatto'), 'urlimg'),
    new Product('Croccantini', new Type('Cibo', 'Manzo/Zucchine'), 25, new Categories('Cane'), '/img/dog.jpg'),
    new Product('Lettiera', new Type('Accessorio', 'Materiale non commestibile'), 25, new Categories('Gatto'), 'urlimg'),
    new Product('Croccantini', new Type('Cibo', 'Manzo/Zucchine'), 25, new Categories('Cane'), '/img/dog.jpg'),
    new Product('Lettiera', new Type('Accessorio', 'Materiale non commestibile'), 25, new Categories('Gatto'), 'urlimg'),
];
