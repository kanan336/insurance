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
<div class="col-md-12 "><h1>Bloq_Admin_Post_Əlavə edin</h1></div>
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
if(isset($_POST['add_post'])){
    

$add_post_catogery_id=$_POST['add_post_catogery_id'];
$add_post_title=$_POST['add_post_title'];
$add_post_author=$_POST['add_post_author'];
$add_post_user=$_POST['add_post_user'];
$add_post_date=$_POST['add_post_date'];

$add_post_image=$_FILES['add_post_image']['name'];
$add_post_image_temp=$_FILES['add_post_image']['tmp_name'];

$uploaded=move_uploaded_file($add_post_image_temp, "img/xeberler/$add_post_image");

$add_post_image1=$_FILES['add_post_image1']['name'];
$add_post_image_temp1=$_FILES['add_post_image1']['tmp_name'];

$uploaded1=move_uploaded_file($add_post_image_temp1, "img/xeberler/$add_post_image1");



$add_post_content=$_POST['add_post_content'];
$add_post_tags=$_POST['add_post_tags'];
$add_posts_status=$_POST['add_posts_status'];

 $session_user=$_SESSION['username'];

If(!empty($add_post_title)){
    
$sql_add_post .="INSERT INTO `posts` ( `post_catogery_id`, `post_title`, `post_author`, `post_user`, `post_date`, `post_image`, `post_image2`, `post_content`, `post_tags` ) VALUES "
. "('{$add_post_catogery_id}', '{$add_post_title}', '{$add_post_author}','{$session_user}','{$add_post_date}','{$add_post_image}','{$add_post_image1}', '{$add_post_content}','{$add_post_tags}' ) ";




//$sql_add_post .="INSERT INTO `posts` ( `post_catogery_id`, `post_title`, `post_author`, `post_user`, `post_date`, `post_time`, `post_image`, `post_content`, `post_tags`, `draft` ) VALUES"
//$sql_add_post .= "( '{$add_post_catogery_id}', '{$add_post_title}', '{$add_post_author}','{$add_post_user}','{$add_post_date}','{$add_post_image}','{$add_post_content}','{$add_post_tags}','{}' ) ";

$post_result= mysqli_query($con, $sql_add_post);
$the_post_idd= mysqli_insert_id($con);
       
       if($post_result){
    echo "<div class='alert alert-success' role='alert'>
    <h2> Əlavə edildi! (ID{$the_post_idd})</h2>
    </div>";
  
   //səhifəni yenilemek uchun super script
$page = "posts.php";
echo '<meta http-equiv="Refresh" content="2;' . $page . '">';   
       } else {
           echo 'NOOO'. mysqli_error($con);
       }
    
} else {
    echo 'Sahələr boş ola bilməz';    
}

    
}


?>
    
<form action="" method="post" enctype="multipart/form-data">

<div class="container-fluid">

<!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
<div class="row">
      
<div class="col-6 col-md-4">
          
<div class="form-group">
    <label for="exampleInputEmail1">Postun başlığı</label>
    <input name="add_post_title" type="text" class="form-control ckeditor"  aria-describedby="emailHelp">
    <small class="form-text text-muted">Postun başlığını daxil edin.</small>
</div>
          
<div class="form-group">
    <label for="exampleInputEmail1">Postun müəllifi</label>
    <input name="add_post_author" type="text" class="form-control"  aria-describedby="emailHelp">
    <small  class="form-text text-muted">We'll never share your email with anyone else.</small>
</div> 
          
          
<div class="form-group">
    <label for="exampleFormControlSelect1">Postun statusu</label>
    <select name="add_posts_status" class="form-control" id="exampleFormControlSelect1">
     <option value="1">Publish</option>
     <option value="0">Draft</option>
    </select>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
</div>
          
</div>
      
<div class="col-6 col-md-4">
          
<div class="form-group">
    <label for="exampleFormControlSelect1">Kateqoriya</label>
    <select class="form-control" name="add_post_catogery_id" id="">
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
    <input readonly="" name="add_post_user" value="<?php echo $_SESSION['username'];?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
</div> 

          
<div class="form-group">
    <label for="exampleInputEmail1">Post_tag</label>
    <input name="add_post_tags" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
</div> 
           
          
</div>
      
<div class="col-6 col-md-4">
       
<div class="form-group">
    <label for="exampleInputEmail1">Postun şəkili</label>
    <input name="add_post_image" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
</div>
          
          
<div class="form-group">
    <label for="exampleInputEmail1">Postun_tarixi</label>
    <input name="add_post_date" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
</div> 
          
     <div class="form-group">
    <label for="exampleInputEmail1">Postun Mətnini şəkili</label>
    <input name="add_post_image1" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
</div>     
          
</div>
      
      
</div>
    <div class="row">
          
     <div class="col-md-12">
              
<div class="form-group">
    <label for="exampleInputEmail1">Postun mətni</label>
    <textarea name="add_post_content" class="form-control" id="editor1" cols="30" rows="10"></textarea>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
</div> 
              
          </div>
   
  </div>
  
  <div class="row">
          
     <div class="col-md-12">
              
<div class="form-group">
    <button type="submit" name="add_post" class="btn btn-primary">Əlavə et</button>
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