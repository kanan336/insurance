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
<h2 class="h3 mb-0 text-gray-800">Admin Əlavə Edin</h2>
<!-- Content Row -->
<br>
<a href="add_admin.php" type="button" class="btn btn-primary" >Əlavə edin</a>

</div>
<!-- /.container-fluid -->

<div class="container">
<div class="line">
   <!-- /.add user from here-------------------------------------------------------------------------- -->
   <?php

if(isset($_POST['create_user'])){
            
            $username= mysqli_real_escape_string($con,$_POST['username']);
            $user_email=$_POST['email'];
            $user_type=$_POST['user_type'];
            $user_password= md5($_POST['password']);
            $name=$_POST['name'];
            $telefon=$_POST['phone'];
            $profession=$_POST['profession'];
            $work_link=$_POST['work_link'];
            $skills=$_POST['skills'];
            $date=date('Y-m-d H:i:m');
         
            
        $sql_u = "SELECT * FROM users WHERE username='$username'";
        $sql_e = "SELECT * FROM users WHERE email='$user_email'";
        $res_u = mysqli_query($con,$sql_u);
        $res_e = mysqli_query($con, $sql_e);

            
            
//$user_password = password_hash($user_password, PASSWORD_BCRYPT, array('cost' => 10));
if(mysqli_num_rows($res_u) > 0){
    echo '<div class="container"> <div class="alert alert-danger col-sm" role="alert">
 <h4 class="text-center">İstifadəçi adı mövcuddur!</h4>
</div></div>';
        
    
}elseif(mysqli_num_rows($res_e) > 0){
echo '<div class="container"> <div class="alert alert-danger col-sm" role="alert">
 <h4 class="text-center">E-mail mövcuddur!</h4>
</div></div>';

  $page = "admin_list.php";
    echo '<meta http-equiv="Refresh" content="2;' . $page . '">'; 
    
} else {
    
    //bosh olarsa bu script yazilir

if(!empty($username) && !empty($user_email) && !empty($user_password)&& !empty($name)&& !empty($telefon)&& !empty($profession)&& !empty($work_link)&& !empty($skills)&& !empty($skills) ){
$query = "INSERT INTO `users` (`username`, `email`, `user_type`, `password`, `name`, `phone`, `profession`, `work_link`, `skills`, trn_date)";

$query .= "VALUES('{$username}','{$user_email}','{$user_type}','{$user_password}','{$name}','{$telefon}','{$profession}','{$work_link}','{$skills}','{$date}' )";
            
         $create_user_query= mysqli_query($con,$query);
         $the_user_idd= mysqli_insert_id($con);
        if($create_user_query){
            
   $_SESSION['message'] = "<div class='alert alert-success' role='alert'>
<h3> USER Əlavə edildi!(ID{$the_user_idd})</h3>
</div>";
  $page = "admin_list.php";
    echo '<meta http-equiv="Refresh" content="2;' . $page . '">'; 
        } else {
        echo"noo".mysqli_error($con);    
        }
//         header("Location:add_user.php");
//         confirmQuery($create_user_query); // funksiyada error uchun yaradilib proyektde istifade edile biler
    
         
         
         
} else {
echo '<div class="alert alert-danger" role="alert">
<h3> Sahələr boş göndərilə bilməz!</h3>
</div>';     
}

    
    
    
} 

            
            



}


?>
<form action="" method="POST" enctype="multipart/form-data">
    
<?php if(isset($_SESSION['message'])): ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong><?php echo $_SESSION['message']; ?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
    
    <?php endif; ?>
  
    
    
<div class="form-row">
<div class="form-group col-md-6">
<label for="inputEmail4">Adı Soyadı</label>
<input type="text" class="form-control" name="name" id="inputEmail4" placeholder="...">
</div>
<div class="form-group col-md-6">
<label for="inputPassword4">Telefon</label>
<input type="text" name="phone"  class="form-control" id="inputPassword4" placeholder="..">
</div>

<div class="form-group col-md-6">
<label for="inputEmail4">Work_link</label>
<input type="text" class="form-control" name="work_link"  id="inputEmail4" placeholder="...">
</div>
<div class="form-group col-md-6">
<label for="inputPassword4">Bacarıqlar</label>
<input type="tel" class="form-control" name="skills"  id="inputPassword4" placeholder="...">
</div>

<div class="form-group col-md-6">
<label for="inputEmail4">Profession</label>
<input type="text" class="form-control" name="profession"  id="inputEmail4" placeholder="...">
</div>


<div class="form-group col-md-6">
<label for="inputEmail4">Rolu</label>
<select class="form-control" name="user_type"> 
<option value="user">Rolu seçin</option> 
<option value="admin">admin</option>
<option value="user">user</option>
<option value="wt">wt</option>
</select>
</div>
<div class="form-group col-md-6">
<label for="inputPassword4">İstifadəçi adı</label>
<input type="text" name="username" class="form-control" id="inputPassword4" placeholder="...">
</div>
    
<div class="form-group col-md-6">
<label for="inputPassword4">Şifrə</label>
<input type="text" name="password" class="form-control" id="inputPassword4" placeholder="...">
</div>   


    
    <div class="form-group col-md-6">
<label for="inputPassword4">Email</label>
<input type="text" name="email" class="form-control"  id="inputPassword4" placeholder="...">
</div>   
    
<div class="form-group col-md-12">

    <button type="submit" name="create_user" class="btn btn-success">Yadda saxla</button>
<button type="button" class="btn btn-danger">Imtina</button>
</div>      

</div>
        
</form>


    
    
    
    
    
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

<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>

</body>

</html>