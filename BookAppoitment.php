  <?php
    $connect = new mysqli('127.0.0.1', 'root', '', 'ESTLegalAppoitment');
    
    
  if(isset($_GET['date']))
  {
    $Statement = $connect->prepare("select * from BookAppoitment where date = ?");
    $Statement->bind_param('s', $date);
    $BookAppoitment = array();
    if($Statement->execute()){
        $result = $Statement->get_result();
        if($result->num_rows>0){
            while($row = $result->fetch_assoc()){
                $BookAppoitment[] = $row['timeslot'];
            }
            
            $Statement->close();
        }
    }
  }
  
        if(isset($_GET['date']))
        {
            $date = $_GET['date'];
        }
       
        
        if(isset($_POST['submit'])){
    $FullName = $_POST['FullName'];
    $Email = $_POST['Email'];
    $timeslot = $_POST['timeslot'];
    $Phone = $_POST['Phone'];
    $Reason = $_POST['Reason'];
  
    $Statement = $connect->prepare("select * from BookAppoitment where date = ? AND timeslot = ?");
    $Statement->bind_param('ss', $date, $timeslot);
    if($Statement->execute()){
        $result = $Statement->get_result();
        if($result->num_rows>0){
         $ConfirmMessage = "<div class='alert alert-danger'>Error, this slot is already booked please try another slot</div>";   
        }
        else 
        {
     $Statement = $connect->prepare("INSERT INTO BookAppoitment (FullName, timeslot, Email, Phone, Reason, date) VALUES (?,?,?,?,?,?)");
    $Statement->bind_param('ssssss', $FullName, $timeslot, $Email, $Phone , $Reason, $date);
    $Statement->execute();
    $ConfirmMessage = "<div class='alert alert-success'>Congratulation, Your Booking has been placed sucessfully </div>";
    $BookAppoitment[] = $timeslot; 
    $Statement->close();
    $connect->close();  
        }
    }
 
}  

  $StartSlot = "09:00"; 
  $EndSlot = "18:00";
  $duration = 15; 
  $SlotDate = 0; 
  

  function CreateSlot ($StartSlot, $EndSlot, $duration, $SlotDate)
  {
      $StartSlot = new DateTime($StartSlot);
      $EndSlot = new DateTime($EndSlot);
      $interval = new DateInterval("PT".$duration."M");
      $intervalSlotDate = new DateInterval("PT".$SlotDate."M"); 
      $SlotsAvalible = array(); 
      
      for ($StartTime = $StartSlot; $StartTime < $EndSlot; $StartTime->add($interval)->add($intervalSlotDate))
      {
          $EndPeriod = clone $StartTime;
          $EndPeriod->add($interval);
          if ($EndPeriod > $EndSlot)
          {
          break;
          }
           $SlotsAvalible[] = $StartTime->format("H:iA")." To ".$EndPeriod->format("H:iA");
      }
      
     return $SlotsAvalible;
      
      
  }
  

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
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      
        <title> Appointment slot <span id="slot"></span></title>
    </head>
    <body>
    
        <div class="container">
            <h1 class="text-center">Book Appointment for:  <?php echo date('D d - F Y', strtotime($date));?></h1> <br>
             <div class="raw">
                 <div class="col-md-12">
                  <?php echo isset($ConfirmMessage)?$ConfirmMessage:"";?>  
                     
                 </div>
                 <?php 
                  $SlotProcess = CreateSlot ($StartSlot, $EndSlot, $duration, $SlotDate);
                  foreach ($SlotProcess as $slot)
                  {
                     
                 ?>
                 
                 <div class="col-md-2">
                     <div class="form-group">
                         <?php if (in_array($slot, $BookAppoitment)){?>
                         
                         <button class="btn btn-danger"><?php echo $slot; ?></button>
                         <?php } else { ?>
                         <button class="btn btn-success book" data-timeslot="<?php echo $slot; ?>"><?php echo $slot; ?></button>
                         
                         <?php } ?>
                       
                     </div>
                 </div>
                  <?php } ?>
                 
               
                 
             </div>
        </div>
       
       <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"> Book Appointment for Slot time <span id="slot"></span> </h4>
      </div>
      <div class="modal-body">
          <div class="raw">
              <div class="col-md-12">
                     <form action="" method="post" >
                         <div class="form-group">
                             <label for="">Time Slot</label>
                             <input type="text" class="form-control" readonly name="timeslot" id="timeslot" >
                         </div>
                         
                       <div class="form-group">
                           <input type="text" class="form-control"  name="FullName" placeholder="Enter your full name" required>
                         </div>
                         
                      <div class="form-group">
                          <input type="email" class="form-control"  name="Email" placeholder="Enter your email" required>
                         </div>
                         
                         <div class="form-group">
                             <input type="tel" class="form-control"  name="Phone" placeholder="Enter your phone number" required>
                         </div>
                         
                        <div class="form-group">
                            <textarea type="text" rows="10" cols="75"  name="Reason" placeholder="please type reson for book this appoitment" required></textarea>    <br>  
                         </div>
                   
                         <div class="form-group pull-right ">
                          <button type="submit" class="btn btn-primary" name="submit"> Book Appointment </button>
                           
                         </div>
                 
                
                     </form>
              </div>
              
          </div>
      </div>
      <div class="modal-footer">
       
      </div>
    </div>

  </div>
</div>
      
        
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
    <script type="text/javascript" src="appoitment.js"></script>
    
  
    
    </body>
</html>
