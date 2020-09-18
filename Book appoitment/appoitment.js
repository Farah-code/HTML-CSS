/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

 $(".book").click(function()
 {
    var TimeSlot = $(this).attr('data-timeslot'); 
    $("#slot").html(TimeSlot);
    $("#timeslot").val(TimeSlot); 
    $("#myModal").modal("show");
 });
