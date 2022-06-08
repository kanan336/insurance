<?php



$sql_type_ins = "SELECT * FROM `posts`   ";

$result = mysqli_query($con, $sql_type_ins);

// Check connection from func
confirmQuery($result);



?>

<div class="container mb-0 content-row">

<h3 class="xidtitle" >
<div data-aos="zoom-in"
data-aos-easing="ease-in-out-quart"
data-aos-duration="1500">
<a style="color:white; text-decoration:none;" href="./post_all.php"><strong>XƏBƏRLƏR/BLOQ</strong></a>

</div>

</h3>    


<section class="bg-light pt-5 pb-5 shadow-sm">
<div class="container">

<div class="row">
<!--ADD CLASSES HERE d-flex align-items-stretch-->
<div class="tender"> 
<!-- card star          _____________-->

<?php
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
$post_date= date('d.m.Y h:i',strtotime ($row_p['post_date']));
$post_time= date('d.m.Y h:i',strtotime ($row_p['post_time']));
$post_content= substr($row_p['post_content'],0,100);
$post_tags=$row_p['post_tags'];
$post_comments_count=$row_p['post_comments_count'];
$posts_status=$row_p['posts_status'];
$read_count=$row_p['read_count'];



?>
<div class="col-lg-4 mb-3 d-flex align-items-stretch">
<div style=" height: 450px;" class="card">

<a href="post_details.php?blq=<?php echo $post_id; ?>" ><img style="width: 21.5rem; height: 15rem;" alt="Card image cap" class="card-img-top embed-responsive-item" src="adminn/img/xeberler/<?php echo $post_image;?>" /></a>
<div class="card-body d-flex flex-column">
<h5 class="card-title"><?php echo $post_title;?></h5>

</div>
<div class="card-footer">
<div class="d-flex justify-content-around">
<div style=" align-items: right;" class="clearfix">
<a class="btn btn-outline-primary float-left btncarus" href="post_details.php?blq=<?php echo $post_id; ?>" role="button">Ətraflı</a>

</div>                    
</div>

</div>
</div>
</div>
<?php
}
} else {
echo "0 results";
}


?>      
<!-- card end          _____________-->

</div>



</div>
</div>
</section>


</div>