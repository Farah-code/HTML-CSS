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


if(isset($_POST['change'])){

    $EmailAddress = $_POST['EmailAddress'];
    $UserName = $_POST['UserName'];
    $PAW = $_POST['PAW'];
    $rePAW = $_POST['rePAW'];
    $Statement = $connect->prepare("select * from Clients where EmailAddress=?");
    $Statement->bind_param('s', $EmailAddress);
    if($Statement->execute()){
        $result = $Statement->get_result();
     $Statement = $connect->prepare("UPDATE Clients 
 SET UserName=:UserName, PAW=:PAW, rePAW=:rePAW 
 WHERE EmailAddress=:EmailAddress");
    $Statement->bind_param('sss', $UserName, $PAW, $rePAW);
    $Statement->execute();
    $Statement->close();
    $connect->close();  
        }
    }
 