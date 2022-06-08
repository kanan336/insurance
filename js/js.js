/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */




var topmenulogo=document.getElementById('topmenulogo');
topmenulogo.style.display='none';



//var topmeny1=document.getElementById('topmeny1');




//logomenu3 script
const logomnu3=window.onscroll = function() {logomenu3Function()};

function logomenu3Function() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {

 document.getElementById("topmeny2").style.display = "none";

 document.getElementById("topmeny3").className = "menutopChng";

 topmenulogo.style.display='block';

 document.getElementById("topmenulogoimg").style.width='75%';

document.getElementById("navbarTogglerDemo02").className="navbar-collapsechng";



  }else{

 document.getElementById("topmeny2").style.display = "block";

 document.getElementById("topmeny3").className = "menutop";

 topmenulogo.style.display='none';

  document.getElementById("navbarTogglerDemo02").className="navbar-collapse";

  }
}
//logomenu3 script









