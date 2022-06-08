
<!--Header teklif təkliflərə ehtiyacınız var ?-->
<div class="modal fade" id="MyModalhead" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Təklif</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          
        <div class="form-group">
<!--           <select class="form-control" name="ins_cat_id" id="">
          <option selected="" value='0'>Sığorta növünü seçin</option>
      <?php        

$query="SELECT * FROM type_of_insurance";

$select_categories= mysqli_query($con,$query);


while($row= mysqli_fetch_assoc($select_categories)){

$cat_id=$row['id'];

$cat_title=$row['name_of_insurance'];

echo "<option value='{$cat_id}'>{$cat_title}</option>";

}
?> 
    </select>-->
        </div>
            
        <div class="form-group">
   <select class="selectpicker" data-size="5">
  <option data-divider="true"></option>
</select>



            
            
        </div>
            
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>



<!--Xüsusi təkliflərə ehtiyacınız var ?-->

<div class="modal fade" id="MyModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Xüsusi təkliflərə ehtiyacınız var ?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          
        <div class="form-group">
            <label for="recipient-name" class="col-form-label">Recipient:</label>
            <input type="text" class="form-control" id="recipient-name">
        </div>
            
        <div class="form-group">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
        </div>
            
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>