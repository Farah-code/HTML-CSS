<?php
require_once 'PaymentConfigration.php';
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../bootstrap-4.5.0-dist.zip/css/bootstrap.min.css" >
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" href="PaymentCSS.css">
        <link rel="stylesheet" href="HeaderCSS.css">
        <link rel="stylesheet" href="../CSS/ESTStyleSheet.css">
        <script type="text/javascript" src="HeaderJS.js"></script>
         <script type="text/javascript" src="JS/ESTJavaScript.js"></script>
        <title>Fees & Payment</title>
    </head>
    
    <body>
       <?php 
       require 'Header.php';
       ?>
      <button ><a href="../PriceList.php">Back to price list</a></button>  
        
        <table >
            <thead>
                <tr>
                    <th>
        <div class="container">
           <?php
           $ColumnNumber = 1; 
           foreach ($Price as $PriceID => $attributes)
           {
             if ($ColumnNumber == 1)
             {
                 echo '<div class="row">';
                 
              echo '
                  <table class="JLTable1"  align="center"  border="0" width="25%" >
          <thead>
             <tr>
                  <th>
                <div class="col-md-4">
                    <div class="card" id="card1">
                        <div class="card-header text-center">
                            <h2 class="price"><span class="currency">£</span>'.($attributes['price']/100).'</h2>
                        </div>
                        <div class="card-body text-center">
                            <div class="card-title">
                                <h2>'.$attributes['title'].'</h2>
                            </div>
                            <ul class="list-group">
                            '; 

                            foreach($attributes['features'] as $features)
                                echo '<li class="list-group-item">'.$features.'</li>';
    
                        echo ' 
                            </ul>  
  
                            <form action="stripeIPN.php?id='.$PriceID.'" method="POST">
                              <script
                                 
                                src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                data-key="'.$stripeDetils['publishableKey'].'"
                                data-amount="'.$attributes['price'].'"
                                data-name="'.$attributes['title'].'"
                                data-currency = "gbp"
                                data-description="Payment online by card"
                                data-locale="auto">
                              </script>
                            </form>
                        </div>
                    </div>
                </div>
                </th>
            ';
             }
             else if ($ColumnNumber == 3)
             {
                 echo '</div> <br>'; 
                 $ColumnNumber = 0;
             }
             else 
             {
               $ColumnNumber++;  
             }
           }
           
           ?>
           
                </div>
                
        </th>
        </tr>
        </thead>
</table>
       
 
        
    </body>
    
    
</html>
