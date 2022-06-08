<script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    
    <script src="js/bootstrap.min.js "></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    <script src="js/toastr.js"></script>
    
<!--    //View all postdaki cedvelin solundaki chek boxlari tenzim edir-->
    
    
    
    
   <!-- Include the Quill library -->
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

     

<!-- Initialize Quill editor -->
<script>
    

    
//  for delete modal script in xidmetler
  $(document).ready(function(){
  $(".delete_link").click(function(){
    
       var id=$(this).attr('rel');
       
       var delete_url="xidmetler.php?delete="+id+" ";
       
       $(".modal_delete_link").attr("href",delete_url);
      
       $("#myModal").modal('show');

  });
});

//  for delete modal script in xidmetler
  $(document).ready(function(){
  $(".delete_post").click(function(){
    
       var id=$(this).attr('rel');
       
       var delete_url="posts.php?delete="+id+" ";
       
       $(".modal_delete_link").attr("href",delete_url);
      
       $("#myModal").modal('show');

  });
});


//CK editorrrr



$(document).ready(function(){
   
ClassicEditor
.create( document.querySelector( '#editor' ) )
.then( editor => {
        console.log( editor );
} )
.catch( error => {
        console.error( error );
} );

});

//CK editorrrr1
$(document).ready(function(){
    
  ClassicEditor
        .create( document.querySelector( '#editor1' ) )
        .catch( error => {
            console.error( error );
        } );
});






</script>


<script>
   //View all postdaki cedvelin solundaki chek boxlari tenzim edir
$(document).ready(function(){
    
   $('#selectAllbox').click(function(event){
       
       if(this.checked){
           $('.checkBoxes').each(function(){
               this.checked=true;
           });
       }else{
           $('.checkBoxes').each(function(){
               this.checked=false;
           });
       }
       
   });
});

</script>