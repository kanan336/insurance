 <div class="card mb-4">
        
            <div class="card-header"><b>Qanunvericilik və qaydalar</b></div>
        <div class="card-body">
        <div class="row">
        <div class="col-sm-12">
            <?php
            $sql_type_ins = "SELECT * FROM `type_of_ins_wordings` WHERE ins_id=$det_id ";

$result = mysqli_query($con, $sql_type_ins);

// Check connection from func
confirmQuery($result);


  // output data of each row
  while($row_ins_type = mysqli_fetch_assoc($result)) {
    $name_w1=$row_ins_type['name_w'];
        $file=$row_ins_type['file_w'];
     $file_show="adminn/img/xidmet/$file";
   
    
    $attached_file="<li class='list-group-item' ><a class='indexdetdocument'  href='$file_show' target='_blank'><i style=' color:red;' class='fa-solid fa-file-pdf'>  </i>$name_w1</a></li>";
    ?>
            
    <ul class="list-group list-group-flush list-unstyled mb-2 mt-2">
        
        <?php echo $attached_file;?>
    
<?php }?>

    </ul>

    </div>
    
               
        </div>
        </div>

        </div>