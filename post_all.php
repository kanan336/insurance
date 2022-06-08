<!doctype html>
<html lang="en">

<?php
include 'inc/head.php';
include 'modal/header_modal.php';
?>

<body>

<?php
include 'inc/header.php';
?>

<main>
<!--Carusel-->
<?php
//include 'inc/carousel.php';
//?>

<!--end carusel-->

<!--card star-->
<br>
<br>
<br>
<br>
<br>
<?php

$sql_type_ins = "SELECT * FROM `posts` ORDER BY `posts`.`post_date` DESC";

$result = mysqli_query($con, $sql_type_ins);

// Check connection from func
confirmQuery($result);

if (mysqli_num_rows($result) > 0) {
// output data of each row

?>



<div class="container  mt-5">
<div class="row">
<div class="col-lg-8">
<div class="container">
  <div class="row">
      
      <?php 
      while($row_p = mysqli_fetch_assoc($result)) {
$post_id=$row_p['post_id'];
$post_catogery_id=$row_p['post_catogery_id'];
$post_title=$row_p['post_title'];
$post_image=$row_p['post_image'];
$post_image1=$row_p['post_image2'];
$post_author=$row_p['post_author'];
$post_user=$row_p['post_user'];
$post_date= date('d.m.Y ',strtotime ($row_p['post_date']));
$post_time= date('d.m.Y h:i',strtotime ($row_p['post_time']));
$post_content= $row_p['post_content'];
$post_tags=$row_p['post_tags'];
$post_comments_count=$row_p['post_comments_count'];
$posts_status=$row_p['posts_status'];
$read_count=$row_p['read_count'];



      ?>
    <div class="col-sm-4 mb-4">
        <a style=" text-decoration: none;" href="post_details.php?blq=<?php echo $post_id; ?>">
<div style=" height: 330px;" class="card bg-danger text-white">
<!--  <img style="width: 15.5rem; height: 30rem;" src="adminn/img/xeberler/<?php echo $post_image;?>" class="card-img" alt="...">-->
  
<img style="width: 15.7rem; height: 15rem;" alt="Card image cap" class="card-img-top embed-responsive-item" src="adminn/img/xeberler/<?php echo $post_image;?>" />
  
  <div class="card-img-overlay">
  </div>
  <div class="card-footer text-center">
        <?php echo $post_title; ?>
  </div>
</div>   
        </a>
  
        <div class="card-footer border-primary">
      <div class="row">
    <div class="col-lg-6">
      <br>
    <span class="glyphicon glyphicon-time"><?php echo $post_date; ?></span> 
    </div>
    <div class="col-lg-6">
    <br>
    <i style="margin-left:50px;" class="bi bi-eye"> <?php echo $read_count; ?></i> 
    </div>
    </div>

      
  </div> 
    </div>
   <?php 
   }
} else {
echo 'No post here';    
}
   ?>
  </div>
</div>

</div>

    <div class="col-lg-4">
        <!--___________________Sidebar Bloggg-->
<?php
include 'inc/sidebar_bloq.php';
?>
<!--___________________Sidebar Bloggg end-->
    </div>

    
</div>
</div>





<?php
//include 'inc/xidmetler.php';
?>
<!--card end-->


<!--request star-->


<?php
include 'inc/specialofer.php';
?>


<!--request End-->

<!--<news-->
<?php
//include 'inc/bloq.php';
?>
<!--card end-->
<!--news end-->

<!--..our personalsss-->
<?php
//include 'inc/personal.php';
?>
<!--..our personalsss-->
<br>
<!--request star-->

<?php
//include 'inc/memnuniyyet.php';
?>

<!--request End-->

<!--<worked insurance companu-->
<?php
include 'inc/sigortashirketleri.php';
?>





<!--END work insurance  -->

<!-- ================ contact section start ================= -->

<?php
//include 'inc/contact.php';
?>
<!-- ================ contact section end ================= --> 

<?php
include 'inc/footer.php';
?>

</main>

<?php
include 'inc/scripts.php';
?>
</body>

</html>
