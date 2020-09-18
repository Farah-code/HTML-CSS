<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title> Reset Login Details </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel="stylesheet" type="text/css"   href="../CSS/ESTStyleSheet.css">
        <script type="text/javascript" src="../JS/ESTJavaScript.js"></script>
        <link rel="stylesheet" type="text/css"   href="HeaderCSS.css">
        <link rel="stylesheet" type="text/css"   href="JLStyle.css">
        <script type="text/javascript" src="JLScript.js"></script>
        
    </head>
    <body>
        <?php
          require 'Header.php';
        ?>
       
        <table   class="JLTable1"  align="center"  border="0" width="100%" style="background-image: url('../Image1.jpg');">
             <thead>
                 <tr>
                     
                     
                     <th>
             <form class="modal-content animate" action="UpdateLogin.php" method="post" >
    <div class="imgcontainer">
     
     
      <h1><b>   </b></h1>
        
    </div>
      
      
       <div class="container">
           <h1>Please Enter the same  Email address that used in register form </h1>
           <input type="email" placeholder="Email address" name="EmailAddress" required> <br>
              <input type="text" placeholder="Enter you new user name" name="UserName" required> <br>                   
              <input type="password" placeholder="Enter your new password" name="PAW" required> <br>
               <input type="password" placeholder="repeate your new password" name="rePAW" required>
                <button type="submit" name="change"> change </button>
                    <button type="reset"> Clear </button>
                 
         </div>
                     </form>
                     </th>
                 </tr>
          
             </thead>
         </table>
        
        
        <?php
       require 'Footer.php';
        ?>
    </body>
</html>

