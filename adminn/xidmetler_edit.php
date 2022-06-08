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
if(isset($_GET['bax'])){
    
$edit_ser_id=$_GET['bax'];



// services table uchun script
$sql_ser = "SELECT * FROM `type_of_insurance` WHERE id=$edit_ser_id ";
$result_ser = mysqli_query($con, $sql_ser);
$c=1;
////var_dump($sql_ser);
////print_r($sql_ser);
//
//$fetchh= mysqli_fetch_array($result_ser);
//
////print_r($fetchh);
//    //var_export($fetchh);

   while ($row_ser = mysqli_fetch_array($result_ser)){
$id_ser=$row_ser['id'];
$name_ser=$row_ser['name_of_insurance'];
$detail_ser= $row_ser['coverage_insurance'];
$image=$row_ser['photo_ins_type'];
$date_ser=$row_ser['date_ins_type'];
$icons=$row_ser['icons'];
$short_name_ins=$row_ser['short_name_ins'];
$icons_color=$row_ser['icons_color'];
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

            <form action="xidmetler_edit_edit.php" method="GET" enctype="multipart/form-data">


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
    <label for="exampleFormControlInput1"><b>Xidmətin adı (dəyişmək)</b></label>
    <textarea id="" name="edit_ser_name" class="form-control quill-editor" placeholder=""  rows="3"><?php echo $name_ser;?></textarea>    
    </div>  
    </div>
        
    <div class="col">
    <div class="form-group col-12">
    <label for="exampleFormControlInput1"><b>Name of the service(change)</b></label>
    <input id="" type="text" class="form-control" name="edit_name_en" id="exampleFormControlInput1" placeholder="">
    </div> 
    </div>
        
    </div>
      
<!--    _______________________________________________________    -->

<!--    _______________________________________________________    -->
<div class="row"> 
<div id="" class="col">
    <div  class="form-group col-12">
<label  for="exampleFormControlTextarea1"><b>Xidmət ətraflı (dəyişmək)</b></label>
<!--<textarea id="editor" class="form-control" name="ser_detal" id="exampleFormControlTextarea1" rows="10" cols="30" ></textarea>-->
<textarea id="editor" name="edit_details_az" class="form-control quill-editor" placeholder=""  rows="8"><?php echo $detail_ser;?></textarea>

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
<!--<div class="form-group col-6">
<label for="exampleFormControlInput1"><b>Şəkil əlavə edin</b></label>
<input type="file" class="form-control" name="img" id="exampleFormControlInput1" placeholder="">
</div>-->

<div class="form-group col-6">
<label for="exampleFormControlTextarea1" class="form-label">Xidmət üzrə <br>əlavə edilən şəkil</label>
<a data-toggle="tooltip" data-placement="top" title="Şəkili dəyişin" href="xidmetler_change_photo.php?chngp=<?php echo $id_ser; ?>">
<img id="prpht" src="img/xidmet/<?php echo $image; ?>" class="card-img-top" alt="<?php echo $image; ?>"></a>
  
<style>
      #prpht{
        border: 1px solid #ddd;
        border-radius: 4px;
        padding: 5px;
        width: 150px;
        }
 
    #prpht:hover{
      box-shadow:0 0 2px 1px rgba(0, 140, 186, 0.5);
    }  
  </style>
</div>


<div class="col">
    <div class="form-group col-4">
    <label for="exampleFormControlInput1"><b>Xidmətin qısa adı </b></label>
    <textarea id="" name="edit_short_name" class="form-control quill-editor" placeholder=""  rows="3"><?php echo $short_name_ins;?></textarea>    
    </div>  
    </div>

<div class="col">
<div class="form-group col-4">
<label for="exampleFormControlTextarea1" class="form-label">Xidmət üzrə <br>əlavə edilən simvol</label>
<i style='color:<?php echo $icons_color;?>' class='<?php echo $icons;?>'></i>
</div>


<div class="col">
    <div class="form-group col-6">
        <label for="exampleFormControlInput1"><b>Simvolun kodunu dəyişin </b></label> <a target="_blank" href="https://fontawesome.com/icons">Lazım olan simvolları axtarın</a>
    <textarea id="" name="edit_icon" class="form-control quill-editor" placeholder=""  rows="3"><?php echo $icons;?></textarea>    
    </div>  
    </div>
    
    <div class="col">
    <div class="form-group col-6">
        <label for="exampleFormControlInput1"><b>Simvolun kodunun rəngini seçin </b></label>
        <input type="color" id="favcolor" name="edit_favcolor" value="<?php echo $icons_color;?>"><br><br>
    </div>  
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

<input hidden="" type="text" value="<?php echo $id_ser; ?>" name="editid" >

</div>
</div>

<div class="col">

<!--    boshhh-->
    
</div>      
</div>

<div class="form-group col-6">
    <button type="submit"  name="save" class="btn btn-primary">Yadda Saxla</button>        
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