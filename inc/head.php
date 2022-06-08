<?php
include 'db/db.php';
include 'func/func.php';
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

<head>


<meta name="author" content="KK group prodution">
<meta name="generator" content="Hugo 0.88.1">
<title><?php echo $title;?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<meta name="keywords" content="<?php echo $keywords;?>">
<meta name="google-site-verification" content="" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="description" content="<?php echo $description;?>">
<meta name="copyright" content="KK group prodution">
<meta name="title" content="<?php echo $title;?>">
<meta property="og:title" content="Rəsmi səhifəmizə xoş gəlmisiniz.">
<meta property="og:url" content="">
<meta property="og:description" content="Rəsmi səhifəmizə xoş gəlmisiniz.">
<meta property="og:image" content="">
<meta property="og:site_name" content="<?php echo $title;?>">
<meta property="type" content="website">
<meta content="600" http-equiv="refresh" />
<meta name="robots" content="index, follow"/>


<link rel="canonical" href="">

<!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<link href="css/css.css" rel="stylesheet">
<link href="css/med.css" rel="stylesheet">
<link href="css/Footer.css" rel="stylesheet">
<link href="css/nav.css" rel="stylesheet">
<link href="aos/aos.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
<!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.1/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">

<link rel="stylesheet" type="text/css" href="slick/slick.css"/>

<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
<link rel="stylesheet" type="text/css" href="slick/slick.css">
<link rel="stylesheet" type="text/css" href="slick/slick-theme.css">
<link rel="stylesheet" type="text/css" href="slick/slick_css.css">

<script src="https://kit.fontawesome.com/08dce8b5e1.js" crossorigin="anonymous"></script>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

<!-- Custom styles for this template -->
<link href="css/carousel/carousel.css" rel="stylesheet">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">



</head>