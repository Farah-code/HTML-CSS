<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

session_start(); 

$DatabaseHost = '127.0.0.1';
$DatabaseUser = 'root';
$DatabasePassword = ''; 
$DatabaseName = 'ESTLegalAppoitment';

$connect = mysqli_connect($DatabaseHost, $DatabaseUser, $DatabasePassword, $DatabaseName); 

if (mysqli_connect_errno())
{
    exit('Failed to connect to Database: ' . mysqli_connect_error());
}

if ( !isset($_POST['UserName'], $_POST['PAW']) ) 
{
	
	exit('Please fill both the username and password fields!');
}

if ($statement = $connect->prepare('SELECT ID, PAW FROM Clients WHERE UserName = ?')) 
  {
	$statement->bind_param('s', $_POST['UserName']);
        
	$statement->execute();
	$statement->store_result();
        
        if ($statement->num_rows > 0) {
	$statement->bind_result($id, $password);
	$statement->fetch();
	if ($_POST['PAW'] === $password)  {
	
		session_regenerate_id();
		$_SESSION['loggedin']  = TRUE;
		$_SESSION['UserName'] = $_POST['UserName'];
		header('Location: ../ClientsAccount/ClientsMainPage.php' );
               
	} 
        
        else 
          {
		header('Location: ../ClientsLogin/WrongMessage2.php');
	}
   } 
else 
    {
	header('Location: ../ClientsLogin/WrongMessage1.php');
    }
        
	$statement->close();
  }

