<?php
session_start();
require '../db/db.php';
require 'functions/safe.php';
require 'functions/routing.php';

?>

<!--neww Adminnn-->

<?php
// initializing variables
$email = "";
$password = "";
$errors = array(); 

if($_SERVER["REQUEST_METHOD"] =="POST"){    
     $email= Security($_POST['email']);
     $password= Security($_POST['password']);
//    $databaseusername='admin';
//    $databasePass='202cb962ac59075b964b07152d234b70';
       //Checking is user existing in the database or not
$query = "SELECT * FROM `users` WHERE email='$email'
and password='".md5($password)."'";
$result = mysqli_query($con,$query) or die(mysql_error());

if(!$result){
    die('no result login'.mysqli_error($con));
}
     
     while($row= mysqli_fetch_assoc($result)){
    
$db_id= $row['id'];
$db_username= $row['username'];
$db_emaill= $row['email'];
$db_password= $row['password'];
$db_user_name= $row['name'];
$db_user_type= $row['user_type'];
$db_user_status= $row['status'];
$db_last_online= $row['lastOnline'];
$db_active= $row['active'];
    
}
     
   
     if(empty($email) && empty($password) ){
         echo ('<h2>Bosh olamaz</h2>');
         comeBack(3);
     } else {
     $password= md5($password);
     if((@$db_emaill != $email) || ($db_password != $password) ){
         
         echo ('<h2>Diqqət!</h2>');
          echo ' <div class="alert Danger">
  <span class="closebtn">&times;</span>  
  <strong class="" id="demo">Username veya shifre sehvv</strong> 
</div>';
         comeBack(3);
     } else {
     //girish
        session_regenerate_id(true);
        $_SESSION["Login"]=true;
        $_SESSION['username']=$db_username;
        $_SESSION['email']=$db_emaill;
        $_SESSION['id'] = $db_id;
        $_SESSION['user_type'] = $db_user_type;
        $_SESSION['status'] = $db_user_status;
        $_SESSION['active'] = $db_active;
        $_SESSION['LoginIP']=$_SERVER["REMOTE_ADDR"];
        $_SESSION['userAgent']=$_SERVER["HTTP_USER_AGENT"];
        $_SESSION['lastOnline'] = time();
        $_SESSION['dateOnline']= date('Y-m-d H:i:s');
        
$query_update_ip= "UPDATE users SET loginip='{$_SESSION['LoginIP']}' WHERE email='{$db_emaill}'  ";   
$query_update2= mysqli_query($con, $query_update_ip);
if(!$query_update2){
    echo '$query_update2 NOOOO'. mysqli_error($con);
}

$query_update_user= "UPDATE users SET useragent='{$_SESSION['userAgent']}' WHERE email='{$db_emaill}'  ";   
$query_update3= mysqli_query($con, $query_update_user);
if(!$query_update3){
    echo '$query_update3 NOOOO'. mysqli_error($con);
}
  
        echo '<div class="spinner-border" style="width: 3rem; height: 3rem;" role="status">
  <span class="sr-only">Xahiş edirik gözləyin...</span>
</div>
<div class="spinner-grow" style="width: 3rem; height: 3rem;" role="status">
  <span class="sr-only">Loading...</span>
</div>';
         
        
        
        echo ('<h2>DIQQƏT!</h2>');
        echo ' <div class="alert success">
  <span class="closebtn">&times;</span>  
  <strong class="" id="demo">Uğurla daxil oldunuz!</strong> 
</div>';
        sleep(2);
go('index.php',2);
        }
     
     
     
     } 
   
    
} else {

        go('login.php',1);    
    exit ('Bura gire bilmezsiniz Resulttt');

}

?>

<style>
    body{
        background-color: green;
    }
.alert {
  padding: 20px;
  background-color: #f44336;
  color: white;
  opacity: 1;
  transition: opacity 0.6s;
  margin-bottom: 15px;
}

.alert.success {background-color: #04AA6D;}
.alert.info {background-color: #2196F3;}
.alert.warning {background-color: #ff9800;}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}

#demo{
    font-size: 32px;
    text-align: center;
}
</style>


  



  
<!--<script>
go("index.php",3);

function go(address,second){
if(second===0){
    window.location.href=address;
    return;
}document.getElementById('demo').textContent=second+" saniyə sonra sayta daxil olacaqsınız"
second--;
setTimeout(function(){
    go(address,second);
},1000);}

</script>-->