<?php
require_once __DIR__ . '/traits/Weightable.php';

class Type
{
    use Wheightable;
    public function __construct(public String $name, public String $type_food)
    {
        $this->name = $name;
        $this->type_food = $type_food;
    }
}
