<?php


class EatType extends Type
{
    public function __construct(public String $name, public String $type_food)
    {
        $this->name = $name;
        $this->type_food = $type_food;
    }
}
