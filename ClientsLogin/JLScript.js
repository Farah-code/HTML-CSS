/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function clear()
{
    document.getElementById("firstname").value="";
    document.getElementById("secoundname").value="";
    document.getElementById("phonenumber").value="";
    document.getElementById("email").value="";
    document.getElementById("username").value="";
    document.getElementById("password").value="";
}


var log = document.getElementById('login');

window.onclick = function (event)
{
    if (event.target == log)
    {
        log.style.display = "none";
    }
}



var anmiation = document.getElementsByClassName('anamition');

window.onclick = funcation(event)
{
    if (event.every())
    {
        anmiation.style.display = "none";
    }
        
}