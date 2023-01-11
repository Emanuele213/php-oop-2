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
    $year = intval(date("Y"));
    $month = intval(date("m"));
    if ($this->expirationDate->year > $year)
    {
      echo "Carta valida";
    }
    else if ($this->expirationDate->year < $year)
    {
      throw new Exception("Carta scaduta");
    }
    else if ($this->expirationDate->month < $month) {
      throw new Exception("Carta scaduta");
    }
    else
    { 
      echo "Carta valida";
    }
  }
}
