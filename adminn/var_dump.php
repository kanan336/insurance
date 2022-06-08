<?php
include 'inc/head.php';


$sql = "SELECT * FROM `type_of_insurance` ";
  $result_posts= mysqli_query($con, $sql);
  
  if(!$result_posts){
      echo 'No Posts DB'. mysqli_error($con);
  }

$row_p= mysqli_fetch_assoc($result_posts);
  //print_r($row_p);
  
 print("<pre>".print_r($row_p,true)."</pre>");


?>

