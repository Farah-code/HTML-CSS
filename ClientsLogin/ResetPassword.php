<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

session_start();

$DatabaseHost = 'localhost';
$DatabaseUser = 'root';
$DatabasePassword = '';
$DatabaseName = 'estlegalappoitment';

$connect = mysqli_connect($DatabaseHost, $DatabaseUser, $DatabasePassword, $DatabaseName); 

scandir($DatabaseName, $sorting_order); 

set_time_limit($seconds);


if ($connect == CONNECTION_NORMAL)
{
    settype($connect, $DatabaseName); 
}

else if ($connect == CONNECTION_TIMEOUT)
{
    error_clear_last(); 
}

else if ($connect == connection_aborted())
{
    end($array);
}




