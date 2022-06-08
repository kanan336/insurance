<?php

include 'inc/head.php';
if(count($_POST)>0){
if($_POST['type']==1){

$ins_cat_id=$_POST['ins_cat_id'];
$name_w=$_POST['name_w'];


$ins_image=$_FILES['img']['name'];
$ins_image_temp=$_FILES['img']['tmp_name'];
$uploaded=move_uploaded_file($ins_image_temp, "img/qaydalar/$ins_image");

if(!$uploaded){
    echo "<script>alert(File Yuklenmedi)</script>";
}


$insert_sql = "INSERT INTO `type_of_ins_wordings` ";
$insert_sql .= "( ins_id , name_w, file_w ) VALUES ";
$insert_sql .= "('{$ins_cat_id}','{$name_w}', '{$ins_image}' ) ";


$insert_query= mysqli_query($con, $insert_sql); 



if ($insert_query) {
echo json_encode(array("statusCode"=>200));
} 
else {
echo "Error: " . $insert_sql . "<br>" . mysqli_error($con);
}
mysqli_close($con);
}
}

?>