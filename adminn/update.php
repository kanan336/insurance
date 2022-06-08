<?php
require '../db/db.php';
if(isset($_POST['update_qanun'])){
    
echo $qanun_id=$_POST['qanun_id'];
echo $edit_qanun_name=$_POST['edit_qanun_name'];
echo $edit_qanun_link=$_POST['edit_qanun_link'];

$edit_time= date("Y-m-d h:i:sa");

$sql_edit_xidmet="UPDATE qanun SET " ;
$sql_edit_xidmet.="f_name='{$edit_qanun_name}', ";
$sql_edit_xidmet.="f_link='{$edit_qanun_link}', ";



$sql_edit_xidmet.="editfdate='{$edit_time}' ";

$sql_edit_xidmet.= "WHERE f_id = {$qanun_id} " ;


$update_result= mysqli_query($con, $sql_edit_xidmet);

  if($update_result){
//          $_SESSION['message'] = "Dəyişiklik edildi";
        echo '<div class="alert alert-success" role="alert">
  <h1 class="alert-heading text-center">!!!!!!!!!!!!!!!!</h1>
  <h1 class="text-center"><b>Dəyişiklik uğurla həyat keçdi.</b></h1>
  <hr>
  <h1 class="alert-heading text-center">!!!!!!!!!!!!!!!!</h1>
</div>';
          $page = "qanunvericilik.php";
    echo '<meta http-equiv="Refresh" content="5;' . $page . '">';  
      } else {
          echo 'No editt'. mysqli_error($con);    
      }

    
    
    
}






?>