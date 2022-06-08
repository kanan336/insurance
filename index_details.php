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

if(isset($_GET['det'])){
    
    $det_id=$_GET['det'];
    
}
$sql_type_ins = "SELECT * FROM `type_of_insurance` WHERE id=$det_id ";

$result = mysqli_query($con, $sql_type_ins);

// Check connection from func
confirmQuery($result);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row_ins_type = mysqli_fetch_assoc($result)) {
    $id=$row_ins_type['id'];
    $name_of_ins_type=$row_ins_type['name_of_insurance'];
    $coverage_of_ins_type=$row_ins_type['coverage_insurance'];
    $photo_ins_type=$row_ins_type['photo_ins_type'];
  }
}
?>



 <div class="container  mt-5">
     <div class="row">
       <div class="col-lg-8">

           <article class="mb-4">
        <!-- Post header-->
        <header class="mb-4">
            <!-- Post title-->
            <h1 style="text-align-last: center; text-align: center; " class="fw-bolder mb-1 "><?php echo $name_of_ins_type; ?></h1>
            <!-- Post meta content-->
                       <!-- Post categories-->
            
        </header>
        <!-- Preview image figure-->
        <figure class="mb-4 text-center"><img class="img-fluid rounded" src="adminn/img/xidmet/<?php echo $photo_ins_type;?>" alt="..." /></figure>
        <!-- Post content-->
        <section class="mb-5">
            <p style="text-align: justify;
  text-justify: inter-word;" class="fs-5 mb-4"><?php echo $coverage_of_ins_type; ?></p>
            
        </section>
        <a class="badge bg-secondary text-decoration-none link-light" href="#!">Online müraciət edin</a>
            <a class="badge bg-secondary text-decoration-none link-light" href="#!">Freebies</a>
            <a class="btn btn-outline-primary" href="#" role="button">Link</a>
            <a class="btn btn-primary" href="#" role="button">Link</a>
           
    </article>
         </div>
         <div class="col-lg-4"> 
             
        <?php
        include 'inc/qanunvericilik_sidebar.php';
        include 'inc/sidebar_bloq.php';
        ?>
             
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
