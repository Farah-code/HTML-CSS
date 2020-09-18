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
        <script type="text/javascript" src="HeaderJS.js"></script>
        <link rel="stylesheet" type="text/css" href="Our Servicess/StyleForm.css">
        <script type="text/javascript" src="../JS/ESTJavaScript.js"></script>
          <title> About ESTLegal Company </title>

    </head>
    <body>
      <?php
        require 'Header.php';
        ?>
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
           <h1 style="font-family: 'Luckiest Guy'; font-size: 25px; background-color: #000000; color:#ffffff;"> Our Offices in London </h1>
           <h1 style="font-family: 'Luckiest Guy'; font-size: 20px;">our offices in London are situated in an area which has been associated with the legal profession since the Middle Ages. 
               Our London office employs over 300 people and is widely renowned for the services we provide to business and individual clients. 
               ESTLegal is a “full service” law firm, which means that we offer a complete range of legal services to our clients, whether private or commercial. 
               Our solicitors in London provide advice and representation on family law and divorce matters, through to personal injury claims, as well as commercial litigation and dispute resolution.</h1>
           <h1 style="font-family: 'Luckiest Guy'; font-size: 20px;">we committed to providing the best experience for our clients from the first moment they in to contact with us.
</h1>
           
           <h1 style="font-family: 'Luckiest Guy'; font-size: 20px;">
               
               We strive to remain at the cutting edge of our specialist areas of expertise by pursuing innovative resolutions to legal problems. 
               We draw on our specialists experience across the full range of civil, 
               and immigration issues to uniquely position us to advise our clients on multi-faceted and complex crises arising in commercial contexts.
           </h1>
           
               
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d158858.47482618745!2d-0.2420240172030674!3d51.52855783291438!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon!5e0!3m2!1sen!2suk!4v1596018632954!5m2!1sen!2suk" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                
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
