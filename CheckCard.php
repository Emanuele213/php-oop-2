<?php 

class CheckCard
{
    public $year;
    public $month;

    public function __construct($month, $year)
    {
        $this->year = $year;
        $this->month = $month;
    }
    //get e set
    public function setYear($year)
    {
        if (is_integer($year) && $year > 0) 
        {
            $this->year = $year;
        }
        return $this;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function setMonth($month)
    {
        if (is_integer($month) && $month > 0) 
        {
            $this->month = $month;
        }
        return $this;
    }

    public function getMonth()
    {
        return $this->month;
    }
}