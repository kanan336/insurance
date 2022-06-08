<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function confirmQuery($result){
global $con;
if(!$result){
die('Query Failed.'. mysqli_error($con));
}

}




?>