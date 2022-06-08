<!DOCTYPE html>
<html lang="en">
<!--//new sigortix adminnn-->
<?php
include 'inc/head.php';
include 'modal/add_category.php';
?>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

<!-- Sidebar -->
<?php
include 'inc/sidebar.php';
?>
<!-- End of Sidebar -->

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

<!-- Topbar -->
<?php
include 'inc/topbarNavbar.php';
?>
<!-- End of Topbar -->

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
<h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
<a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>

<!-- Content Row -->

<?php
include 'inc/contentRow.php';
?>
<!-- Content Row -->

<!-- Content Row -->


</div>
<!-- /.container-fluid -->
<div class="line">
<div class="container-fluid">
<div class="row">
<div class="col-md-12 "><h1>Kateqoriyalar</h1></div>
<br>
</div>

<div class="row">
<div class="table-responsive">
<?php
//box gonderilmesi tododa lazim olacaq
if(isset($_POST['checkBoxArray'])){

foreach($_POST['checkBoxArray'] as $chekBoxValue){

$bulk_options=$_POST['bulk_options'];

switch ($bulk_options){
//case 1   

case 'delete':

$query="DELETE FROM categories WHERE cat_id='{$chekBoxValue}' ";
$update_to_delete_status= mysqli_query($con,$query);
if($update_to_delete_status){

 echo "<div class='alert alert-danger' role='alert'>
  <h2 class='text-center'> Silindi!!! </h2>
</div>";
 //səhifəni yenilemek uchun super script
$page = $_SERVER['PHP_SELF'];
echo '<meta http-equiv="Refresh" content="2;' . $page . '">'; 
} else {
echo 'Noo'. mysqli_error($con);    
}

break;

case '1':

$query="UPDATE posts SET posts_status=1 WHERE post_id='{$chekBoxValue}' ";
$update_post= mysqli_query($con,$query);
if($update_post){

 
 echo '<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
  </symbol>
  <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
  </symbol>
  <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
  </symbol>
</svg>';
 echo '<div class="alert alert-success d-flex align-items-center" role="alert">
  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
  <div>
   <h4 class="alert-heading">Yeniləndi!</h4>
  </div>
</div>';
 //səhifəni yenilemek uchun super script
$page = $_SERVER['PHP_SELF'];
echo '<meta http-equiv="Refresh" content="4;' . $page . '">'; 
} else {
echo 'Noo'. mysqli_error($con);    
}

break;

case '0':

$query="UPDATE posts SET posts_status=0 WHERE post_id='{$chekBoxValue}' ";
$update_post= mysqli_query($con,$query);
if($update_post){

 echo "<div class='alert alert-succses' role='alert'>
  <h2 class='text-center'> Yeniləndi!!! </h2>
</div>";
 //səhifəni yenilemek uchun super script
$page = $_SERVER['PHP_SELF'];
echo '<meta http-equiv="Refresh" content="2;' . $page . '">'; 
} else {
echo 'Noo'. mysqli_error($con);    
}

break;



}

}

}

?>
<form action="" method="post">
<table class="table table-hover">
<!---style bulk -->
<style>
#bulkOptionsContainer{
padding: 1px;

}
</style>

<div class="container-fluid">
        
    <div class="row">
        
    <div class="row gap-1 mb-2">
        <div id="bulkOptionsContainer" class="col-4">
  <select class="form-control" name="bulk_options" id="">
    <option style="background-color:red;" value="">Variantları seçin və tətbiq et düyməsini klikləyin</option>
    <option value="delete">Sil</option>
    <option value="1">Publish</option>
    <option value="0">Draft</option>
    
</select>
        </div>
        <div class="col-2">
       <input  type="submit" name="submit" class="btn btn-success" value="Tətbiq et">
   
        </div>
      
    </div>
<!--        ___________________________________________________________-->

        <div class="row gap-1 mb-2">
        <div id="bulkOptionsContainer" class="col-4">
<a class="btn btn-success" href="posts_add.php"><i class="fas fa-plus-circle "></i> Post Əlavə edin</a>
<a class="btn btn-success" data-toggle="modal" data-target="#add_xerc_cat" href="add_category.php"><i class="fas fa-rss"></i> Kateqoriya əlavə edin</a>
        </div>
        <div class="col-2">
   
   
        </div>
        <div class="col-3">

        </div>
    </div>

 
</div>
    
    
    
    
</div>

<thead class="thead-dark ">
<tr>
<th><input id="selectAllbox" type="checkbox"></th>
<th class="th_post" scope="col">#id</th>
<th scope="col">Kat_id</th>
<th class="th_post" scope="col">OP</th>
<th class="th_post" scope="col">OP</th>

</tr>
</thead>
 <?php
 
 $sql_xercler = "SELECT * FROM `categories`  ";
    $result_xerrc= mysqli_query($con, $sql_xercler);
    
    while ($row_xercc= mysqli_fetch_array($result_xerrc)){
       
        
        $xerc_cat_id=$row_xercc['cat_id'];
       $xerc_cat_name=$row_xercc['cat_title'];
        

    
  
  ?>
<tbody>
<tr>
<td><input class='checkBoxes' value="<?php echo $xerc_cat_id; ?>" type='checkbox' name='checkBoxArray[]'></td>
<td class="th_post"><?php echo $xerc_cat_id;?></td>
<td class="th_post"><?php echo $xerc_cat_name;?></td>
<td><a class='btn btn-warning' title="Dəyiş" href='../admin/bloq_admin_edit.php?edit_post=<?php echo $post_id; ?>'><i class="fas fa-edit"></i></a></td>
<td><a class='btn btn-warning' title="Sil" href='../admin/bloq_admin_edit.php?edit_post=<?php echo $post_id; ?>'><i class="bi bi-trash3-fill"></i></a></td>
</tr>

</tbody>
<?php }?>
</table>

</form>




</div>
    <!--    //sayfalamak-->
  
</div>



</div>




</div>
</div>
<!-- End of Main Content -->




<!-- Footer -->
<?php
include 'inc/Footer.php';
?>

<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
<i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<?php
include 'inc/modal.php';
?>
<!-- Bootstrap core JavaScript-->
<?php
include 'inc/JavaScript.php';
?>

</body>

</html>