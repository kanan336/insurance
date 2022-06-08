<?php



$sql_type_ins = "SELECT * FROM `type_of_insurance`   ";

$result = mysqli_query($con, $sql_type_ins);

// Check connection from func
confirmQuery($result);



?>

<div class="container mb-0 content-row">
     
     <h3 class="xidtitle" >
         <div data-aos="zoom-in"
     data-aos-easing="ease-in-out-quart"
     data-aos-duration="1500">
<a style=" color: white; text-decoration: none;  " href="./services.php"><strong>XIDMƏTLƏRİMİZ</strong></a>
         </div>
         
     </h3>    
    
      
    <section class="bg-light pt-5 pb-5 shadow-sm">
  <div class="container">
    
    <div class="row">
      <!--ADD CLASSES HERE d-flex align-items-stretch-->
      <div class="t1"> 
<!-- card star          _____________-->

<?php
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row_ins_type = mysqli_fetch_assoc($result)) {
      $id=$row_ins_type['id'];
    $name_of_ins_type=$row_ins_type['name_of_insurance'];
    $photo_ins_type=$row_ins_type['photo_ins_type'];

?>
       <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                <div style=" height: 450px;" class="card">
<!--                        <img src="adminn/img/xidmet/<?php echo $photo_ins_type;?>" class="card-img-top1" alt="Card Image">-->
    <img style="width: 21.5rem; height: 15rem;" alt="Card image cap" class="card-img-top embed-responsive-item" src="adminn/img/xidmet/<?php echo $photo_ins_type;?>" />
          <div class="card-body d-flex flex-column">
            <h5 class="card-title"><?php echo $name_of_ins_type;?></h5>
            
          </div>
             <div class="card-footer">
     <div class="d-flex justify-content-around">
 <div style=" align-items: center;" class="clearfix">
     <a class="btn btn-outline-primary float-left btncarus" href="index_details.php?det=<?php echo $id; ?>" role="button">Ətraflı</a>
     <a class="btn btn-outline-primary float-right btncarus" href="#" role="button">Online Əldə edin</a>
     

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