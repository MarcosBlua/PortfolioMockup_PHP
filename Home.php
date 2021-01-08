<?php
    $tittle = 'Home';
    $currentPage = 'Home';

    include 'Header.php';

    include 'Navbar.php';
?>
    
<br>
	
<h2>Algunos trabajos</h2>
	
<noscript>Este Slide-show de trabajos no se mostrara correctamente porque su navegador no tiene JavaScript funcionando</noscript>
	
<br>
	
<div class="slideshow-container">

	<div class="mySlides">
		<img src="Pinturas\Abberly.png" style="width:100%">
		<div class="text">Abberly</div>
	</div>

	<div class="mySlides">
		<img src="Pinturas\Ascend to darkness.png" style="width:100%">
		<div class="text">Ascend To Darkness</div>
	</div>

	<div class="mySlides">
		<img src="Pinturas\God is fake.png" style="width:100%">
		<div class="text">God Is Fake</div>
	</div>
		
	<div class="mySlides">
		<img src="Pinturas\Death Comes.png" style="width:100%">
		<div class="text">Death Comes</div>
	</div>

	<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
	<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
	
<br>
	
<div style="text-align:center">
	<span class="dot" onclick="currentSlide(1)"></span>
	<span class="dot" onclick="currentSlide(2)"></span>
	<span class="dot" onclick="currentSlide(3)"></span>
</div>
	
<br>
	
<h2>Trabajo Timelapse</h2>
	
<br>
	
<div class="timelapse embed-responsive embed-responsive-16by9 mx-auto">
	<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/dNdF9AmSA-c"></iframe>
</div>
		
<script>
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
	
<br>
<br>    
	
<?php
    include 'Footer.php';
?>