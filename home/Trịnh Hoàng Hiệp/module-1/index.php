<!DOCTYPE html>
<html lang="en">
<head>
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <?php
    if (!class_exists('lessc')) {
        include ('./libs/lessc.inc.php');
    }
    $less = new lessc;
    $less->compileFile('less/1.less', 'css/1.css');
    ?>
    <link href="css/1.css" rel="stylesheet" type="text/css" />
	<meta charset="UTF-8">
	<title>Light Home-Savory</title>
</head>
<body>
	<!--Slide-->
	<div class="slideshow-container">
  		<div class="mySlides fade">
    		<div class="numbertext">1 / 2</div>
    		<img src="img/white-home-slide1.jpg" style="width:100%">
    		<div class="text">Tasty and Healthy</div>
		</div>
		
		<div class="mySlides fade">
    		<div class="numbertext">2 / 2</div>
    		<img src="img/white-home-slide2.jpg" style="width:100%">
		</div>

  		<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  		<a class="next" onclick="plusSlides(1)">&#10095;</a>
	</div>

	<br>
	

	<!--Button View our menu-->
	<button class="btn view">VIEW OUR MENU</button>

	<br>

	<!--Text slide 1-->
	<div class="tp-caption Savory-subtitle   tp-resizeme" style="z-index: 5; white-space: nowrap; font-weight: 400; color: rgba(51, 51, 51, 1.00);text-transform:uppercase;letter-spacing:3px;">taste and comfort </div>
	<div class="text"  style="z-index: 6; white-space: nowrap; font-size: 85px; line-height: 90px; font-weight: 700; color: rgba(51, 51, 51, 1.00);font-family:Playfair Display;">Tasty and Healthy</div>
    <div class="text" style="z-index: 7; min-width: 670px; max-width: 670px; white-space: normal; line-height: 30px; color: rgba(51, 51, 51, 1.00);">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidition ullamco laboris nisi ut aliquip ex ea commodo condorico.</div>

    <!--Text slide 2-->

	
	<br>
	<!--Dropdown menu-->
	<div id="dropDown-Menu">
		<div class="dropdown">
			 <button class="dropbtn">HOME</button>
			  <div class="dropdown-content">
			    <a href="#">Restaurent Home</a>
			    <a href="#">Bistro Home</a>
			    <a href="#">Light Home</a>
			    <a href="#">Dinner Home</a>
			    <a href="#">Left Menu Home</a>
			    <a href="#">Boxed Home</a>
			    <a href="#">Health Food Home</a>
			    <a href="#">Masonry Blog</a>
			    <a href="#">Blog Home</a>
			    <a href="#">Carousel Showcase</a>
			    <a href="#">Video Home</a>
			    <a href="#">Landing</a>
			 </div>
		</div>

		<div class="dropdown">
			 <button class="dropbtn">PAGES</button>
			  <div class="dropdown-content">
			    <a href="#">About Us</a>
			    <a href="#">Services</a>
			    <a href="#">Our Menu</a>
			    <a href="#">Meet The Chefs</a>
			    <a href="#">Contact Page</a>
			    <a href="#">Contact Page II</a>
			    <a href="#">Reservations</a>
			    <a href="#">Reservations II</a>
			    <a href="#">Coming Soon</a>
			 </div>
		</div>

		<div class="dropdown">
			 <button class="dropbtn">ELEMENTS</button>
			  <div class="dropdown-content">
			    <ul>
					<li><a class="active" href="#home">CLASSIC</a></li>
					<li><a href="#">Accordions</a></li>
					<li><a href="#">Tabs</a></li>
					<li><a href="#">Buttons</a></li>
					<li><a href="#">Buttons</a></li>
					<li><a href="#">Call to Action</a></li>
					<li><a href="#">Restaurant Item</a></li>
					<li><a href="#">Image Gallery</a></li>
					<li><a href="#">Google Maps</a></li>
					<li><a href="#">Contact Form</a></li>
				</ul>
				<ul>
					<li><a class="active" href="#home">CHARTS</a></li>
					<li><a href="#">Pricing Table</a></li>
					<li><a href="#">Progress Bar</a></li>
					<li><a href="#">Counters</a></li>
					<li><a href="#">Process</a></li>
					<li><a href="#">Pie Chart</a></li>
					<li><a href="#">Full Pie Chart</a></li>
					<li><a href="#">Pie Chart With Icon</a></li>
					<li><a href="#">Doughnut Pie Charts</a></li>
				</ul>
				<ul>
					<li><a class="active" href="#home">TYPHOGRAPHY</a></li>
					<li><a href="#">Headings</a></li>
					<li><a href="#">Columns</a></li>
					<li><a href="#">Dropcaps</a></li>
					<li><a href="#">Blockquote</a></li>
					<li><a href="#">Custom Font</a></li>
					<li><a href="#">Icon With Text</a></li>
					<li><a href="#">Lists with Icon</a></li>
					<li><a href="#">Message Boxes</a></li>
				</ul>
				<ul>
					<li><a class="active" href="#home">INTERACTIVE</a></li>
					<li><a href="#">Testimonials</a></li>
					<li><a href="#">Carousel</a></li>
					<li><a href="#">Info Box</a></li>
					<li><a href="#">Team</a></li>
					<li><a href="#">Blog List</a></li>
					<li><a href="#">Blog Carousel</a></li>
					<li><a href="#">Portfolio Slider</a></li>
					<li><a href="#">Video Button</a></li>
				</ul>
				<ul>
					<li><a class="active" href="#home">SAVORY THEME</a></li>
					<li><a href="#">Beautiful Elements for you</a></li>>
				</ul>
			 </div>
		</div>

		<div class="dropdown">
			 <button class="dropbtn">PORTFOLIO</button>
			  <div class="dropdown-content">
			    <a href="#">Standard</a>
			    <a href="#">Gallery</a>
			    <a href="#">Gallery With Space</a>
				<a href="#">Masonry Wide</a>
			    <a href="#">Portfolio Single</a>
			 </div>
		</div>

		<div class="dropdown">
			 <button class="dropbtn">BLOG</button>
			  <div class="dropdown-content">
			    <a href="#">Standard</a>
			    <a href="#">Masonry</a>
			    <a href="#">Blog Single</a>
			 </div>
		</div>

		<div class="dropdown">
			 <button class="dropbtn">SHOP</button>
			  <div class="dropdown-content">
			 </div>
		</div>
	</div>
		

	<br>


	<!--Dropdown cart-->
	<a href="#">
          <span class="glyphicon glyphicon-shopping-cart"></span>
        </a>

	<br>
	


	
	<!--Menu icon-->
	<div id="menu-icon" onclick="myFunction(this)">
		<div></div>
		<div></div>
		<div></div>
	</div>


	<!--Overlay-->
	<div id="overlay" onclick="off()">
	  	<div id="text">Overlay Text</div>
		<div class="search">
			<input type="text" name="search" placeholder="Search">
			<span class="glyphicon glyphicon-search"></span>
		</div>
	</div>


	<!--Search-->
	<div class="search">
		<input type="text" name="search" placeholder="Search" onclick="on()">
		<span class="glyphicon glyphicon-search"></span>
	</div>
	

	























	<script>

	//On or off overlay
	function on() {
	    document.getElementById("overlay").style.display = "block";
	}

	function off() {
	    document.getElementById("overlay").style.display = "none";
	}
	//Click menu icon
		function myFunction(x) {
	    x.classList.toggle("change");
		}

	//Background picture
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
</body>
</html>
