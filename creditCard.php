<?php

class creditCard 
{
    private $cvv;
    private $number;
    private $expirationDate;

    public function __construct($number, $cvv, $expirationDate)
	{
		$this->cvv = $cvv;
		$this->number = $number;
		$this->expirationDate = $expirationDate;
	}

  public function validateCreditCard()
  {
    $this->expirationDate = $timestamp = strtotime("+1 day");

    if ($this->expirationDate < $timestamp)
    {
        echo "La carta non valida";
    }
    else
    { 
        echo "La carta valida"; 
    }
  }
}
