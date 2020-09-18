<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css"   href="HeaderCSS.css">
        <link rel="stylesheet" type="text/css" href="StyleForm.css">
        <script type="text/javascript" src="../JS/ESTJavaScript.js"></script>
          <title> Divorce Law </title>
    </head>
    <body>
        <?php
        require 'Header.php';
        ?>
        <img src="../../../ESTImages/Divorce Law.jpg" width="100%" height="500px">
          <table border="0" width="100%">
           <thead>
               <tr>
                   <th></th>
                   <th></th>
               </tr>
           </thead>
           <tbody>
               
               <tr>
          
               <td> 
     
           </td>
           <td><p style="height: 50px; width: 20">                                                  </p></td>
           <td>
           <h1 style="font-family: 'Luckiest Guy'; font-size: 25px; background-color: #000000; color:#ffffff;"> Family Law Solicitors</h1>
           <h1 style="font-family: 'Luckiest Guy'; font-size: 20px;">Family breakdowns can be one of the hardest experiences you’ll ever have to go through. 
               You know that the decisions you make now will determine your family’s future. 
               It’s difficult to think straight though when it seems like your life is falling apart in every direction.</h1>
           <h1 style="font-family: 'Luckiest Guy'; font-size: 25px; background-color: #000000; color:#ffffff;"> We can help</h1>
           <h1 style="font-family: 'Luckiest Guy'; font-size: 20px;">We understand the issues, and we’ve helped many people dealing with the same stresses as you are come through it all cleanly. 
               We’ll help you work out the best way forward and negotiate calmly on your behalf. 
               No matter how hard it gets our family law solicitors will stand by you and keep our eyes on the best possible outcome for you and your family.
               Our family law solicitors are empathetic and highly skilled. You will find us friendly, practical, and discreet.</h1>
           <h1 style="font-family: 'Luckiest Guy'; font-size: 20px;"> We can help with: </h1>
           
           <h1 style="font-family: 'Luckiest Guy'; font-size: 20px; color: #ff6666 ; text-decoration: underline; "> Amicable separations and divorces. </h1>
       
           <h style="font-family: 'Luckiest Guy'; font-size: 20px; color: #000000"> If you’ve already worked out a plan that is agreeable to both parties, then we can help make it legally binding. </h>
           <h1 style="font-family: 'Luckiest Guy'; font-size: 20px; color: #ff6666 ; text-decoration: underline; "> Contested hearings.</h1>
           <h style="font-family: 'Luckiest Guy'; font-size: 20px; color: #000000">If negotiation and mediation isn’t going to work in your situation then our family law solicitors will stand up and fight for your rights in Court.</h>
          <h1 style="font-family: 'Luckiest Guy'; font-size: 20px; color: #ff6666 ; text-decoration: underline; "> Child contact, residency or maintenance.</h1>
           <h style="font-family: 'Luckiest Guy'; font-size: 20px; color: #000000"> Making arrangements for your children following a family breakdown isn’t always easy. We’ll make sure that the children’s best interests are at the heart of every discussion and that your rights as a parent or grandparent are upheld.</h>
           <h1 style="font-family: 'Luckiest Guy'; font-size: 20px; color: #ff6666 ; text-decoration: underline; "> Financial settlements.</h1>
           <h style="font-family: 'Luckiest Guy'; font-size: 20px; color: #000000">Your future depends on an equitable split of your finances so we will make sure that all of the assets are on the table and that the division is done fairly.</h>
          <h1 style="font-family: 'Luckiest Guy'; font-size: 20px; color: #ff6666 ; text-decoration: underline; "> Domestic abuse. </h1>
           <h style="font-family: 'Luckiest Guy'; font-size: 20px; color: #000000">   Please call the police if you feel you are in danger and get medical attention straight away for any injuries you might have. Once you’re out of danger, we can help you get the protection to need to ensure you and your children remain safe. We can get Orders put in place quickly which afford you greater protection from the police.</h>
           <h1 style="font-family: 'Luckiest Guy'; font-size: 20px; color: #ff6666 ; text-decoration: underline; "> Child care proceedings. </h1>
           <h style="font-family: 'Luckiest Guy'; font-size: 20px; color: #000000">  If social services are threatening to take your children into care or have already done so then we can help. </h>
           <h1 style="font-family: 'Luckiest Guy'; font-size: 20px; color: #ff6666 ; text-decoration: underline; "> Prenuptial agreements.</h1>
           <h style="font-family: 'Luckiest Guy'; font-size: 20px; color: #000000"> No one likes to go into marriage anticipating the worst outcome, and yet, it’s important to protect your rights. We’ll make the conversation less awkward by working out whether you need an agreement, and if you do, what terms make sense to both of you. </h>

       </td>
       
        <td>
                  <div class="contactusform">
                      <h1>
                          Send us your questions and we will answer you as soon as possible 
                      </h1> 
                  </div>
                  <div class="contactusform" style="">
                      <form  style="background-color: black; "  action="SendEmail.php" method="post" id="contactform">
            <input style="color: whitesmoke;" type="text" class="form1" placeholder="Enter your First Name" name="FirstName" required>
            <br>
            <input style="color: whitesmoke;" type="text" class="form1" placeholder="Enter your Last Name" name="LastName" required>  
            <br>
            <input style="color: whitesmoke;" type="email" class="form1" placeholder="Enter your Email" name="Email" required>
            <br>
            <input style="color: whitesmoke;" type="text" class="form1" placeholder="Enter your Message Subject" name="Subject" required>
            <br>
            <textarea style="color: whitesmoke;"  name="Message" class="form1" placeholder="Enter your Message " rows="20"  cols="50"
                      required=""></textarea> <br>
                           
            <input type="submit" style="color: whitesmoke;" name="submit" class="form1 submit" value="SEND MESSAGE" required>
            <input type="reset" style="color: whitesmoke;" class="form1 submit" value="CLEAR" required>
            </form>
            
        </div>
                  
              </td>
               </tr>
               
            
              
           </tbody>
       </table>
        
        <?php
        require 'Footer.php';
        ?>
        
    </body>
</html>
