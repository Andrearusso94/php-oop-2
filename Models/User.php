<?php

class User
{
    public  $discount;
    public function __construct(public String $name, public String $lastname)
    {

        $this->name = $name;
        $this->lastname = $lastname;
        $this->discount = "20%";
    }
}
