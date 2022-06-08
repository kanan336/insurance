<!DOCTYPE html>
<html lang="en">
<!--//new sigortix adminnn-->
<?php
include 'inc/head.php';
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
<div class="wrapper">
<!-- Sidebar Holder -->

<!-- Page Content Holder -->
<div id="content">
<!--navmeny-->
  
<div class="line">
    <a href="xidmetler.php"><h1>Xidmetler</h1></a>
  
    


<br>
<div>
    
</div>
<?php

if(isset($_GET['save'])){

$edit_ser_name=$_GET['edit_ser_name'];
$edit_name_en=$_GET['edit_name_en'];
$edit_details_az=$_GET['edit_details_az'];
$ser_details_en=$_GET['ser_details_en'];
$edit_short_name=$_GET['edit_short_name'];
$edit_icon=$_GET['edit_icon'];
$ser_name_ru=$_GET['ser_name_ru'];
$ser_details_ru=$_GET['ser_details_ru'];
$edit_favcolor=$_GET['edit_favcolor'];
$edit=$_GET['editid'];

$edit_time= date("Y-m-d h:i:sa");

$sql_edit_xidmet="UPDATE type_of_insurance SET " ;
$sql_edit_xidmet.="name_of_insurance='{$edit_ser_name}', ";
$sql_edit_xidmet.="coverage_insurance='{$edit_details_az}', ";
$sql_edit_xidmet.="short_name_ins='{$edit_short_name}', ";
$sql_edit_xidmet.="icons_color='{$edit_favcolor}', ";
$sql_edit_xidmet.="icons='{$edit_icon}', ";


$sql_edit_xidmet.="editdate='{$edit_time}' ";

$sql_edit_xidmet.= "WHERE id = {$edit} " ;


$update_result= mysqli_query($con, $sql_edit_xidmet);

  if($update_result){
//          $_SESSION['message'] = "Dəyişiklik edildi";
        echo '<div class="alert alert-success" role="alert">
  <h1 class="alert-heading text-center">!!!!!!!!!!!!!!!!</h1>
  <h1 class="text-center"><b>Dəyişiklik uğurla həyat keçdi.</b></h1>
  <hr>
  <h1 class="alert-heading text-center">!!!!!!!!!!!!!!!!</h1>
</div>';
          $page = "xidmetler.php";
    echo '<meta http-equiv="Refresh" content="2;' . $page . '">';  
      } else {
          echo 'No editt'. mysqli_error($con);    
      }

    
    
    
}
















?>

</div>
<br>
<br>
<br>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">


</div>
      <!--    _______________________________________________________    -->  
      
        
    </div>
</div>
<div class="line">



</div>



</div>
</div>

<!-- Content Row -->


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