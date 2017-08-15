<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Dining';
$this->params['breadcrumbs'][] = $this->title;
?>

      <div class="body-content">
        <div class="slideshow-container">

  <div class="mySlides">
    <img src="uploads/Taalhotel.jpg" style="width:100%;height:20%;"> 

  </div>

  <div class="mySlides">
    <img src="uploads/Taalroom.jpg" style="width:100%;height:20%;"> 
  
  </div>

  <div class="mySlides">
    <img src="uploads/Dining.jpg" style="width:100%;height:20%;"> 

  </div>

  
</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>
<script>

var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
  

</script>
  <h1><?= Html::encode($this->title) ?></h1>



<h2> B&B</h2>
<p style="text-align:justify"> B&B is a casual bowling and billiards hall that serves all-day snacks, appetizers, and non-alcoholic and alcoholic drinks.   
</br>
</br>
<strong>Location:</strong> Ground Floor, Pico de Loro Country Club
</br>
</br>
<strong>Operating Hours: </strong> 9:00 AM – 10:00 PM (Friday to Saturday), 9:00 AM – 8:00 PM (Sunday to Thursday) </p>


