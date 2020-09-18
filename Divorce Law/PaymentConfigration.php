<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once '../../stripe-php-master/init.php';

require_once 'PriceProcess.php';

$stripeDetils = array 
(
    "secretKey"  => "sk_test_uJCXo0Ry9KLG3rUWmQnE2ete00Rjk7ffKZ",
    "publishableKey" => "pk_test_nk86pqtlc5365fROEYiYZ8PR00DWCbHPpZ"
  
);

  \Stripe\Stripe::setApiKey($stripeDetils['secretKey']);
  
  