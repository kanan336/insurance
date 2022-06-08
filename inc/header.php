<?php
include 'db/db.php';

?>

<?php
// Header table uchun script
$sql = "SELECT * FROM `header`";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$work_time=$row['work_time'];
$watsup_api=$row['watsup_api'];
$whatsup_no=$row['whatsapp_no'];
$mail=$row['mail'];
$facebook_link=$row['facebook_link'];
$twitter_link=$row['twitter_link'];
$linkedin_link=$row['linkedin_link'];
$google_link=$row['google_link'];
$youtube_link=$row['youtube_link'];
$instagram_link=$row['instagram_link'];
$title=$row['title'];
$keywords=$row['keywords'];
$description=$row['description'];

?>


<header>

<!--top dark navbar-->
<div id="topmeny1"  class="container-fluid topmeny1">
<div class="container">
<div class="row">

<div class="col-3">

<div class="topcontact1">
<i class="bi bi-telephone"></i>
</div>

<div class="topcontact2">
<a style=" text-decoration: none; color: red;"  href="https://api.whatsapp.com/send?phone=<?php echo $whatsup_no;?>"><span class=""><?php echo $whatsup_no;?></span></a>
</div>
</div>

<div class="col-3">

<div class="topcontact1">
<i class="bi bi-envelope"></i>
</div>

<div class="topcontact2">
<a style="text-decoration: none; color: red;"  href="mailto:<?php echo $mail;?>"><span class=""><?php echo $mail;?></span></a>
</div>

</div>

<div class="col-4">

</div>
<div class="col-2">
<div class="dropdown">
<a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
Diller
</a>

<ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
<li><a class="dropdown-item" href="#">AZ</a></li>
<li><a class="dropdown-item" href="#">EN</a></li>
<li><a class="dropdown-item" href="#">RUS</a></li>
</ul>
    
</div>
</div>
</div>
</div>

</div>

<!--top dark navbar-->

<!--//second meny topmeny2-->

<div id="topmeny2" class="container-fluid logomeny3 ">
<div class="row">
<div class="col-4 logo3">
<a class="navbar-brand" id="" href="#">
<img src="img/sigorta_logo.png" alt="" max-width="100%" height="70" class="d-inline-block ">
</a>
</div>
    
<div style=" " class="col-2">

<div class="menucontact">
<i class="bi bi-telephone"></i>
</div>

<div class="maincontact">
<span class=""><?php echo $whatsup_no;?></span>

</div>


</div>
<div class="col-2 ">


<div class="menucontact">
<i class="bi bi-envelope"></i>
</div>

<div class="maincontact">
<span class=""><?php echo $whatsup_no;?></span>
</div>


</div>


<!--//second meny end-->

<div class="col-2">
<a class="btn onlineteklifbutton " href="" data-toggle="modal" data-target="#MyModalhead" role="button">ONLİNE Təklif Alın</a>




</div>
</div>
</div>



   

<div id="topmeny3" class="menutop mb-3" style="">
 
        <nav class="navbar navbar-expand-lg navbar-light " style="">
<div class="container">
   
<a class="navbar-brand" id="topmenulogo" href="#">
    <img id="topmenulogoimg" src="img/sigorta_logo.png" alt="" max-width="100%" height="70" class="d-inline-block ">
</a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse navbar-collapsechng" id="navbarTogglerDemo02">

    <ul  class="navbar-nav me-auto mb-2 mb-lg-0 ulnav">
<li  class="nav-item ">
    <a  class="nav-link" aria-current="page" href="index.php">Əsas Səhifə</a>
</li>

<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
Haqqımızda
</a>
<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
<li><a class="dropdown-item" href="#">Action</a></li>
<li><a class="dropdown-item" href="#">Another action</a></li>
<li><a class="dropdown-item" href="#">Something else here</a></li>
</ul>
</li>

<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="services.php" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
Xidmətlərimiz
</a>
    <?php
    // services table uchun script
$sql_ser = "SELECT * FROM `type_of_insurance`  ";
$result_ser = mysqli_query($con, $sql_ser);


    ?>
<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
       <?php
    while ($row_ser = mysqli_fetch_array($result_ser)){
$id_ser=$row_ser['id'];
$name_ser=$row_ser['name_of_insurance'];
$detail_ser= $row_ser['coverage_insurance'];
$image=$row_ser['photo_ins_type'];
$date_ser=$row_ser['date_ins_type'];
$icons=$row_ser['icons'];
$short_name_ins=$row_ser['short_name_ins'];
$icons_color=$row_ser['icons_color'];
    

echo"<li><a style='font-weight: bold;' class='dropdown-item' href='index_details.php?det=$id_ser'><i style=' color:$icons_color;' class='$icons'></i> $short_name_ins </a></li>";
    }?>


</ul>
</li>

<!--<li class="nav-item">
<a class="nav-link active" aria-current="page" href="#">REFERANSLAR</a>
</li>-->

<li class="nav-item">
<a class="nav-link active" aria-current="page" href="#">Əməkdaşlıq</a>
</li>

<li class="nav-item">
<a class="nav-link active" aria-current="page" href="post_all.php">Bloq</a>
</li>
<li class="nav-item">
<a class="nav-link active" aria-current="page" href="#">İnsan Resusları</a>
</li>

<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
Multimedia
</a>
<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
<li><a class="dropdown-item" href="#">Action</a></li>
<li><a class="dropdown-item" href="#">Another action</a></li>
<li><a class="dropdown-item" href="#">Something else here</a></li>
</ul>
</li>

<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
Əlaqə
</a>
<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
<li><a class="dropdown-item" href="#">Action</a></li>
<li><a class="dropdown-item" href="#">Another action</a></li>
<li><a class="dropdown-item" href="#">Something else here</a></li>
</ul>
</li>



</ul>


<div class="flex-topmenu">
    <div><a class="sossss"  href="<?php echo $facebook_link;?>" ><i class="bi bi-facebook"></i></a></div>
    <div><a class="sossss" href="<?php echo $instagram_link;?>" ><i class="bi bi-instagram"></i></a></div>
    <div><a class="sossss" href="<?php echo $youtube_link;?>" ><i class="bi bi-youtube"></i></a></div>
    <div><a class="sossss" href="https://api.whatsapp.com/send?phone=<?php echo $watsup_api;?>" ><i class="bi bi-whatsapp"></i></a></div>
</div>

</div>
</div>
</nav>


</div>

</header>