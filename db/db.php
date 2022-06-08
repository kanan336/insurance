<?php
//connection yaradirsan tehlukesizlik cehetden ashagidaki connection superdi
$db['db_host']= "localhost";
$db['db_user']= "root";
$db['db_pass']= "";
$db['db_name']= "ssyaz";

foreach($db as $key  =>  $value)
{
    if(!defined(strtoupper($key))){ define(strtoupper($key), $value); }
}

$con=mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

if(!$con){
    echo 'DB Not connected sigortix'. mysqli_error($con);
} else {
echo"";
    
} 



?>