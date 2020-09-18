<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title> Registration Confirmation </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css"   href="../../CSS/ESTStyleSheet.css">
        <script type="text/javascript" src="../../JS/ESTJavaScript.js"></script>
    </head>
    <body>
        <?php
          require 'Header.php';
          
        ?>
       
        <table   class="JLTable1"  align="center"  border="0" width="100%" style="background-image: url('../Image1.jpg');">
             <thead>
                 <tr>
                     
                     
                     <th>
                         <form class="modal-content animate" action="RegisterDate.php" method="post" >
    <div class="imgcontainer">
     
     
      <h1><b>   </b></h1>
        
    </div>
      
       <div class="container">
      
             <h1><b> Error , you entered wrong password  </b></h1>
             <h1><b> Please  make sure you enter a same password  that you used in register form </b></h1>
             <h1><b> Please press back to return to login page  </b></h1>
            <h1>  <a href="../ClientsLoginPage.php"> Back </a></h1>
      
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

