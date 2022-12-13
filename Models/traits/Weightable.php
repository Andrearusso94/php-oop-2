<?php
trait Wheightable
{
    protected $weight;

    function get_wheight()
    {
        return $this->weight;
    }

    function set_wheight($weight, $unit)
    {
        $this->weight = $weight . $unit;
    }
}
