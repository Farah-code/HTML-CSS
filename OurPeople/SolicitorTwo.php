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
        <script type="text/javascript" src="HeaderJS.js"></script>
        <title> Solicitor Two  </title>
    </head>
    <body>
        <?php
        require 'Header.php';
        ?>
        
        <br> 
        <br>
        
                  <table>
            <thead>
                <tr>
                    <td>
                        <a style="font-size: 40px" class="JLC"><img src="../../../ESTImages/Person2.jpg" width="300" height="200"/> <br> Solicitor Two </a>        
                    </td>
        
                    <td>
                         <h1>if you wish to meet Solicitor two please book one of the available slots bellow</h1>
                        <a style="font-size: 35px; color: #990000;" href="../Book appoitment/Appoitment.php"> Book Appointment</a>
                    </td>
                </tr>
        </thead>   
        </table>
                    
                    
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
          <th>
                           

              
                         <h1 style="font-family: 'Luckiest Guy'; font-size: 25px; background-color: #000000; color:#ffffff; text-align: left;"> Solicitor two  Email </h1>  
               <h style="font-family: 'Luckiest Guy'; font-size: 20px; text-align: left;"> <a href="mailto:solicitortwo@estlegal.ac.uk" class="JLLink"> solicitortwo@estlegal.ac.uk </a></h>
              
                 <h1 style="font-family: 'Luckiest Guy'; font-size: 25px; background-color: #000000; color:#ffffff; text-align: left;"> Solicitor two  Phone </h1>  
               <h style="font-family: 'Luckiest Guy'; font-size: 20px; text-align: left;"> <a href="tel:  020536958741 " class="JLPhon">  020536958741 </a>  </h>
               
          <h1 style="font-family: 'Luckiest Guy'; font-size: 25px; background-color: #000000; color:#ffffff; text-align: left;"> Solicitor two  Office address </h1>  
          <br>
          <br>
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d158858.47482618745!2d-0.2420240172030674!3d51.52855783291438!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon!5e0!3m2!1sen!2suk!4v1596018632954!5m2!1sen!2suk" width="700" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
               
        
                    </th>
       
        <td>
                  <div class="contactusform">
                      <h1>
                          Send to Solicitor two your questions and Solicitor two will answer you as soon as possible 
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
