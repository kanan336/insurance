<?php

require '../db/db.php';


if(isset($_GET['chng'])){

    $chngPassId=$_GET['ses'];    
    $sql = "SELECT * FROM `users` WHERE id='{$chngPassId}'";
    $result= mysqli_query($con,$sql);
    
    while ($row= mysqli_fetch_assoc($result)){
    $user_id=$row['id'];
    }
    
    $newPass= mysqli_real_escape_string($con,$_GET['newPass']);
    
    $newPassConfirm=mysqli_real_escape_string($con,$_GET['newPassConfirm']);
    
    $newPassstrip= stripcslashes($newPass);
    $newPassConfirmstrip=stripcslashes($newPassConfirm);
    
    $newPassstrim=trim($newPassstrip);
    $newPassstrimconfirm=trim($newPassConfirmstrip);
    
    
    if($newPass == $newPassConfirm ){
       
        $update="UPDATE `users` SET `password` = MD5('$newPassstrimconfirm') WHERE `users`.`id` = $user_id ;";
        $res_update= mysqli_query($con,$update);
        
        if($res_update){
        echo"<div class='alert alert-success text-center' role='alert'>
<h1>Şifrə Yeniləndi!!<br><br>Təşəkkürlər.</h1>
</div>";
        
       
        } else {
        echo 'NOOO'. mysqli_error($con);    
        }
        
        echo '<script type="text/javascript">
    setTimeout(function(){window.top.location="index.php"},3000);
    </script>';
      
       
        
        
    } else {
        echo 'Şifrə yanlışdı';    
    }

    
    
    
    
    
}


?>