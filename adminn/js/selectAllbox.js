/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


//View all postdaki cedvelin solundaki chek boxlari tenzim edir
$(document).ready(function(){
    
   $('#selectAllbox').click(function(event){
       
       if(this.checked){
           $('.checkBoxes').each(function(){
               this.checked=true;
           });
       }else{
           $('.checkBoxes').each(function(){
               this.checked=false;
           });
       }
       
   });
   }