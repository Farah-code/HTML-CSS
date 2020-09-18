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
          <div class="col-md-6 col-md-offset-3">
                     <?php echo isset($ConfirmMessage)?$ConfirmMessage:"";?>
                     <form action="" method="post" >
                        
                  <input type="text" class="form-control" name="FullName" placeholder="Enter your full name">
                  <input type="email" class="form-control" name="Email" placeholder="Enter your email">
                  <input type="tel" class="form-control" name="Phone" placeholder="Enter your phone number">
                  <textarea type="text" rows="10" cols="75" name="Reason" placeholder="please type reson for book this appoitment"></textarea>    <br>  
                  <button type="submit" class="btn btn-primary" name="submit"> Submit </button> 
                  <button type="reset" class="btn btn-primary"> Clear </button>
                     </form>
                     
                 </div>
    </body>
</html>
