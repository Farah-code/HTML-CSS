<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'PaymentConfigration.php';

\Stripe\Stripe::setVerifySslCerts(false);

	
	$PriceID = $_GET['id'];

	if (!isset($_POST['stripeToken']) || !isset($Price[$PriceID])) {
		header("Location: Fees&Payments.php");
		exit();
	}

	$token = $_POST['stripeToken'];
	$email = $_POST["stripeEmail"];

	
	$charge = \Stripe\Charge::create(array(
		"amount" => $Price[$PriceID]["price"],
		"currency" => "GBP",
		"description" => $Price[$PriceID]["title"],
		"source" => $token,
	));

	
	echo 'Successful payment! You have been charged £' . ($Price[$PriceID]["price"]/100);
   
        ?>

