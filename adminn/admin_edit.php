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

<!-- Content Row -->

<h1 class="h3 mb-0 text-gray-800">Admin məlumatlar</h1>


<br>
<?php
if(isset($_GET['edta'])){
    $edtAdminIDD=$_GET['edta'];
    
$sql = "SELECT * FROM users WHERE id='$edtAdminIDD' ";
$result= mysqli_query($con,$sql);
if($result){
echo '';
} else {
echo 'sehv'. mysqli_error($con);
}


while($row= mysqli_fetch_assoc($result)){

$id=$row['id'];
$username=$row['username'];
$name=$row['name'];
$surname=$row['surname'];
$email=$row['email'];
$phone=$row['phone'];
$profession=$row['profession'];
$worklink=$row['work_link'];
$skills=$row['skills'];
$usertype=$row['user_type'];
$couldadd=$row['couldadd'];
$couldedit=$row['couldedit'];
$coulddelete=$row['coulddelete'];

} 
    
}
   

?>

<style>
    /* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}

/* Style the close button */
.topright {
  float: right;
  cursor: pointer;
  font-size: 28px;
}

.topright:hover {color: red;}
</style>
    
<div class="col-12">
    
    <div class="tab">
  <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">Şəxsi məlumatlar</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">Şifrəni dəyiş</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">LOG</button>
</div>
    
   <div id="London" class="tabcontent">
  <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
  
<div class="col-12">
    <br>
<!--edit shexsi melumatlar    -->
<?php
if(isset($_GET['editprofile'])){
    
  $editadminID=$_GET['edtuserid'];
    $session_user_id=$_SESSION['id'];
    $edit_name=$_GET['name'];
    $edit_surname=$_GET['surname'];
    $edit_email=$_GET['email'];
    $edit_profession=$_GET['profession'];
    $edit_skills=$_GET['skills'];
    $edit_phone=$_GET['phone'];
    $edit_work=$_GET['work'];
    $edit_user_type=$_GET['user_type'];
    
   $coul1=$_GET['coul1'];
   $coul2=$_GET['coul2'];
   $coul3=$_GET['coul3'];
    
    
    
    
    
    
    
    $sql_edit_profile="UPDATE users SET " ;
    $sql_edit_profile.="name='{$edit_name}', ";
    $sql_edit_profile.="email='{$edit_email}', ";
    $sql_edit_profile.="profession='{$edit_profession}', ";
    $sql_edit_profile.="phone='{$edit_phone}', ";
    $sql_edit_profile.="work_link='{$edit_work}', ";
    
    $sql_edit_profile.="user_type='{$edit_user_type}', ";
    
    $sql_edit_profile.="couldadd='{$coul1}', ";
    $sql_edit_profile.="couldedit='{$coul2}', ";
    $sql_edit_profile.="coulddelete='{$coul3}', ";
    
    $sql_edit_profile.="skills='{$edit_skills}', ";
    $sql_edit_profile.="surname='{$edit_surname}' ";
    
           
    //$query.= "post_date = now() " ;
    $sql_edit_profile.= "WHERE id = {$editadminID} " ;
    
    $sql_edit_querry= mysqli_query($con, $sql_edit_profile);
    
    if(!$sql_edit_querry){
        
        echo '$sql_edit_profile'. mysqli_error($con);
        
    } else {
     $_SESSION['message'] = "Dəyişiklik edildi";
          $page = "admin_list.php";
    echo '<meta http-equiv="Refresh" content="10;' . $page . '">';  
        
    }
}

?>
    
    
    
    
<?php if(isset($_SESSION['message'])): ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong><?php echo $_SESSION['message']; ?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
    
    <?php endif; ?>
<?php unset($_SESSION['message']); ?>
<form style="
      <?php
      
      if(isset($_GET['edta'])){
          echo 'display:block;';
      } else {
        echo 'display:none;';    
      }
      
      ?>
      " action="" method="get">

<div class="form-row">

<div class="form-group col-md-6">
<label for="inputEmail4">Ad</label>
<input type="text" class="form-control" value="<?php echo $name;?>" name="name" id="inputEmail4" placeholder="AD">
</div>

<div class="form-group col-md-6">
<label for="inputPassword4">Soyad</label>
<input type="text" name="surname" value="<?php echo $surname;?>" class="form-control"  placeholder="">
</div>

<div class="form-group col-md-6">
<label for="inputEmail4">Email</label>
<input type="email" class="form-control" name="email" value="<?php echo $email;?>" id="inputEmail4" placeholder="Email">
</div>

<div class="form-group col-md-6">
<label for="inputPassword4">Telefon</label>
<input type="tel" class="form-control" name="phone" value="<?php echo $phone;?>" id="inputPassword4" placeholder="Password">
</div>

<div class="form-group col-md-6">
<label for="inputEmail4">İxtisas</label>
<input type="text" class="form-control" name="profession" value="<?php echo $profession;?>" id="inputEmail4" placeholder="Email">
</div>

<div class="form-group col-md-6">
<label for="inputPassword4">İş yeri</label>
<input type="text" class="form-control" name="work" value="<?php echo $worklink;?>" id="inputPassword4" placeholder="Password">
</div>

<div class="form-group col-md-6">
<label for="inputEmail4">Bacarıqlar</label>
<input type="text" class="form-control" name="skills" value="<?php echo $skills;?>" id="inputEmail4" placeholder="Email">
</div>

    <div class="form-group col-md-6">
<label for="inputPassword4">İstifadəçi rolu</label>
<select class="form-control" name="user_type">
    <?php
    echo "<option value='$usertype'>$usertype</option>";
    ?>
<option value="user">User</option>
<option value="admin">Admin</option>
</select>
    
    </div> 
    
    <div class="form-group col-md-6">
<label for="inputPassword4">Səlahiyyət</label>

<div class="form-check">
    <?php
    if($couldadd==='1'){
      echo ' <input class="form-check-input" type="checkbox" name="coul1" value="0" id="flexCheckChecked" checked>';
    } else {
        echo '<input class="form-check-input" name="coul1" type="checkbox" value="1" id="flexCheckDefault">'; 
    }
    
    
    ?>
    
   
  <label class="form-check-label" for="flexCheckDefault">
Səlahiyyətlər/Əlavə etmə
               
</label>
</div>

<div class="form-check">
     <?php
    if($couldadd==='1'){
      echo ' <input class="form-check-input" type="checkbox" value="0" id="flexCheckChecked" checked>';
    } else {
        echo '<input class="form-check-input" name="coul1" type="checkbox" value="1" id="flexCheckDefault">'; 
    }
    
    
    ?>
    
    
    <input class="form-check-input" name="coul2" type="checkbox" value="1" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    Səlahiyyətlər/Redaktə etmə
  </label>
</div>

<div class="form-check">
    <input class="form-check-input" name="coul3" type="checkbox" value="1" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    Səlahiyyətlər/Silmə etmə
  </label>
</div>

    
    </div>  
    
    
    <div class="form-group col-md-6">
<!--<label for="inputPassword4">Edt user ID</label>-->
<input type="hidden" class="form-control" name='edtuserid' value="<?php echo $id;?>" id="" placeholder="Password">
</div>

<div class="form-group col-md-12">

    <button type="submit" name="editprofile" class="btn btn-success">Yadda saxla</button>

   <a href="admin_list.php" type="button" class="btn btn-danger" >Imtina</a>
</div>      

</div>
    
</form>

    




</p>
</div>

</div>
<!--//end tab1-->

<div id="Paris" class="tabcontent">
  <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
  <h3>Şifrəni dəyiş</h3>
  <div class="col-6">
      
<form action="update_password.php" method="GET" >

<div class="form-row p-3">
<!--              javascripti tabs.js- de-->
<div class="col-12">
<div class="input-group mb-3">
<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
</div>
<input type="password" value="" name="newPass" class="input form-control" id="password" placeholder="Yeni şifrəni daxil edin" required="true" aria-label="password" aria-describedby="basic-addon1" />
<div class="input-group-append">
<span class="input-group-text" onclick="password_show_hide();">
<i class="fas fa-eye" id="show_eye"></i>
<i class="fas fa-eye-slash d-none" id="hide_eye"></i>
</span>
</div>
</div>
</div>

<br>

<div class="col-12">
<div class="input-group mb-3">
<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
</div>
<input type="password" value="" name="newPassConfirm" class="input form-control" id="password1" placeholder="Təkrar şifrəni daxil edin" required="true" aria-label="password" aria-describedby="basic-addon1" />
<div class="input-group-append">
<span class="input-group-text" onclick="password_show_hide();">
<i class="fas fa-eye" id="show_eye1"></i>
<i class="fas fa-eye-slash d-none" id="hide_eye1"></i>
</span>
</div>
</div>
</div>

<div class="col-12">
<div class="input-group mb-3">
<input hidden="" type="text" value="<?php echo $sessionuserid;?>" name="ses"   class="input form-control" id="password1"  />
</div>
</div>

<div class="form-group col-md-12">
<button type="submit" name="chng" class="btn btn-success">Dəyiş</button>
<button type="button" class="btn btn-danger">Imtina</button>
</div>      

</div>
</form>


  </div>

</div>
 
<!--    tab end 2-->
   <div id="Tokyo" class="tabcontent">
  <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
  <h3>LOGLAR</h3>
  <p>Tokyo is the capital of Japan.</p>
</div> 
<!--    //tab 3 end-->
    
    
    
    
    
    
<!--//tab end    -->
</div>
<!--//container end-->
</div>

  
  
</div>


</div>



<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>



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