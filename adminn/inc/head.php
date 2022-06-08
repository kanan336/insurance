<?php
require '../db/db.php';
 session_start();

if(isset($_SESSION["Login"]) && $_SESSION["Login"] === true ){
   
} else {
    echo "<script> location.replace('exit.php'); </script>";    
}

 
 
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

?>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $title; ?></title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
     <!-- Custom styles for this table-->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
      <link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" rel="stylesheet">

      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

      <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
      
      <script src="https://kit.fontawesome.com/08dce8b5e1.js" crossorigin="anonymous"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<link rel="stylesheet" href="css/toastr.min.css">
<link rel="stylesheet" href="css/toastr.css">
     <script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>
</head>