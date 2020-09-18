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
          <title> Commercial Law </title>
    </head>
    <body>
        <?php
        require 'Header.php';
        ?>
        <img src="../../../ESTImages/Commercial Law.jpg" width="100%" height="500px"/>
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
           <td><h1 style="font-family: 'Luckiest Guy'; font-size: 20px;">If you’re starting up or running a business there are many laws that impact upon the everyday practices and decisions you need to make. 
                       You can’t ignore the law, but you also don’t want to spend hard earned profits on litigation.</h1>
           <h1 style="font-family: 'Luckiest Guy'; font-size: 25px; background-color: #000000; color:#ffffff;"> Our commercial solicitors can help</h1>
           <h1 style="font-family: 'Luckiest Guy'; font-size: 20px;">At EST legal we’ve helped businesses large and small get on their feet and prosper. 
               Whether you are starting up a micro-business, operating a long standing family business, 
               or conquering the world our commercial solicitors can make sure your business has the right foundations and is 
               operating to diminish the risk of future legal problems. You can get on with growing your business confident 
               that your legal concerns are in safe hands.</h1>
           <h1 style="font-family: 'Luckiest Guy'; font-size: 20px;">We can assist with:</h1>
           <h1 style="font-family: 'Luckiest Guy'; font-size: 20px; color: #ff6666 ; text-decoration: underline; "> Buying or Selling Commercial Property.</h1>
           <h style="font-family: 'Luckiest Guy'; font-size: 20px; color: #000000">Commercial property contracts are often complex and require an experienced hand to bring them to settlement. We’ll make sure the contract protects your </h>
           <h1 style="font-family: 'Luckiest Guy'; font-size: 20px; color: #ff6666 ; text-decoration: underline; "> Problems with Landlords or Tenants.</h1>
           <h style="font-family: 'Luckiest Guy'; font-size: 20px; color: #000000">With leasing issues you need to get things right from the beginning. We’ll make sure everything is clearly spelt out in the lease, and that any disputes which do arise are dealt with efficiently.</h>
          <h1 style="font-family: 'Luckiest Guy'; font-size: 20px; color: #ff6666 ; text-decoration: underline; "> Debt Recovery.</h1>
           <h style="font-family: 'Luckiest Guy'; font-size: 20px; color: #000000"> Do you need to chase a non paying customer? Our commercial solicitors know the ropes and can help you get back the money you are owed.</h>
           <h1 style="font-family: 'Luckiest Guy'; font-size: 20px; color: #ff6666 ; text-decoration: underline; "> Business Restructuring.</h1>
           <h style="font-family: 'Luckiest Guy'; font-size: 20px; color: #000000"> Our commercial solicitors can help you restructure your business to maximise its potential and avoid falling into debt.</h>
          <h1 style="font-family: 'Luckiest Guy'; font-size: 20px; color: #ff6666 ; text-decoration: underline; "> Trading Dispute Support.</h1>
           <h style="font-family: 'Luckiest Guy'; font-size: 20px; color: #000000"> We keep our eye on the bottom line, and settle disputes as cost effectively as possible. Our commercial solicitors are excellent negotiators and are able to keep issues out of court in most cases. </h>
           <h1 style="font-family: 'Luckiest Guy'; font-size: 20px; color: #ff6666 ; text-decoration: underline; "> Insolvency Advice.</h1>
           <h style="font-family: 'Luckiest Guy'; font-size: 20px; color: #000000"> If your business is in trouble, we offer clear and practical advice to help keep you on your feet. If insolvency is unavoidable we’ll guide you through the legal procedures.</h>
          <h1 style="font-family: 'Luckiest Guy'; font-size: 20px; color: #ff6666 ; text-decoration: underline; "> Employment and HR Contracts and Disputes. </h1>
           <h style="font-family: 'Luckiest Guy'; font-size: 20px; color: #000000">Our commercial solicitors will make sure that your employment contracts protect your rights, and deal fairly and effectively with disputes that may arise with your employees. </h>
           <h1 style="font-family: 'Luckiest Guy'; font-size: 20px; color: #ff6666 ; text-decoration: underline; "> Intellectual Property Protection.</h1>
           <h style="font-family: 'Luckiest Guy'; font-size: 20px; color: #000000"> We can help with copyright, trade marks and patent applications as well as dealing with breaches. </h>

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
