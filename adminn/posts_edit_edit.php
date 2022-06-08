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
<div class="col-md-12 "><h1>Bloq_Admin_Post_Dəyişin</h1></div>
</div>

<div class="row">
<!---style bulk -->
<style>
#bulkOptionsContainer{
padding: 5px;
width: 150px;
}
</style>

<div class="container-fluid">

<div class="row">
<div id="bulkOptionsContainer" class="col-2">
    <a class="btn btn-success" href="posts.php"><i class="fas fa-rss"></i> Postlar</a>
   </div>
    <div id="bulkOptionsContainer" class="col-2">
    <a class="btn btn-success" data-toggle="modal" data-target="#add_xerc_cat" href="add_category.php"><i class="fas fa-rss"></i> Kateqoriya əlavə edin</a>
   
    </div>
    
</div>
</div>

</div>

    <br>
<?php
if(isset($_GET['edit_post'])){
    
    $edit_post_id=$_GET['edit_post'];
    
$sql = "SELECT * FROM `posts`  WHERE post_id=$edit_post_id ";
  $result_posts= mysqli_query($con, $sql);
  
  if(!$result_posts){
      echo 'No Posts DB'. mysqli_error($con);
  }
  
    while ($row_p= mysqli_fetch_assoc($result_posts)){
      
$post_id=$row_p['post_id'];
$post_catogery_id=$row_p['post_catogery_id'];
$post_title=$row_p['post_title'];
$post_image=$row_p['post_image'];
$post_image1=$row_p['post_image2'];
$post_author=$row_p['post_author'];
$post_user=$row_p['post_user'];
$post_date= date('d.m.Y h:i',strtotime ($row_p['post_date']));
$post_time= date('d.m.Y h:i',strtotime ($row_p['post_time']));
$post_content= $row_p['post_content'];
$post_tags=$row_p['post_tags'];
$post_comments_count=$row_p['post_comments_count'];
$posts_status=$row_p['posts_status'];
$read_count=$row_p['read_count'];
    
    }
    
}
?>
    
    <form action="posts_edit.php" method="get" enctype="multipart/form-data">

<div class="container-fluid">

<!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
<div class="row">
      
<div class="col-6 col-md-4">
          
<div class="form-group">
    <label for="exampleInputEmail1">Postun başlığı</label>
    <input name="edit_post_title" value="<?php echo $post_title; ?>" type="text" class="form-control ckeditor"  aria-describedby="emailHelp">
    <small class="form-text text-muted">Postun başlığını daxil edin.</small>
</div>
          
<div class="form-group">
    <label for="exampleInputEmail1">Postun müəllifi</label>
    <input name="edit_post_author" value="<?php echo $post_author; ?>" type="text" class="form-control"  aria-describedby="emailHelp">
    <small  class="form-text text-muted">We'll never share your email with anyone else.</small>
</div> 
          
          
<div class="form-group">
    <label for="exampleFormControlSelect1">Postun statusu</label>
    <select name="edit_posts_status" class="form-control" id="exampleFormControlSelect1">
        <option selected="" value="">Postun statusunu seçin</option>
        <option value="1">Saytda dərc et</option>
     <option value="0">Saytda dərc etmə</option>
    </select>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
</div>
          
</div>
      
<div class="col-6 col-md-4">
          
<div class="form-group">
    <label for="exampleFormControlSelect1">Kateqoriya</label>
    <select class="form-control" name="edit_post_catogery_id" id="">
          <option selected="" value='0'>Postun kateqoriyasını seçin</option>
      <?php        

$query="SELECT * FROM categories";

$select_categories= mysqli_query($con,$query);


while($row= mysqli_fetch_assoc($select_categories)){

$cat_id=$row['cat_id'];

$cat_title=$row['cat_title'];

echo "<option value='{$cat_id}'>{$cat_title}</option>";

}
?> 
    </select>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
</div>
          
<div class="form-group">
    <label for="exampleInputEmail1">Post_Istifadəçi</label>
    <input readonly="" name="edit_post_user" value="<?php echo $_SESSION['username'];?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
</div> 

          
<div class="form-group">
    <label for="exampleInputEmail1">Post_tag</label>
    <input name="edit_post_tags" value="<?php echo $post_tags; ?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
</div> 
           
          
</div>
      
<div class="col-6 col-md-4">
       
<div class="form-group">
    <label for="exampleInputEmail1">Postun şəkili</label>
    <input name="edit_post_image" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <img width="50%" alt="image" src="img/xeberler/<?php echo $post_image;?>">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
</div>
          
          
<div class="form-group">
    <label for="exampleInputEmail1">Postun_tarixi</label>
    <input name="edit_post_date" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
</div> 
          
     <div class="form-group">
    <label for="exampleInputEmail1">Postun Mətnini şəkili</label>
    <input name="edit_post_image1" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <img width="50%" alt="image" src="img/xeberler/<?php echo $post_image1;?>">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
</div>     
          
</div>
      
      
</div>
    <div class="row">
          
     <div class="col-md-12">
              
<div class="form-group">
    <label for="exampleInputEmail1">Postun mətni</label>
    <textarea name="edit_post_content" class="form-control" id="" cols="30" rows="10"><?php echo $post_content; ?></textarea>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    <input hidden="" name="edit_postid" value="<?php echo $post_id; ?>" type="text" >
</div> 
              
          </div>
   
  </div>
  
  <div class="row">
          
     <div class="col-md-12">
              
<div class="form-group">
    <button type="submit" name="edit_post" class="btn btn-success">Yadda saxla</button>
</div> 
              
</div>
   
</div> 

</div>
     </form> 

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