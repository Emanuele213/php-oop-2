<?php
class customer 
{
    private $name;
    private $lastName;
    private $creditCard;
  
    public function __construct($name, $lastName,$creditCard)
    {
      $this->name = $name;
      $this->lastName = $lastName;
      $this->creditCard = $creditCard;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getCreditCard()
    {
        return $this->creditCard;
    }

    public function setCreditCard($creditCard)
    {
        $this->creditCard = $creditCard;

        return $this;
    }
}