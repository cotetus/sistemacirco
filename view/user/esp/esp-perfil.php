<?php $id = $_GET['id']; ?>
<div class="slideshow-container">
<!-- Foreach-->
<div class="mySlides fade">
  <img  <?php echo "src = '../../assets/image/banner/".$esp['banner']."'";?> style="width: 100%"/>
  <div class="text"><strong><h1><?php echo $esp['nombre']; ?>
  </h1></strong><p><h4 style="width: 60%" align="left"><?php echo $esp['descripcion']; ?></h4></p><br></div>
</div><br>
<!-- Foreach-->
<!--<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>-->
</div>
<script type="text/javascript">
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







