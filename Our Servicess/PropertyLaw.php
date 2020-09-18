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
          <title> Property Law  </title>
    </head>
    <body>
        <?php
        require 'Header.php';
        ?>
        <img src="../../../ESTImages/Propert Law.jpg" width="100%" height="500px">
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
           <td><h1 style="font-family: 'Luckiest Guy'; font-size: 20px;"> The team at ESTLegal offer many years of experience with property law in the UK and have represented buyers, 
                   sellers and property developers.</h1>
               <h1 style="font-family: 'Luckiest Guy'; font-size: 25px; background-color: #000000; color:#ffffff;"> Our solicitors can offer assistance with property law in the following ways:</h1>
               <ul>
              <li style="font-family: 'Luckiest Guy'; font-size: 20px; color: #000000">Help you fully understand the issues involved in purchasing or selling property in England and Wales</li>
              <li style="font-family: 'Luckiest Guy'; font-size: 20px; color: #000000">Assistance with buying or selling at public auction/private treaty</li>
              <li style="font-family: 'Luckiest Guy'; font-size: 20px; color: #000000">Information about the costs involved (including taxes)</li>
              <li style="font-family: 'Luckiest Guy'; font-size: 20px; color: #000000">Advice for your Contract for Sale</li>
              <li style="font-family: 'Luckiest Guy'; font-size: 20px; color: #000000">Negotiating terms and conditions for the sale or purchase of property</li>
              <li style="font-family: 'Luckiest Guy'; font-size: 20px; color: #000000">Advice in regard to sale or purchase of vacant land, units, flats and rural land</li>
              <li style="font-family: 'Luckiest Guy'; font-size: 20px; color: #000000">Advice for meeting lender requirements</li>
              <li style="font-family: 'Luckiest Guy'; font-size: 20px; color: #000000">Arrange title searches and land enquiries </li>
              <li style="font-family: 'Luckiest Guy'; font-size: 20px; color: #000000"> .Help with the legal requirements for subdivisions and property developments </li>
              <li style="font-family: 'Luckiest Guy'; font-size: 20px; color: #000000"> .Advice in regard to building contracts </li>
              <li style="font-family: 'Luckiest Guy'; font-size: 20px; color: #000000"> .Advice and negotiation in regard to neighbourhood disputes including dividing fence disputes </li>
              <li style="font-family: 'Luckiest Guy'; font-size: 20px; color: #000000"> .Representation in dispute resolution and at Court</li>
               </ul>
               
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
