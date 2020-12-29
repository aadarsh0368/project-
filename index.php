<?php
	include "include/header.php";
?>
<!--Slider Section-->
<div class="container-fluid slider">
	<div id="carousel" class="carousel slide" data-ride="carousel" data-interval="5000">
		<ul class="carousel-indicators">
			<li data-target="#carousel" data-slide-to="0" class="active"></li>
			<li data-target="#carousel" data-slide-to="1"></li>
			<li data-target="#carousel" data-slide-to="2"></li>
		</ul>
		<div class="carousel-inner slider-image">
			<div class="carousel-item active">
				<img src="images/slider1.jpg">
					
						<div class="carousel-caption text-center">
							<h1>
								<div class="typewrite" data-period="2000" data-type='[ "Welcome To Montana" ]'>
								<span class="wrap"></span>
								</div>
							</h1>
							<p>Hotel & Resorts</p>
						</div> 
					
			</div>
			<div class="carousel-item">
				<img src="images/slider2.jpg">
					
						<div class="carousel-caption text-center">
							<h1>
								<div class="typewrite" data-period="2000" data-type='[ "Unique Experience" ]'>
								<span class="wrap"></span>
								</div>
							</h1>
							<p>Enjoy With Us</p>
						</div> 
					
			</div>
			<div class="carousel-item">
				<img src="images/slider3.jpg">
					
						<div class="carousel-caption text-center">
							<h1>
								<div class="typewrite" data-period="2000" data-type='[ "Relaxing Rooms" ]'>
								<span class="wrap"></span>
								</div>
							</h1>
							<p>Your Room,Your Stay</p>
						</div> 
					
			</div>
		</div>
		<a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</div>
<!--Slider Section Ends-->
<?php
	include "include/ourrooms.php";
?>
<?php
	include "include/aboutus.php";
?>
<?php
	include "include/hotelfeatures.php";
?>
<?php
	include "include/ourgallery.php";
?>
<?php
	include "include/events.php";
?>
<?php
	include "include/people.php";
?>
<?php
	include "include/footer.php";
?>