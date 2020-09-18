<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
     <?php
         require '../Clients/ClientsHeader.php';
        ?>
        
        <table   class="JLTable1"  align="center"  border="0" width="100%" >
             <thead>
                 <tr>
                     
                     
                     <th>
                         <form class="modal-content animate" action="RegisterDate.php" method="post" >
    <div class="imgcontainer">
     
     
      <h1><b>   </b></h1>
        
    </div>
      
      
       <div class="container">
           
         <?php 
         require_once 'PaymentConfigration.php';
               $PriceID = $_GET['id'];
         echo 'Successful payment! You have been charged £' . ($Price[$PriceID]["price"]/100); ?>  
             
             <h1><b> Please press back to return to Fees & payment page  </b></h1>
             <h1>  <a href="../Payment/Fees&Payments.php"> Back </a></h1>
      
         </div>
                     </form>
                     </th>
                 </tr>
          
             </thead>
         </table>
        
        <?php
        require '../Clients/Footer.php';
        ?>
    </body>
</html>
