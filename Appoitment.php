<?php
 function Set_Calendar($month, $year)
 {
  $connect = new mysqli('127.0.0.1', 'root', '', 'ESTLegalAppoitment');
 
    
    $DaysData = array('Sunday','Monday', 'Tusday', 'Wedensday', 'Thursday', 'Friday' , 'Saturday');
   
    $StartMonth = mktime(0,0,0,$month,1,$year);
   
    $DaysNumber = date('t', $StartMonth); 
    
    $dateComponents = getdate($StartMonth); 
    
    $MonthName = $dateComponents['month'];
   
    $Weeks = $dateComponents['wday'];
    
    $Today = date('Y-m-d');
    
    $nextMonth = mktime(0,0,0,$month-1,1,$year);
    $nextDate = date('m', $nextMonth); 
    $nextDateComp = getdate($nextMonth);
    $nextMonthName = $nextDateComp['month'];
    $calendar = "<table class='table table-bordered>";
   
    $calendar.= "<a class='btn btn-xs btn-primary' href='?month=''&year=''> </a>";
    
    $calendar.="<center><h1>$MonthName $year</h1>";
  $calendar.= "<a class='btn btn-xs btn-primary' href='?month=".date('m', mktime(0,0,0,$month-1,1,$year))."&year=".date('Y', mktime(0,0,0, $month-1,1,$year))."'> Previouse Month </a>";
  $calendar.= "<a class='btn btn-xs btn-primary' href='?month=".date('m')."&year=".date('Y')."'> Current Month </a>";
  $calendar.= "<a class='btn btn-xs btn-primary' href='?month=".date('m', mktime(0,0,0,$month+1,1,$year))."&year=".date('Y', mktime(0,0,0, $month+1,1,$year))."'> Next Month</a></center><br>";
 

     $calendar.="<tr>";
  
    foreach($DaysData as $day)
    {
        $calendar.="<th class='header'> $day </th>";
    }
        $calendar.="</tr><tr>";
        
        if($Weeks > 0)
        {
            for ($k=0;$k<$Weeks;$k++)
            {
                $calendar.="<td class='empty'></td>"; 
            }
        }
        
        $currentDay = 1; 
        
        $month = str_pad($month,2,"0",STR_PAD_LEFT);
        
        while($currentDay<= $DaysNumber)
        {
            if($Weeks == 7)
            {
                $Weeks = 0; 
                
                $calendar.="</tr><tr>";
            }
            
            $currentDayRel = str_pad($currentDay,2,"0",STR_PAD_LEFT); 
            $date="$year-$month-$currentDayRel";
            $dayname = strtolower(date('l', strtotime($day)));
            $evenNum=0;
            
    
            
            $Today = $date==date('Y-m-d')?"today":"";
            if ($date < date('Y-m-d'))
            {
             $calendar.="<td><h4> $currentDay</h4><button class='btn btn-danger btn-xs'> Not Valid </button></td>"; 
            }
            
           
           else 
               {
               $calendar.="<td class='$Today'><h4> $currentDay</h4><a href='../Book appoitment/BookAppoitment.php?date=".$date."' class='btn btn-success btn-xs'> Book Appointment  </a></td>"; 
               }
         
            
            $calendar.="</td>";
            
            $currentDay++;
            $Weeks++;
        }
        if ($Weeks != 7 )
        {
            $remainingDays = 7-$Weeks;
            
            for($i=0;$i<$remainingDays;$i++)
            {
                $calendar.="<td></td>";
            }
        }
        
        $calendar.="</tr>";
        $calendar.="</table>";
        
        echo $calendar;
        
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
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
       <link rel="stylesheet" type="text/css" href="AppoitmentStyleSheet.css">
           <link rel="stylesheet" type="text/css"   href="HeaderCSS.css">
           <link rel="stylesheet" type="text/css"   href="../../../CSS/ESTStyleSheet.css">
        <script type="text/javascript" src="HeaderJS.js"></script>
        <script type="text/javascript" src="../../../JS/ESTJavaScript.js"></script>
        <title>Book Appointment </title>
    </head>
    <body>
    <?php
    
    require 'Header.php';
    
    ?>
          
        <div class="container">
            <div class="raw">
              
                <div class="col-md-12">
                    <?php
                    
                    $dateComponents = getdate();
                    if(isset($_GET['month']) && isset($_GET['year'])){
                         $month = $_GET['month']; 			     
                         $year = $_GET['year'];
                    
                    }else{
                    
                    $month = $dateComponents['mon'];
                    $year = $dateComponents ['year'];
                    }
                    echo Set_Calendar($month, $year);
        
                      ?>
                </div>
            </div>
        </div>
        
      <?php
             require 'Footer.php';
      ?>
    </body>
</html>
