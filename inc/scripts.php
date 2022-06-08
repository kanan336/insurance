
<script src="js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="js/js.js" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js">
</script>

<script src="./slick/slick.js" type="text/javascript" charset="utf-8"></script>
<script src="./slick/slick.js" type="text/javascript" charset="utf-8"></script>
<script src="aos/aos.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
$(document).on('ready', function() {

$(".tender").slick({
slidesToShow: 3,
autoplay: true,
vertical:false,
verticalSwiping:false,
arrows:false,
centerMode:false,
autoplaySpeed: 2000,
centerMode: true,
centerPadding: '60px',
autoplay:true,
edge:event,  
});





$('.t1').slick({
  dots: true,
  infinite: false,
  speed: 300,
  autoplay: true,
vertical:false,
verticalSwiping:false,
arrows:true,
centerMode:false,
autoplaySpeed: 2000,
centerMode: true,
centerPadding: '60px',
edge:event,
  slidesToShow: 3,
  slidesToScroll: 4,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});


});


var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
showSlides(slideIndex += n);
}

function currentSlide(n) {
showSlides(slideIndex = n);
}

function showSlides(n) {
var i;
var slides = document.getElementsByClassName("mySlides");
var dots = document.getElementsByClassName("dot");
if (n > slides.length) {slideIndex = 1}    
if (n < 1) {slideIndex = slides.length}
for (i = 0; i < slides.length; i++) {
slides[i].style.display = "none";  
}
for (i = 0; i < dots.length; i++) {
dots[i].className = dots[i].className.replace(" active", "");
}
slides[slideIndex-1].style.display = "block";  
dots[slideIndex-1].className += " active";
}
</script>

<script type="text/javascript">
    $(document).on('ready', function() {
      
      $(".t3").slick({
        slidesToShow: 3,
        autoplay: true,
        vertical:true,
        verticalSwiping:false,
        arrows:false,
        centerMode:false,
        autoplaySpeed: 2500,
        centerMode: true,
        centerPadding: '62px',
        autoplay:true,
        edge:event,  
      });
      
    });
</script>



 <script>
    AOS.init();
  </script>