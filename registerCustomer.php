<?php

include_once __DIR__ . '/customer.php';

class registerCustomer extends customer {
    use Position;
    public $sale = 20;
}