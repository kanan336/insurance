<?php

$session_user_id=$_SESSION['id'];
$qanun_name='';
$errors = array(); 

if(isset($_POST['add_qanun'])){
     
$qanun_name=$_POST['qanun_name'];

$qanun_link=$_POST['qanun_link'];

$session_kat_user_id=$_POST['session_user_id'];
   
if(!empty($qanun_name)){
    
   $query = "INSERT INTO `qanun` ( f_name, f_link, user_id ) ";

$query .= "VALUES('{$qanun_name}','{$qanun_link}','{$session_kat_user_id}' )";

$xerc_kat_query= mysqli_query($con,$query);
$the_xercc_idd= mysqli_insert_id($con);

 $page = $_SERVER['PHP_SELF'];
echo '<meta http-equiv="Refresh" content="2;' . $page . '">'; 
  
  } else {
echo"Sigorta elave edilmedi".mysqli_error($con);    
}
//           
    
}




?>
<!--Xercleri daxil edin star-->
<form action="" method="POST" enctype="multipart/form-data">
<div class="modal fade" id="add_qanun" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<h3 class="danger-color text-center"><?php include('inc/errors.php'); ?></h3>
<div class="modal-header text-center">
<h4 class="modal-title w-100 font-weight-bold">Qanun məlumatlarını daxil edin</h4>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body mx-3">

<div class="form-group">
<label for="author">Qanunun adı</label>
<input type="text" class="form-control" name="qanun_name">
</div>

<div class="form-group">
<label for="author">Linki əlavə edin</label>
<input type="text" class="form-control" name="qanun_link">
</div>

    

<div class="form-group">
<label for="post_content"></label>
<input value="<?php echo $session_user_id;?>" type="hidden" name="session_user_id" class="form-control" required>
</div>
    <div class="form-group">
<input class="btn btn-primary" type="submit" name="add_qanun" value="Yadda saxla">
</div>
    <hr>
   

</div>

</div>

</div>
</form>
</div>

