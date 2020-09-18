<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if (isset($_POST['submit']))
{

    $To = "aljouborifarah@gmail.com"; 
    $From = $_POST['Email'];
    $FirstName = $_POST['FirstName'];
    $LastName = $_POST['LastName'];
    $SubjectForm = "New Form Submission "; 
    $subjectForm2 = "Copy of your New Form Submission";
    $Message = $FirstName . " " . $LastName . " wrote the following Message:" . "\n\n"   . $From . "\n\n" .$_POST['Message'];
    $Message2 = "Here is a copy of your message " . $FirstName . "\n\n" . $_POST['Message'];
    $Header = "From" . " " .$From; 
    $Header2 = "From" . " " .$To;
   $send1 =  mail ($To,$SubjectForm,$Message,$Header);
   $send2 =   mail ($From,$subjectForm2,$Message2,$Header2); 
   
   
   if ($send1 == true && $send2 == true)
   {
    echo '<script>alert("your message send sucessfully, '
     . 'Please check your email for confirmation  " )</script>'; 
  
     header('Location: ../ESTLegalMainPage.php'); 
   }
   
   else 
   {
      echo '<script>alert("Error your message not send sucessfully, '
     . 'Please try again  " )</script>';
      
   }
}
