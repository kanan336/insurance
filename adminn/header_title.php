<!DOCTYPE html>
<html lang="en">
<!--//new sigorta3YAZ adminnn-->
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
<div class="line">
    <?php
    $title_page='Başlıq (header) Tənzimlənməsi';
    
    ?>
    <h1><?php echo $title_page;?></h1> 
    
    <?php
    $_SESSION['url']=$url=$_SERVER['REQUEST_URI'];
    echo "<script type='text/javascript'>toastr.info('$title_page')</script>"; //tostr
    if(isset($_GET['editheader'])){
    $edit_title=$_GET['title'];
    $edit_email=$_GET['email'];
    $edit_work_time=$_GET['work_time'];
    $edit_whatsapp_no=$_GET['whatsapp_no'];
    $edit_watsup_api=$_GET['watsup_api'];
    $edit_facebook_link=$_GET['facebook_link'];
    $edit_twitter_link=$_GET['twitter_link'];
    $edit_linkedin_link=$_GET['linkedin_link'];
    $edit_google_link=$_GET['google_link'];
    $edit_Youtube_link=$_GET['Youtube_link'];
    $edit_instagram_link=$_GET['instagram_link'];
    $edit_keywords=$_GET['edit_keywords'];
    $edit_description=$_GET['edit_description'];
        
    $sql_edit_profile="UPDATE header SET " ;
    $sql_edit_profile.="title='{$edit_title}', ";
    $sql_edit_profile.="mail='{$edit_email}', ";
    $sql_edit_profile.="work_time='{$edit_work_time}', ";
    $sql_edit_profile.="whatsapp_no='{$edit_whatsapp_no}', ";
    $sql_edit_profile.="watsup_api='{$edit_watsup_api}', ";
    $sql_edit_profile.="facebook_link='{$edit_facebook_link}', ";
    $sql_edit_profile.="twitter_link='{$edit_twitter_link}', ";
    $sql_edit_profile.="linkedin_link='{$edit_linkedin_link}', ";
    $sql_edit_profile.="google_link='{$edit_google_link}', ";
    $sql_edit_profile.="instagram_link='{$edit_instagram_link}', ";
    $sql_edit_profile.="keywords='{$edit_keywords}', ";
    $sql_edit_profile.="description='{$edit_description}', ";
    
    $sql_edit_profile.="youtube_link='{$edit_Youtube_link}' ";
    
     
    $sql_edit_profile.= "WHERE head_id=1 " ;
    
    $sql_edit_querry= mysqli_query($con, $sql_edit_profile);
    
    if(!$sql_edit_querry){
        
        echo '$sql_edit_profile'. mysqli_error($con);
        
    } else {
     $message_sucsess=$_SESSION['message'] = "Dəyişiklik edildi";
     
     echo "<script type='text/javascript'>toastr.success('$message_sucsess')</script>";
          $page = "header_title.php";
    echo '<meta http-equiv="Refresh" content="3;' . $page . '">';  
        
    }
        
        
    }
    
    
    ?>
    
    
</div>
<div class="line">
<?php
$sql_head = "SELECT * FROM `header` WHERE head_id=1 ";
$result_head = mysqli_query($con, $sql_head);
$c=1;
while ($row_head = mysqli_fetch_array($result_head)){
$id_head=$row_head['head_id'];
$work_time=$row_head['work_time'];
$watsup_api=$row_head['watsup_api'];
$whatsapp_no=$row_head['whatsapp_no'];
$title=$row_head['title'];
$mail=$row_head['mail'];
$facebook_link=$row_head['facebook_link'];
$twitter_link=$row_head['twitter_link'];
$linkedin_link=$row_head['linkedin_link'];
$google_link=$row_head['google_link'];
$youtube_link=$row_head['youtube_link'];
$instagram_link=$row_head['instagram_link'];
$keywords=$row_head['keywords'];
$description=$row_head['description'];
}
?>

<form action="" method="get">
    

  
    
    
<div class="form-row">
<div class="form-group col-md-6">
<label for="inputEmail4">Saytın adı (title)</label>
<input type="text" class="form-control" value="<?php echo $title;?>" name="title" id="inputEmail4" placeholder="AD">
</div>
<div class="form-group col-md-6">
<label for="inputPassword4">Email</label>
<input type="email" name="email" value="<?php echo $mail;?>" class="form-control" id="inputPassword4" placeholder="">
</div>

<div class="form-group col-md-6">
<label for="inputEmail4">İş vaxtı</label>
<input type="text" class="form-control" name="work_time" value="<?php echo $work_time;?>" id="inputEmail4" placeholder="Email">
</div>
<div class="form-group col-md-6">
<label for="inputPassword4">Telefon</label>
<input type="tel" class="form-control" name="whatsapp_no" value="<?php echo $whatsapp_no;?>" id="inputPassword4" placeholder="Password">
</div>

<div class="form-group col-md-6">
<label for="inputEmail4">Telefon (whatsup api)</label>
<input type="text" class="form-control" name="watsup_api" value="<?php echo $watsup_api;?>" id="inputEmail4" placeholder="Email">
</div>
<div class="form-group col-md-6">
<label for="inputPassword4">Facebook_link</label>
<input type="text" class="form-control" name="facebook_link" value="<?php echo $facebook_link;?>" id="inputPassword4" placeholder="Password">
</div>

<div class="form-group col-md-6">
<label for="inputEmail4">Twitter_link</label>
<input type="text" class="form-control" name="twitter_link" value="<?php echo $twitter_link;?>" id="inputEmail4" placeholder="Email">
</div>
<div class="form-group col-md-6">
<label for="inputPassword4">Linkedin_link</label>
<input type="text" name="linkedin_link" class="form-control" value="<?php echo $linkedin_link;?>" id="inputPassword4" placeholder="Password">
</div>
    
<div class="form-group col-md-6">
<label for="inputPassword4">Google_link</label>
<input type="text" name="google_link" class="form-control" value="<?php echo $google_link;?>" id="inputPassword4" placeholder="Password">
</div>   

<div class="form-group col-md-6">
<label for="inputPassword4">Youtube_link</label>
<input type="text" name="Youtube_link" class="form-control" value="<?php echo $youtube_link;?>" id="inputPassword4" placeholder="Password">
</div>
    
<div class="form-group col-md-6">
<label for="inputPassword4">Instagram_link</label>
<input type="text" name="instagram_link" class="form-control" value="<?php echo $instagram_link;?>" id="inputPassword4" placeholder="Password">
</div>
   
    
    
<div class="form-group col-md-6">
<label style="color: red;" for="inputPassword4">Keywords (SEO- cümlənin sonunda , vergül əlavə edin)</label>


<textarea class="form-control" name="edit_keywords" rows="10" cols="30" ><?php echo $keywords;?></textarea>
   
</div>   
    
   
    
<div class="form-group col-md-6">
<label for="inputPassword4"> Açıklama(Description SEO)</label>

<textarea class="form-control" name="edit_description" rows="10" cols="30" ><?php echo $description;?></textarea>
    
</div>
    
   
    
<div class="form-group col-md-12">

    <button type="submit" name="editheader" class="btn btn-success">Yadda saxla</button>
<button type="button" class="btn btn-danger">Imtina</button>
</div>      

</div>
        
</form>


    
    
    
    
    
</div>

    

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