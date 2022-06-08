<!DOCTYPE html>
<html lang="en">
<!--//new sigortix adminnn-->
<?php
include 'inc/head.php';
?>

<?php
if(isset($_GET['chngp'])){
    
    $edit_ser_id=$_GET['chngp'];
    
    // services table uchun script
$sql_ser = "SELECT * FROM `type_of_insurance` WHERE id=$edit_ser_id ";
$result_ser = mysqli_query($con, $sql_ser);
$c=1;
while ($row_ser = mysqli_fetch_array($result_ser)){
$id_ser=$row_ser['id'];
$name_ser=$row_ser['name_of_insurance'];
$detail_ser= $row_ser['coverage_insurance'];
$image=$row_ser['photo_ins_type'];
$date_ser=$row_ser['date_ins_type'];
$icons=$row_ser['icons'];
$short_name_ins=$row_ser['short_name_ins'];
}
}

if(isset($_POST['save'])){
   
$current_image_name = $image;
$ins_image=$_FILES['img1']['name'];

if(!empty($ins_image)){
$ins_image_temp=$_FILES['img1']['tmp_name'];
$uploaded=move_uploaded_file($ins_image_temp, "img/xidmet/$ins_image"); 
    
} else {
    $ins_image=$current_image_name;
}


$sql_update_profile="UPDATE `type_of_insurance` SET `photo_ins_type`='$ins_image' WHERE id='$edit_ser_id' ";

$update_result= mysqli_query($con, $sql_update_profile);

if(!$update_result){
    echo 'Error'. mysqli_error($con);
} else {
$_SESSION['message'] = "Dəyişiklik edildi";
$page = "xidmetler.php";
echo '<meta http-equiv="Refresh" content="2;' . $page . '">'; 
}


}




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

include 'inc/delete_modal.php';
?>
<!-- Content Row -->
<!-- Content Row -->

<div class="line">
    <h1>Xidmətin şəklinin dəyişdirilməsi - <?php echo $name_ser; ?></h1>
<a class="btn btn-danger" href="xidmetler.php" role="button"><i class="fa fa-home"></i> Xidmətlər</a>
    
</div>
    

<form action="" method="post" enctype="multipart/form-data" >
    
  
<div class="form-row">
 
<div class="form-group col-md-6">
<label for="exampleFormControlTextarea1" class="form-label"></label>
<a href="xidmetler.php"><img src="img/xidmet/<?php echo $image; ?>" class="card-img-top" alt="img/xidmet/<?php echo $image; ?>"></a>
</div>
   
<div class="form-group col-md-12">
    
<div class="form-group col-md-6">
<label for="formFile" class="form-label">Şəkli dəyiş</label>
<input class="form-control" name="img1" type="file" id="formFile">
</div>


<button type="submit" name="save" class="btn btn-success">Dəyiş</button>
<a href='admin.php' ><button type="button" class="btn btn-danger">Imtina</button></a>
</div>      

</div>
        
</form>

</div>
<!-- /.container-fluid -->

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