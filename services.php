<!doctype html>
<html lang="en">

<?php
include 'inc/head.php';
?>

<body>

<?php
include 'inc/header.php';
?>

<main>
    <div style=" height: 125px;" class="headdservices">
        
    </div>

<!--end carusel-->

<!--card star-->
<?php
//include 'inc/xidmetler.php';
//?>

<?php



$sql_type_ins = "SELECT * FROM `type_of_insurance`   ";

$result = mysqli_query($con, $sql_type_ins);

// Check connection from func
confirmQuery($result);



?>

<div class="container  mt-5">
<div class="row">
<div class="col-lg-8">
<div class="container">
  <div class="row">
      
   <?php
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row_ins_type = mysqli_fetch_assoc($result)) {
    $id=$row_ins_type['id'];
    $name_of_ins_type=$row_ins_type['name_of_insurance'];
    $photo_ins_type=$row_ins_type['photo_ins_type'];
    $short_name_ins=$row_ins_type['short_name_ins'];

?>
      <style>
          .cardproduct:hover {
              
         
              border-radius: 50px;
              
          }
          
      </style>
      
    <div class="col-sm-4 mb-4 cardproduct">
        <a style=" text-decoration: none;" href="post_details.php?blq=<?php echo $post_id; ?>">
<div style=" height: 300px;" class="card bg-danger text-white cardproduct">
<!--  <img style="width: 15.5rem; height: 30rem;" src="adminn/img/xeberler/<?php echo $photo_ins_type;?>" class="card-img" alt="...">-->
  
<img style="width: 15.7rem; height: 15rem;" alt="Card image cap" class="card-img-top embed-responsive-item " src="adminn/img/xidmet/<?php echo $photo_ins_type;?>" />
  
  <div class="card-img-overlay">
  </div>
  <div class="card-footer text-center">
        <?php echo $short_name_ins; ?>
  </div>
</div>   
        </a>
  
        
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



<!--card end-->


<!--request star-->



<?php
include 'inc/specialofer.php';
?>
 

<!--request End-->

<!--<news-->

<!--card end-->
<!--news end-->

<!--..our personalsss-->

<!--..our personalsss-->

<!--request star-->



<!--request End-->

<!--<worked insurance companu-->
<?php
include 'inc/sigortashirketleri.php';
?>





<!--END work insurance  -->

<!-- ================ contact section start ================= -->

<?php
include 'inc/contact.php';
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
