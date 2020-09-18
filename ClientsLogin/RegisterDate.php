<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$cfg['Console']['Mode'] = 'collapse';
$cfg['Server']['hide_db'] = '';
$cfg['Server']['only_db'] = '';

$connect = new mysqli('127.0.0.1', 'root', '', 'ESTLegalAppoitment');

 if(isset($_POST['reg'])){
    $FirstName = $_POST['FirstName'];
    $LastName = $_POST['LastName'];
    $DOB = $_POST['DOB'];
    $EmailAddress = $_POST['EmailAddress'];
    $HomeAddress = $_POST['HomeAddress'];
    $Phone = $_POST['Phone'];
    $UserName = $_POST['UserName'];
    $PAW = $_POST['PAW'];
    $rePAW = $_POST['rePAW'];
    $Statement = $connect->prepare("select * from Clients where DOB=?");
    $Statement->bind_param('s', $DOB);
    if($Statement->execute()){
        $result = $Statement->get_result();
     $Statement = $connect->prepare("INSERT INTO Clients (FirstName, LastName, DOB, EmailAddress, HomeAddress, Phone, UserName, PAW, rePAW) VALUES (?,?,?,?,?,?,?,?,?)");
    $Statement->bind_param('sssssssss', $FirstName, $LastName, $DOB, $EmailAddress , $HomeAddress, $Phone, $UserName, $PAW, $rePAW);
    $Statement->execute();
    $Statement->close();
    $connect->close();  
        }
    }
 
  header("Location: ../ClientsLogin/Confirmation.php");  