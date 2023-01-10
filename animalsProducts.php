<?php
class animalsProducts
{
    public $name;
    protected $price;
    
    public function setPrice($price) 
    {
      if (is_integer($price) && $price > 0) 
        {
            $this->price = $price;
        }
    }
    
    public function getPrice()
    {
    return $this->price;
    }
    
}