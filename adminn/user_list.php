<!DOCTYPE html>
<html lang="en">

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
<h2 class="h3 mb-0 text-gray-800">İstifadəçilər Siyahı</h2>
<br>
<!-- Content Row -->


</div>
<!-- /.container-fluid -->

<div class="container">
   <table id="example" class="table hover" style="width:100%">
        <thead>
            <tr>
                <th>-</th>
                <th>Adı Soyadı</th>
                <th>İstifadəçi adı</th>
                <th>Email</th>
                <th>Səlahiyyətlər/Əlavə etmə</th>
                <th>Səlahiyyətlər/Redaktə etmə</th>
                <th>Səlahiyyətlər/Silmə etmə</th>
                <th>Əməliyyat</th>
            </tr>
        </thead>
        <tbody>
                     <?php
         
    $sql = "SELECT * FROM `users` WHERE user_type='user' ";
    $result_user= mysqli_query($con,$sql);
    $i=1;
    if($result_user){
        echo'';
        } else {
            echo 'NOO'. mysqli_error($con);    
        }
        
         
        while($row= mysqli_fetch_assoc($result_user)){
       
        $id_user=$row['id'];
        $username=$row['username'];
        $email=$row['email'];
        $user_type=$row['user_type'];
        $name=$row['name'];
        $phone=$row['phone'];
        $profession=$row['profession'];
        $work_link=$row['work_link'];
        $skills=$row['skills'];
        $photo=$row['photo'];
        $date=$row['trn_date'];
        $user_status= $row['status'];
        $active_status= $row['active'];
        $last_online= $row['lastOnline'];
       $couldadd=$row['couldadd'];
       $couldedit=$row['couldedit'];
       $coulddelete=$row['coulddelete'];
      
    ?> 
            <tr>
                <td><img src="./img/<?php echo $photo; ?>" class="img-fluid" alt="..."></td>
                <td class="text-center" ><?php echo $name; ?></td>
                <td class="text-center"><?php echo $username; ?></td>
                <td class="text-center"><?php echo $email; ?></td>
                <td class="text-center" ><?php 
                if( $couldadd ==='1'){
                    echo '<i class="bi bi-check2-circle"> </i>';
                } else {
                    echo 'Yetki yoxdur!';
                } ?></td>
                <td class="text-center" ><?php  
                        if( $couldedit ==='1'){
                    echo '<i class="bi bi-check2-circle"> </i>';
                } else {
                    echo 'Yetki yoxdur!';
                }; ?></td>
                <td class="text-center" ><?php  
                         if($coulddelete ==='1'){
                    echo '<i class="bi bi-check2-circle"> </i>';
                } else {
                    echo 'Yetki yoxdur!';
                };
                        ?></td>
                <td class="text-center">
                    <a href="user_edit.php?edt=<?php echo $id_user;?>&blc=1"><i class="bi bi-pencil-square"></i></a>
                    <a href=""><i class="bi bi-trash3-fill"></i></a>
                
                </td>
            </tr>
             <?php }?>
        </tbody>
     
    </table>
 
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

<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>

</body>

</html>