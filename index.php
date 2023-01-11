<?php

include_once __DIR__ . '/animalsProducts.php';
include_once __DIR__ . '/food.php';
include_once __DIR__ . '/customer.php';
include_once __DIR__ . '/registerCustomer.php';
include_once __DIR__ . '/creditCard.php';
include_once __DIR__ . '/CheckCard.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>e-commerce</title>
</head>
<body>
    <h1>Prodotti</h1>
  <?php
    $kibble = new food ('croccantini', 24);
    var_dump($kibble);
  ?>

  <h2>Registrati</h2>
  <?php
    $register = new registerCustomer('Mario', 'Rossi', '9876 5432 1234 5678');
    var_dump($register);
  ?>

<h2>Controllo carta</h2>
  <?php
    $expired = new CheckCard (5, 2024);
    $credit_card = new CreditCard('1243 5678 91011', '654', $expired);
    try 
    {
      $credit_card->validateCreditCard();
    } 
    catch (Exception $error) 
    {
      echo "Errore: " . $error->getMessage();
    }
  ?>
</body>
</html>