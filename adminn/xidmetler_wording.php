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
<h1><a href="xidmetler.php" >Xidmətlərimiz</a></h1>
<!-- Content Row -->
<h3>Xidmətlər üçün qaydaların əlavə edilməsi</h3>
<form action="" method="post">
        
<table class="table table-hover table-responsive-md">
    
          <?php
          $title_page='Xidmetlerimiz';
           $_SESSION['url']=$url=$_SERVER['REQUEST_URI'];
    echo "<script type='text/javascript'>toastr.info('$title_page')</script>"; //tostr
//box gonderilmesi tododa lazim olacaq
if(isset($_POST['checkBoxArray'])){
    
    foreach($_POST['checkBoxArray'] as $chekBoxValue){
        
        $bulk_options=$_POST['bulk_options'];
        
        switch ($bulk_options){
            //case 1
case 'delete':

$query="DELETE FROM type_of_ins_wordings WHERE w_id='{$chekBoxValue}' ";
$update_to_delete_status= mysqli_query($con,$query);
if($update_to_delete_status){

echo '<div class="alert alert-success" role="alert">
 Uğurla silindi!
</div>';

$page = "xidmetler_wording.php";
echo '<meta http-equiv="Refresh" content="3;' . $page . '">';  
} else {
echo 'Noo'. mysqli_error($con);    
}


break;
            

//case 3 
        }
    }
}
 ?>
    <style>
        #bulkOptionsContainer{
            padding: 1px;
        }
    </style>
<div class="container-fluıd">
<div class="row">

    

    
       

<div class="col-md-12">
<div class="d-grid gap-2 col-4 ">

    <div class="col-6">
        <a class="btn btn-success" href="xidmetler_wording_add.php" role="button">Xidmət üçün qayda əlavə edin</a>
</div>
    

<br>


</div>
    <br>
</div>
    <div class="container-fluid">
<div class="row">
<div class="col">
<div id="bulkOptionsContainer" class=""  >
<select class="form-control" name="bulk_options" id="">
<option value="">Variantları seçin və tətbiq et düyməsini klikləyin</option>
<option value="delete">Seçilən sətiri silin</option>
</select>  
</div> 
</div>
<div class="col">
<input type="submit" name="submit" class="btn btn-success mb-2" value="Tətbiq et">
</div>

<div class="col">
    <a href="#addWordingModal" class="btn btn-success" data-toggle="modal"><i class="material-icons"></i> <span>Qayda əlavə edin</span></a>
<a href="JavaScript:void(0);" class="btn btn-danger" id="delete_multiple"><i class="material-icons"></i> <span>Delete</span></a>
    
</div>
</div>
</div>
    

<hr>

</div>
</div>
  <thead>
    <tr>
    <th><input id="selectAllbox" type="checkbox"></th>
    <th scope="col">S/N</th>
    <th scope="col">Sığorta növü</th>
    <th scope="col">Qaydanın adı</th>
    <th scope="col">Əlavə edilən fayl</th>
    <th scope="col">Tarix</th>
    <th scope="col">OP</th>
    </tr>

  </thead>
  <?php
// services table uchun script
$sql_ser = "SELECT * FROM `type_of_ins_wordings` ";
$result_ser = mysqli_query($con, $sql_ser);
$c=1;
while ($row_ser = mysqli_fetch_array($result_ser)){
$id_wording=$row_ser['w_id'];
$id_insurance=$row_ser['ins_id'];
$name_wording=$row_ser['name_w'];
$file_w=$row_ser['file_w'];
$date_wording=$row_ser['date_w'];

?>
  <tbody>
    <tr>
<td><input class='checkBoxes' value="<?php echo $id_wording; ?>" type='checkbox' name='checkBoxArray[]'></td>
    <th scope="row"><?php echo $c++; ?></th>
    <td><?php echo $id_insurance; ?></td>   
    <td><?php echo $name_wording; ?></td>
    <td><?php echo $file_w; ?></td>
    <td><?php echo $date_wording; ?></td>
      <td colspan="2">
          <i class="fas fa-trash-alt"></i><a></a>
      
         
        <a href="#editEmployeeModal" class="edit" data-toggle="modal">
        <i class="fas fa-edit" data-toggle="tooltip" 
        data-id="<?php echo $id_wording; ?>"
        data-name="<?php echo $id_insurance; ?>"
        title="Edit"></i>
        </a>
      </td>
 
    </tr>
        <?php }?>
  </tbody>
</table>
        
</form>


    

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

<!-- Add Modal HTML -->
<div id="addWordingModal" class="modal fade">
<div class="modal-dialog">
<div class="modal-content">
      <p id="result"></p>
<form id="user_form" method="POST" enctype="multipart/form-data">
<div class="modal-header">						
<h4 class="modal-title">Qaydalar əlavə edin</h4>
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
</div>
<div class="modal-body">					
<div class="form-group">
 <select class="form-control" name="ins_cat_id" id="ins_cat_id">
  <option selected="" value='0'>Sığorta növünü seçin</option>
    <?php        
    $query="SELECT * FROM type_of_insurance";
    $select_categories= mysqli_query($con,$query);
    while($row= mysqli_fetch_assoc($select_categories)){
    $cat_id=$row['id'];
    $cat_title=$row['name_of_insurance'];
    echo "<option value='{$cat_id}'>{$cat_title}</option>";
    }
    ?> 
    </select>
</div>
<div class="form-group">
<label  for="exampleFormControlTextarea1"><b>Qaydanın adı</b></label>
<textarea id="name_w" name="name_w" class="form-control"  rows="4"></textarea>
</div>
<div class="form-group">
<label for="exampleFormControlInput1"><b>Qaydanı əlavə edin</b></label>
<input type="file" onchange="file_load(this)" class="form-control" name="img" id="img" placeholder="">
<div id="myDIV"><img width="20%" id="zz">
    <p name="filetype" id='filetype'></p>
</div>
</div>
					
</div>
<div class="modal-footer">
<input type="hidden" value="1" name="type">
<input type="button" class="btn btn-default" data-dismiss="modal" value="İmtina">
<button type="button" class="btn btn-success" id="btn-add">Əlavə edin<span class="myLoad"></span></button>
</div>
</form>
    
<div id="err"></div>
</div>
</div>
</div>

<!-- Edit Modal HTML -->
<div id="editEmployeeModal" class="modal fade">
<div class="modal-dialog">
<div class="modal-content">
<form id="update_form">
<div class="modal-header">						
<h4 class="modal-title">Edit User</h4>
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
</div>
<div class="modal-body">
    <input type="text" id="id_u" name="id" class="form-control" required>					
<div class="form-group">
<label>Name</label>
<input type="text" id="name_u" name="name" class="form-control" required>
</div>

					
</div>
<div class="modal-footer">
<input type="hidden" value="2" name="type">
<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
<button type="button" class="btn btn-info" id="update">Update</button>
</div>
</form>
</div>
</div>
</div>



<!-- Bootstrap core JavaScript-->
<?php
include 'inc/JavaScript.php';
?>

<script>
    
     
    
    function file_load(o){
    zz.src=URL.createObjectURL(o.files[0]);
    var html = document.getElementById("img");
    filetype.innerHTML=ext+' - file ';
    }
        
    $(document).ready(function() {
                 
    $(document).on('click','#btn-add',function(e) {       
    $(".myLoad").html('<span class="spinner-border spinner-border-sm"\n\
    role="status" aria-hidden="true"></span>');
    $("#submit").prop("disabled",false);
        
    var formData = new FormData($("#user_form")[0]);
    var filetype=document.getElementById("filetype");
    var img = $('#img').val();
    var ext = img.substr(img.lastIndexOf('.') + 1);
    filetype.innerHTML=ext;
        
    if(ext=='jpg' || ext=='png'){
    alert("Seçdiyiniz faylın formatı PDF və ya word olmalıdır.");
    location.reload();
    return false;
    }
        
    $.ajax({
    url: "save_ajax.php",
    type: "POST",
    data : formData,
    processData: false,
    contentType: false,
    beforeSend: function() {


    },
    success: function(dataResult){


    $("#user_form").trigger('reset');

    $("#result").html('<div class="alert alert-success text-center">Ugurla elave edildi</div>');

    setTimeout(function(){
    $('#addWordingModal').modal('hide');
    location.reload();
    },2500);

    },
    error: function(xhr, ajaxOptions, thrownError) {
    console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
    }
    });

    });
    
    $(document).on('click','.update',function(e) {
    alert('dddddddd');

    });
 
    });    

</script>

</body>

</html>