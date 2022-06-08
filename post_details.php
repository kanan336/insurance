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

if(isset($_GET['blq'])){

$blq_id=$_GET['blq'];

}

$view_query="UPDATE posts SET read_count = read_count + 1 WHERE post_id = $blq_id ";
$send_query = mysqli_query($con, $view_query);

if(!$send_query){
    die('query fail count');
}



$sql_type_ins = "SELECT * FROM `posts` WHERE post_id=$blq_id ";

$result = mysqli_query($con, $sql_type_ins);

// Check connection from func
confirmQuery($result);

if (mysqli_num_rows($result) > 0) {
// output data of each row
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


}
} else {
echo 'No post here';    
}
?>



<div class="container  mt-5">
<div class="row">
<div class="col-lg-8">

<article class="mb-4">
<!-- Post header-->
<header class="mb-4">
<!-- Post title-->
<h1 style="text-align-last: center; text-align: center; " class="fw-bolder mb-1 ">
    <?php echo $post_title; ?></h1>
<!-- Post meta content-->
       <!-- Post categories-->

</header>
<!-- Preview image figure-->
<figure class="mb-4 text-center">
    <img class="img-fluid rounded" src="adminn/img/xeberler/<?php echo $post_image;?>" alt="..." /></figure>
    
     <div class="card-footer ">
    
 <div class="row  bg-danger">
         
 <div class="col-sm-6 text-center text-white "> <i class="bi bi-eye"> <?php echo $read_count; ?></i> </div>
            
 <div class="col-sm-6  text-center text-white "> <i style="" class="bi bi-calendar3 "> <?php echo $post_date; ?></i> </div>
         
     </div>
      
  </div> 



<!-- Post content-->
<section class="mb-5">
<p style="text-align: justify;
text-justify: inter-word;" class="fs-5 mb-4"><?php echo $post_content; ?></p>

</section>

<div class="btn-group">
<button class="btn btn-secondary" type="button"><i class="bi bi-share-fill"> Paylaş</i></i></button>
<button class="btn btn-secondary" type="button"><i class="bi bi-whatsapp"></i></button>
<button class="btn btn-secondary" type="button"><i class="bi bi-facebook"></i></button>
<button class="btn btn-secondary" type="button"><i class="bi bi-envelope"></i></i></button>  
</div>




</article>
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
