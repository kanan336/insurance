   
<?php

$session_user_id=$_SESSION['id'];
$Xerc_kat_name='';
$errors = array(); 

if(isset($_POST['add_xerc_cat'])){
     
$Xerc_kat_name=$_POST['kat_name'];
$session_kat_user_id=$_POST['session_user_id'];
   
if(!empty($Xerc_kat_name)){
    
   $query = "INSERT INTO `categories` ( cat_title, user_id ) ";

$query .= "VALUES('{$Xerc_kat_name}','{$session_kat_user_id}' )";

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
<div class="modal fade" id="add_xerc_cat" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<h3 class="danger-color text-center"><?php include('inc/errors.php'); ?></h3>
<div class="modal-header text-center">
<h4 class="modal-title w-100 font-weight-bold">Kateqoriya daxil edin</h4>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body mx-3">

<div class="form-group">
<label for="author">Kateqoriya adı</label>
<input type="text" class="form-control" name="kat_name">
</div>
    

<div class="form-group">
<label for="post_content"></label>
<input value="<?php echo $session_user_id;?>" type="hidden" name="session_user_id" class="form-control" required>
</div>
    <div class="form-group">
<input class="btn btn-primary" type="submit" name="add_xerc_cat" value="Yadda saxla">
</div>
    <hr>
    <div class="modal-header text-center">
<h4 class="modal-title w-100 font-weight-bold">Kateqoriyalar</h4>

</div>
    
    <?php
  
    $sql_xercler = "SELECT * FROM `categories`  ";
    $result_xerrc= mysqli_query($con, $sql_xercler);
    
    while ($row_xercc= mysqli_fetch_array($result_xerrc)){
       
        
        $xerc_cat_id=$row_xercc['cat_id'];
       $xerc_cat_name=$row_xercc['cat_title'];
        
              


echo "
<div>    
<ul class='list-group list-group-horizontal mb-1'>
  <li class='list-group-item'>{$xerc_cat_name}</li>
  
</ul> </div>";
    }
    
    ?>
    
    
    


</div>

</div>

</div>
</form>
</div>

