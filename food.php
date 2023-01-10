<?php
class Food extends animalsProducts 
{
    public $food = [];
    public function __construct($name, $price) 
    {
        $this->name = $name;
        $this->price = $price;
    }
}