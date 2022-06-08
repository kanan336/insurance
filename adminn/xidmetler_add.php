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
    <a href="xidmetler.php"><h1>XİDMƏTLƏRİMİZ</h1></a>
    <h4>Aşağıdakı xanaları doldurun</h4>
    


<br>
<div>
    
</div>
<?php
if(isset($_POST['ser_xidmet'])){

$ser_name_az=$_POST['ser_name'];
$ser_name_en=$_POST['ser_name_en'];
$ser_name_ru=$_POST['ser_name_ru'];
$ser_details_az=$_POST['ser_details_az'];
$ser_details_en=$_POST['ser_details_en'];
$ser_details_ru=$_POST['ser_details_ru'];

//------------------------------------------------rus

//$short_detail_ser=$_POST['short_detal'];
//$short_detail_ser_en=$_POST['short_detal_en'];

$ins_image=$_FILES['img']['name'];
$ins_image_temp=$_FILES['img']['tmp_name'];
$uploaded=move_uploaded_file($ins_image_temp, "img/xidmet/$ins_image");

$icons=$_POST['icon_ins'];
$favcolor=$_POST['favcolor'];
$short_name_ins=$_POST['short_name_ins'];

$insert_sql = "INSERT INTO `type_of_insurance` ";
$insert_sql .= "( name_of_insurance , coverage_insurance, photo_ins_type, icons, icons_color,short_name_ins ) VALUES ";
$insert_sql .= "('{$ser_name_az}','{$ser_details_az}', '{$ins_image}','{$icons}','{$favcolor}','{$short_name_ins}'  ) ";


$insert_query= mysqli_query($con, $insert_sql); 

if($insert_query){

$sucsess=$_SESSION['message'] = "Ugurla elave edildi";
$page = "xidmetler.php";
echo '<meta http-equiv="Refresh" content="5;' . $page . '">';  
} else {
   
$errror_insert=$_SESSION['message'] = "noooooo insert".$insert_sql .'<br>'.  mysqli_error($con);
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

<form action="" method="POST" enctype="multipart/form-data">
<?php if(isset($_SESSION['message'])) :?>
<?php
echo @$errror_insert;
echo "<h1>.{@$sucsess}. </h1>";
?>


<?php else:?> 
<?php endif;?>
<?php unset($_SESSION['message']); ?>


<div class="row">
    <div class="col">
       <h2 class="text-center" style="background-color: blue; color: white;" >Azərbaycan dilində</h2> 
    </div>
    
    <div class="col">
       <h2 class="text-center" style="background-color: blue; color: white;" >İngilis dilində</h2> 
    </div>
</div>
    

    <div class="row">
        
    <div class="col">
    <div class="form-group col-12">
    <label for="exampleFormControlInput1"><b>Xidmətin adı</b></label>
    <textarea id="" name="ser_name" class="form-control"  rows="4"></textarea>
    </div>  
    </div>
        
    <div class="col">
    <div class="form-group col-12">
    <label for="exampleFormControlInput1"><b>Name of the service</b></label>
    <input id="" type="text" class="form-control" name="ser_name_en" id="exampleFormControlInput1" placeholder="">
    </div> 
    </div>
        
    </div>
    
    
<!--    _______________________________________________________    -->

<!--    _______________________________________________________    -->
<div class="row"> 
<div id="" class="col">
    <div  class="form-group col-12">
<label  for="exampleFormControlTextarea1"><b>Xidmət ətraflı</b></label>
<!--<textarea id="editor" class="form-control" name="ser_detal" id="exampleFormControlTextarea1" rows="10" cols="30" ></textarea>-->
<textarea id="editor1" name="ser_details_az" class="form-control"  rows="4"></textarea>

</div>
</div>
    
  

<div class="col">
<div class="form-group col-12">
    <label  for="exampleFormControlTextarea1"><b>Service details</b>(cümlənin sonunda ;| simvollarını əlavə edin)</label>
<!--<textarea id="editor" class="form-control" name="ser_detal_en" id="exampleFormControlTextarea1" rows="10" cols="30" ></textarea>-->
<textarea name="ser_details_en" class="form-control" id="" rows="4"></textarea>

</div>
</div>      
</div>
<!--    _______________________________________________________    -->
<div class="form-group col-6">
<label for="exampleFormControlInput1"><b>Şəkil əlavə edin</b></label>
<input type="file" class="form-control" name="img" id="exampleFormControlInput1" placeholder="">
</div>

<div class="col">
    <div class="form-group col-4">
    <label for="exampleFormControlInput1"><b>Xidmətin qısa adı </b></label>
    <textarea id="" name="short_name_ins" class="form-control quill-editor" placeholder=""  rows="3"></textarea>    
    </div>  
    </div>



<div class="col">
    <div class="form-group col-6">
        <label for="exampleFormControlInput1"><b>Simvolun kodunu əlavə edin </b></label> <a target="_blank" href="https://fontawesome.com/icons">Lazım olan simvolları axtarın</a>
    <textarea id="" name="icon_ins" class="form-control quill-editor" placeholder=""  rows="3"></textarea>    
    </div>  
    </div>
<div class="col">
    <div class="form-group col-6">
        <label for="exampleFormControlInput1"><b>Simvolun kodunun rəngini seçin </b></label>
   <input type="color" id="favcolor" name="favcolor" value="#ff0000"><br><br>
    </div>  
    </div>


<div class="row">
    <div class="col">
       <h2 class="text-center" style="background-color: blue; color: white;" >Rus dilində</h2> 
    </div>
    
    <div class="col">
       <h2 class="text-center" style="background-color: blue; color: white;" >XXXX dilində</h2> 
    </div>
</div>


<div class="row">
        
     <div class="col">
    <div class="form-group col-12">
    <label for="exampleFormControlInput1"><b>Название услуги</b></label>
    <input type="text" name="ser_name_ru" class="form-control" name="ser_name_ru" id="exampleFormControlInput1" placeholder="">
    </div>  
    </div>
        
    <div class="col">
<!--    <div class="form-group col-12">
    <label for="exampleFormControlInput1"><b>Name of the service</b></label>
    <input type="text" class="form-control" name="ser_name_en" id="exampleFormControlInput1" placeholder="">
    </div> -->
    </div>
        
    </div>

<div class="row"> 
<div class="col">
<div class="form-group col-12">
<label  for="exampleFormControlTextarea1"><b>Детали услуги</b>(cümlənin sonunda ;| simvollarını əlavə edin)</label>
<!--<textarea id="editor" class="form-control" name="ser_detal" id="exampleFormControlTextarea1" rows="10" cols="30" ></textarea>-->
<textarea class="form-control" name="ser_details_ru" id="exampleFormControlTextarea1" rows="4"></textarea>


</div>
</div>

<div class="col">

<!--    boshhh-->
    
</div>      
</div>

<div class="form-group col-6">
<button type="submit" name="ser_xidmet" class="btn btn-primary">Yadda Saxla</button>        
</div>

</form> 
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