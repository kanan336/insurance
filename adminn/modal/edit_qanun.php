

<div class="modal fade" id="update_modal<?php echo $f_id?>" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<form method="POST" action="./update.php">
<div class="modal-header">
<h3 class="modal-title">Update User<?php echo $f_id;?></h3>
</div>
<div class="modal-body">
<div class="col-md-2"></div>
<div class="col-md-8">
    
<div class="form-group">
<label>Firstname</label>
<input type="hidden" name="user_id" value="<?php echo $f_id;?>"/>
<input type="text" name="firstname" value="<?php echo $f_name;?>" class="form-control" required="required"/>
</div>
    
<div class="form-group">
<label>Lastname</label>
<input type="text" name="lastname" value="<?php echo $file_link;?>" class="form-control" required="required" />
</div>

</div>
</div>
<div style="clear:both;"></div>
<div class="modal-footer">
<button name="update" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Update</button>
<button class="btn btn-danger" type="button" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
</div>
</div>
</form>
</div>
</div>
</div>