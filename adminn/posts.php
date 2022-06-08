<!DOCTYPE html>
<html lang="en">
<!--//new sigortix adminnn-->
<?php
include 'inc/head.php';
include 'inc/delete_modal.php';
?>

<?php
if(isset($_GET['delete'])){
    
    $delete_id=$_GET['delete'];
    
   $query_del="DELETE FROM posts WHERE post_id=$delete_id ";
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
<h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
<a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>

<!-- Content Row -->

<?php
include 'inc/contentRow.php';
?>
<!-- Content Row -->

<!-- Content Row -->


</div>
<!-- /.container-fluid -->
<div class="line">
<div class="container-fluid">
<div class="row">
<div class="col-md-12 "><h1>Xəbərlər/Bloq (aktiv olanlar)</h1></div>
<br>
</div>

<div class="row">
<div class="table-responsive">
<?php
//box gonderilmesi tododa lazim olacaq
if(isset($_POST['checkBoxArray'])){

foreach($_POST['checkBoxArray'] as $chekBoxValue){

$bulk_options=$_POST['bulk_options'];

switch ($bulk_options){
//case 1   

case 'delete':

$query="DELETE FROM posts WHERE post_id='{$chekBoxValue}' ";
$update_to_delete_status= mysqli_query($con,$query);
if($update_to_delete_status){

 echo "<div class='alert alert-danger' role='alert'>
  <h2 class='text-center'> Silindi!!! </h2>
</div>";
 //səhifəni yenilemek uchun super script
$page = $_SERVER['PHP_SELF'];
echo '<meta http-equiv="Refresh" content="2;' . $page . '">'; 
} else {
echo 'Noo'. mysqli_error($con);    
}

break;

case '1':

$query="UPDATE posts SET posts_status=1 WHERE post_id='{$chekBoxValue}' ";
$update_post= mysqli_query($con,$query);
if($update_post){

 
 echo '<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
  </symbol>
  <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
  </symbol>
  <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
  </symbol>
</svg>';
 echo '<div class="alert alert-success d-flex align-items-center" role="alert">
  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
  <div>
   <h4 class="alert-heading">Yeniləndi!</h4>
  </div>
</div>';
 //səhifəni yenilemek uchun super script
$page = $_SERVER['PHP_SELF'];
echo '<meta http-equiv="Refresh" content="4;' . $page . '">'; 
} else {
echo 'Noo'. mysqli_error($con);    
}

break;

case '0':

$query="UPDATE posts SET posts_status=0 WHERE post_id='{$chekBoxValue}' ";
$update_post= mysqli_query($con,$query);
if($update_post){

 echo "<div class='alert alert-succses' role='alert'>
  <h2 class='text-center'> Yeniləndi!!! </h2>
</div>";
 //səhifəni yenilemek uchun super script
$page = $_SERVER['PHP_SELF'];
echo '<meta http-equiv="Refresh" content="2;' . $page . '">'; 
} else {
echo 'Noo'. mysqli_error($con);    
}

break;



}

}

}

?>
<form action="" method="post">
<table class="table table-hover">
<!---style bulk -->
<style>
#bulkOptionsContainer{
padding: 1px;

}
</style>

<div class="container-fluid">
        
    <div class="row">
        
    <div class="row gap-1 mb-2">
        <div id="bulkOptionsContainer" class="col-4">
  <select class="form-control" name="bulk_options" id="">
    <option style="background-color:red;" value="">Variantları seçin və tətbiq et düyməsini klikləyin</option>
    <option value="delete">Sil</option>
    <option value="1">Publish</option>
    <option value="0">Draft</option>
    
</select>
        </div>
        <div class="col-2">
       <input  type="submit" name="submit" class="btn btn-success" value="Tətbiq et">
   
        </div>
      
    </div>
<!--        ___________________________________________________________-->

        <div class="row gap-1 mb-2">
        <div id="bulkOptionsContainer" class="col-4">
            <a class="btn btn-success" href="posts_add.php"><i class="fas fa-plus-circle "></i> Post Əlavə edin</a>
        </div>
        <div class="col-2">
   
   
        </div>
        <div class="col-3">

        </div>
    </div>

 
</div>
    
    
    
    
</div>

<thead class="thead-dark ">
<tr>
<th><input id="selectAllbox" type="checkbox"></th>
<th class="th_post" scope="col">#id</th>
<th scope="col">Kat_id</th>
<th scope="col">Postun başlığı</th>
<th scope="col">Postun şəkili</th>
<th scope="col">Postun müəllifi</th>
<th scope="col">Postu_daxil edən istifadəçi</th>
<th class="th_post" scope="col">Postun tarixi</th>
<th class="th_post" scope="col">Postun vaxtı</th>
<th class="th_post" scope="col">Postun mətni</th>
<th class="th_post" scope="col">Postun mətn Şəkli</th>
<th class="th_post" scope="col">Taglar</th>
<th class="th_post" scope="col">Postun comment.sayı</th>
<th class="th_post" scope="col">Postun statusu</th>
<th class="th_post" scope="col">Oxunma sayı</th>
  <th class=" text-center" colspan="2" scope="col">OP</th>
<style>
    .th_post{
        text-align: center;
     
    }
</style>
</tr>
</thead>
 <?php
 
  //Sehifelemk uchun script
@$page= empty(strip_tags($_GET["page"])) ? 1 : $_GET["page"];
$limit=5;
$star_limit=($page*$limit)-$limit;

$total_records_query= mysqli_query($con,"SELECT COUNT(*) FROM posts");
$row_total_rec= mysqli_fetch_row($total_records_query);
$total_records=$row_total_rec[0]; // toplam data sayi

 $Page_numbers= ceil($total_records/$limit);
 
 
  $sql = "SELECT * FROM `posts`  ORDER BY `posts`.`post_time` DESC LIMIT $star_limit,$limit ";
  $result_posts= mysqli_query($con, $sql);
  
  if(!$result_posts){
      echo 'No Posts DB'. mysqli_error($con);
  }
  
    while ($row_p= mysqli_fetch_assoc($result_posts)){
      
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
<tbody>
<tr>
<td><input class='checkBoxes' value="<?php echo $post_id; ?>" type='checkbox' name='checkBoxArray[]'></td>
<td class="th_post"><?php echo $post_id;?></td>
<td class="th_post"><?php echo $post_catogery_id;?></td>
<td class="th_post"><?php echo $post_title;?></td>
<td class="th_post"><a href="" title="delete" class="delete" onclick="return confirm('Are you sure you want to delete this item')"> <img width="100%" alt="image" src="img/xeberler/<?php echo $post_image;?>"></a></td>
<td class="th_post"><?php echo $post_author;?></td>
<td class="th_post"><?php echo $post_user;?></td>
<td class="th_post"><?php echo $post_date;?></td>
<td class="th_post"><?php echo $post_time;?></td>
<td class="th_post"><?php echo $post_content;?></td>
<td class="th_post"><a href="" title="delete" class="delete" onclick="return confirm('Are you sure you want to delete this item')"> <img width="100%" alt="image" src="img/xeberler/<?php echo $post_image1;?>"></a></td>
<td class="th_post"><?php echo $post_tags;?></td>
<td class="th_post"><?php echo $post_comments_count;?></td>
<td class="th_post"><?php echo $posts_status;?></td>
<td class="th_post"><?php echo $read_count;?></td>


<td><a class='btn btn-warning' title="Dəyiş" href='posts_edit_edit.php?edit_post=<?php echo $post_id; ?>'><i class="fas fa-edit"></i></a></td>

<td><a class='btn btn-warning delete_post' title="Sil" rel="<?php echo $post_id;?>" href='javascript:void(0)'><i class="bi bi-trash3-fill"></i></a></td>
</tr>

</tbody>
<?php }?>
</table>

</form>


<?php

if(isset($_GET['delete_sec_img'])){
   
    $delete_part=$_GET['delete_sec_img'];
    
$update_query="UPDATE posts SET post_image2 = null WHERE post_id=$delete_part ";

$resul_update= mysqli_query($con, $update_query);

if($update_query){
   echo "<div class='alert alert-success' role='alert'>
    <h2> Silindi!!!!</h2>
    </div>";
    //səhifəni yenilemek uchun super script
    $page = "./bloq_admin.php";
    echo '<meta http-equiv="Refresh" content="1;' . $page . '">';  
} else {

    echo 'Silinmedi'. mysqli_error($con);
    
}
    
    
}


if(isset($_GET['delete_sec_img1'])){
   
    $delete_part1=$_GET['delete_sec_img1'];
    
$update_query1="UPDATE posts SET post_image = null WHERE post_id=$delete_part1 ";

$resul_update1= mysqli_query($con, $update_query1);

if($update_query1){
   echo "<div class='alert alert-success' role='alert'>
    <h2> Silindi!!!!</h2>
    </div>";
    //səhifəni yenilemek uchun super script
    $page = "./bloq_admin.php";
    echo '<meta http-equiv="Refresh" content="1;' . $page . '">';  
} else {

    echo 'Silinmedi'. mysqli_error($con);
    
}
    
    
}


?>


</div>
    <!--    //sayfalamak-->
    <div class="row justify-content-center">
        <nav aria-label="Page navigation example">
  <ul class="pagination">
      <?php
      
      if($page > 1){
      $newPage=$page-1;
         
 echo '<li class="page-item"><a class="page-link" '
          . 'href="posts.php?page='.$newPage.'">Geri</a></li>';
      }else{
          echo '<li class="page-item disabled"><a class="page-link" '
          . 'href="javascript:void(0)">Geri</a></li>';
      }
      
//      ________
      
      $record=2;
      
      for($i=$page-$record; $i<=$page+$record; $i++){
          if($i>0 and $i<=$Page_numbers){
              if($i == $page){
                         
           echo '<li class="page-item active"><a class="page-link" '
          . 'href="posts.php?page='.$i.'">'.$i.'</a></li>';    
              } else {
                      
           echo '<li class="page-item"><a class="page-link" '
          . 'href="posts.php?page='.$i.'">'.$i.'</a></li>';       
        }
      
        }
      }
      
           
      if($page != $Page_numbers){
      $newPage=$page+1;
         
 echo '<li class="page-item"><a class="page-link" '
          . 'href="../admin/bloq_admin.php?page='.$newPage.'">Sonraki</a></li>';
      }else{
          echo '<li class="page-item disabled"><a class="page-link" '
          . 'href="javascript:void(0)">Sonraki</a></li>';
      }
      
      
      
      ?>
 
   
  </ul>
</nav>
    </div>
   <!--    //sayfalamak-->


</div>



</div>




</div>
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