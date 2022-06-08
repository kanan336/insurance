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
    <a href="xidmetler.php"><h1>Xəbərlər/Bloq</h1></a>
  
    


<br>
<div>
    
</div>
<?php

if(isset($_GET['edit_post'])){

$edit_postid=$_GET['edit_postid'];
$edit_post_title=$_GET['edit_post_title'];
$edit_post_author=$_GET['edit_post_author'];
$edit_posts_status=$_GET['edit_posts_status'];
$edit_post_catogery_id=$_GET['edit_post_catogery_id'];
$edit_post_user=$_GET['edit_post_user'];
$edit_post_tags=$_GET['edit_post_tags'];
$edit_post_image=$_GET['edit_post_image'];
$edit_post_date=$_GET['edit_post_date'];
$edit_post_image1=$_GET['edit_post_image1'];
$edit_post_content=$_GET['edit_post_content'];

$edit_time= date("Y-m-d h:i:sa");

$sql_edit_xidmet="UPDATE posts SET " ;
$sql_edit_xidmet.="post_title='{$edit_post_title}', ";
$sql_edit_xidmet.="post_author='{$edit_post_author}', ";
$sql_edit_xidmet.="posts_status='{$edit_posts_status}', ";
$sql_edit_xidmet.="post_tags='{$edit_post_tags}', ";
$sql_edit_xidmet.="post_catogery_id='{$edit_post_catogery_id}', ";
$sql_edit_xidmet.="post_image='{$edit_post_image}', ";
$sql_edit_xidmet.="post_image2='{$edit_post_image1}', ";
$sql_edit_xidmet.="post_content='{$edit_post_content}', ";

$sql_edit_xidmet.="edit_date_post='{$edit_time}' ";

$sql_edit_xidmet.= "WHERE post_id = {$edit_postid} " ;


$update_result= mysqli_query($con, $sql_edit_xidmet);

  if($update_result){
//          $_SESSION['message'] = "Dəyişiklik edildi";
        echo '<div class="alert alert-success" role="alert">
  <h1 class="alert-heading text-center">!!!!!!!!!!!!!!!!</h1>
  <h1 class="text-center"><b>Dəyişiklik uğurla həyat keçdi.</b></h1>
  <hr>
  <h1 class="alert-heading text-center">!!!!!!!!!!!!!!!!</h1>
</div>';
          $page = "posts.php";
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