<!DOCTYPE html>
<html lang="en">
<!--//new sigorta3YAZ adminnn-->
<?php
include 'inc/head.php';
?>

<?php
if(isset($_GET['delete'])){
    
    $delete_id=$_GET['delete'];
    
    $query_del="DELETE FROM type_of_insurance WHERE id=$delete_id ";
   $delete_modal= mysqli_query($con,$query_del);
    
    
}

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
<h1 class="h3 mb-0 text-gray-800">Sigorta3Yaz</h1>
<a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>

<!-- Content Row -->

<?php
include 'inc/contentRow.php';

include 'inc/delete_modal.php';

//xidmetler uchun
?>
<!-- Content Row -->
<h1>Xidmətlərimiz</h1>
<!-- Content Row -->
     
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

$query="DELETE FROM type_of_insurance WHERE id='{$chekBoxValue}' ";
$update_to_delete_status= mysqli_query($con,$query);
if($update_to_delete_status){

echo '<div class="alert alert-success" role="alert">
 Uğurla silindi!
</div>';

$page = "xidmetler.php";
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
    <div class="row gap-1 mb-4">
        <div class="col-2">
             <a class="btn btn-success" href="xidmetler_add.php" role="button">Xidmət əlavə edin</a>
        </div>
        <div class="col-2">
            <a class="btn btn-success" href="xidmetler_wording_add.php" role="button">Xidmət üçün qayda əlavə edin</a>
        </div>
    </div>

    <br>
</div>
    <div class="container-fluid">
<div class="row">
<div class="col">
<div id="bulkOptionsContainer" class=""  >
<select class="form-control" name="bulk_options" id="">
    <option selected="" value="">Variantları seçin və tətbiq et düyməsini klikləyin</option>
<option value="delete">Seçilən sətiri silin</option>
</select>  
</div> 
</div>
<div class="col">
<input type="submit" name="submit" class="btn btn-success mb-2" value="Tətbiq et">
</div>

<div class="col">
</div>
</div>
</div>
    

<hr>

</div>
</div>
  <thead class="thead-dark ">
    <tr>
    <th><input id="selectAllbox" type="checkbox"></th>
    <th scope="col">S/N</th>
    <th scope="col">İD</th>
    <th scope="col">Xidmətin adı</th>
    <th scope="col">Şəkil</th>
    <th scope="col">Təminatın adı</th>
    <th scope="col">Xidmətin qısa adı</th>
    <th scope="col">Xidmətin simvolu</th>
    <th scope="col">Tarix</th>
    <th class=" text-center" colspan="2" scope="col">OP</th>
   
    </tr>

  </thead>
  <?php
// services table uchun script
$sql_ser = "SELECT * FROM `type_of_insurance` ";
$result_ser = mysqli_query($con, $sql_ser);
$c=1;


while ($row_ser = mysqli_fetch_array($result_ser)){
$id_ser=$row_ser['id'];
$name_ser=$row_ser['name_of_insurance'];
$detail_ser= substr($row_ser['coverage_insurance'],0,100);
$image=$row_ser['photo_ins_type'];
$date_ser=$row_ser['date_ins_type'];
$icons=$row_ser['icons'];
$short_name_ins=$row_ser['short_name_ins'];

?>
  <tbody>
    <tr>
<td><input class='checkBoxes' value="<?php echo $id_ser; ?>" type='checkbox' name='checkBoxArray[]'></td>
    <th scope="row"><?php echo $c++; ?></th>
    <?php echo "<td> <a href='xidmetler_edit.php?bax={$id_ser}'> $id_ser </td>" ;?>
    <?php echo "<td> <a href='xidmetler_edit.php?bax={$id_ser}'> $name_ser </td>" ;?>
       
   
    <td><a href='xidmetler_edit.php?bax=<?php echo $id_ser; ?>'><img width='100' src='../adminn/img/xidmet/<?php echo $image; ?>' alt='image'></a></td>
    <td><?php echo $detail_ser; ?></td>
    <td><?php echo $short_name_ins; ?></td>
    <td><?php echo $icons; ?></td>
    
    <td><?php echo $date_ser; ?></td>
   
  
<td><a class='btn btn-warning ' title="Dəyiş" href='xidmetler_edit.php?bax=<?php echo $id_ser;?>'><i class="fas fa-edit"></i></a></td>
<td><a class='btn btn-warning delete_link' title="Sil" rel="<?php echo $id_ser;?>" href='javascript:void(0)'><i class="bi bi-trash3-fill"></i></a></td>
      
   
 
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
<!-- Bootstrap core JavaScript-->
<?php
include 'inc/JavaScript.php';
?>

</body>

</html>