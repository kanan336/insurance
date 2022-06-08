<div class="card mb-4">

    <div class="card-header">
        <h5 class="text-center text-capitalize">
            <span class="glyphicon glyphicon-list"><a style=" text-decoration: none; color: gray; " href="services.php" ><b>Məhsullar</b></a> </span></h5>
    </div>
<div class="card-body">
<div class="row">
<div class="col-sm-6">
    <?php
    // services table uchun script
$sql_ser = "SELECT * FROM `type_of_insurance`  ";
$result_ser = mysqli_query($con, $sql_ser);


    ?>
    
<ul class="list-unstyled mb-0">
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

}
    ?>


</ul>
</div>

</div>
</div>

</div>
    


<div class="card mb-4">

    <div class="card-header">
        <h5 class="text-center text-capitalize">
    <span class="glyphicon glyphicon-list">
        <a style=" text-decoration: none; color: gray; " href="post_all.php" ><b>Xəbərlər/Bloq</b></a>
         </span></h5>
    </div>
<div class="card-body">
<div class="row">
<div class="col-sm-12">
   <?php
$limit="LIMIT 6";//ən çox oxunanların sayını müəyyən edir
$query = "SELECT * FROM `posts` ORDER BY `posts`.`post_date` DESC ".$limit;
$select_all_posts_query = mysqli_query($con,$query);
?>

    <div class="t3">
               <?php 
    while ($row= mysqli_fetch_assoc($select_all_posts_query)){
    $post_id=$row['post_id'];
    $post_title=$row['post_title'];
    $post_author=$row['post_author'];
    $post_date= date('d.m.Y',strtotime ($row['post_date']));
    $post_image=$row['post_image'];
    $post_content=substr($row['post_content'],0,100);
    $post_status=$row['posts_status'];
    $read=$row['read_count'];
    
        ?>  
   
    <div class="card mb-1" style="max-width: 35rem;">
        <a style=" text-decoration: none;" href="post_details.php?blq=<?php echo $post_id;?>">
         <div class="card-header bg-gray-100 border-success"><?php echo$post_title; ?></div>
 
  <div class="card-footer border-primary">
      <div class="row">
    <div class="col-lg-6">
      <br>
    <span class="glyphicon glyphicon-time"><?php echo $post_date; ?></span> 
    </div>
    <div class="col-lg-6">
    <br>
    <i style="margin-left:100px;" class="bi bi-eye"> <?php echo $read; ?></i> 
    </div>
    </div>

      
  </div>   
        </a> 
  
  
</div>
  
  <?php }?>

        
    </div>
    
    
    
    


</div>

</div>
</div>

</div>
    
