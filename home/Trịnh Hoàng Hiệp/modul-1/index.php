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
	<div class="module1">
	<div>
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
	

	<!--Dropdown cart-->
			<a href="#">
	          <span class="glyphicon glyphicon-shopping-cart"></span>
	       	</a>

	
	
	<!--Icon-->
		<div id="icon">
			<img src="img/meni-logo-dark.png" style="width: 90px; height: 60px;">
		</div>


	
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



	<!--MENU-->
		
	

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


	<div class="container-fuild">
		<script src="./js/jssor.slider.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        jssor_1_slider_init = function () {
            var jssor_1_options = {
              $AutoPlay: 1,
              $SlideDuration: 800,
              $SlideEasing: $Jease$.$OutQuint,
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*responsive code begin*/
            /*you can remove responsive code if you don't want the slider scales while window resizing*/
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 1920);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*responsive code end*/
        };
    </script>
    <style>
        /* jssor slider loading skin oval css */

        .jssorl-oval img {
            animation-name: jssorl-oval;
            animation-duration: 1.2s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-oval {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }

        /* jssor slider bullet navigator skin 05 css */
        /*
        .jssorb05 div           (normal)
        .jssorb05 div:hover     (normal mouseover)
        .jssorb05 .av           (active)
        .jssorb05 .av:hover     (active mouseover)
        .jssorb05 .dn           (mousedown)
        */
        .jssorb05 {
            position: absolute;
        }
        .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
            position: absolute;
            /* size of bullet elment */
            width: 16px;
            height: 16px;
            background: url('../img/b05.png') no-repeat;
            overflow: hidden;
            cursor: pointer;
        }
        .jssorb05 div { background-position: -7px -7px; }
        .jssorb05 div:hover, .jssorb05 .av:hover { background-position: -37px -7px; }
        .jssorb05 .av { background-position: -67px -7px; }
        .jssorb05 .dn, .jssorb05 .dn:hover { background-position: -97px -7px; }

        /* jssor slider arrow navigator skin 22 css */
        /*
        .jssora22l                  (normal)
        .jssora22r                  (normal)
        .jssora22l:hover            (normal mouseover)
        .jssora22r:hover            (normal mouseover)
        .jssora22l.jssora22ldn      (mousedown)
        .jssora22r.jssora22rdn      (mousedown)
        .jssora22l.jssora22lds      (disabled)
        .jssora22r.jssora22rds      (disabled)
        */
        .jssora22l, .jssora22r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 40px;
            height: 58px;
            cursor: pointer;
            background: url('./img/a22.png') center center no-repeat;
            overflow: hidden;
        }
        .jssora22l { background-position: -10px -31px; }
        .jssora22r { background-position: -70px -31px; }
        .jssora22l:hover { background-position: -130px -31px; }
        .jssora22r:hover { background-position: -190px -31px; }
        .jssora22l.jssora22ldn { background-position: -250px -31px; }
        .jssora22r.jssora22rdn { background-position: -310px -31px; }
        .jssora22l.jssora22lds { background-position: -10px -31px; opacity: .3; pointer-events: none; }
        .jssora22r.jssora22rds { background-position: -70px -31px; opacity: .3; pointer-events: none; }
    </style>
    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1500px;height:600px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-oval" style="position:absolute;top:0px;left:0px;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19.0px;position:relative;top:50%;width:38px;height:38px;" src="../img/loading/static-svg/oval.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1500px;height:600px;overflow:hidden;">
        <!--Slide 1-->
            <div>
                <img data-u="image" src="./img/white-home-slide1.jpg" />

                <div class="menutrong">
             
		
			<h4 style="z-index: 5; white-space: nowrap; font-weight: 400; color: rgba(51, 51, 51, 1.00);text-transform:uppercase;letter-spacing:3px;">Taste and Comfort </h4>
				<h2 style="z-index: 6; white-space: nowrap; font-size: 85px; line-height: 90px; font-weight: 700; color: rgba(51, 51, 51, 1.00);font-family:Playfair Display;border-width:0px;">Soft and Crunchy </h2>
   				<h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor <br><br>incidition ullamco laboris nisi ut aliquip ex ea commodo condorico. </h4>
                  <button class="btn view">VIEW OUR MENU</button>
               </div>
            </div>

		<!--Slide 2-->
             <div>
                <img data-u="image" src="./img/white-home-slide2.jpg" />
               
                    <div class="menutrong">

			<h4 style="z-index: 5; white-space: nowrap; font-weight: 400; color: rgba(51, 51, 51, 1.00);text-transform:uppercase;letter-spacing:3px;">Taste and Comfort </h4>
				<h2 style="z-index: 6; white-space: nowrap; font-size: 85px; line-height: 90px; font-weight: 700; color: rgba(51, 51, 51, 1.00);font-family:Playfair Display;border-width:0px;">Taste and Healthy </h2>
   				<h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor <br><br>incidition ullamco laboris nisi ut aliquip ex ea commodo condorico. </h4>
                  <button class="btn view">VIEW OUR MENU</button>
                   
               </div>
             
               
            </div>

          
        </div>
         <style type="text/css">
           #slides{
           	text-align: center;
           }
           	.menutrong{
           		text-align: center;
           		width: 100%;
           		padding-top: 300px;
           	}
           </style>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
            <!-- bullet navigator item prototype -->
            <div data-u="prototype" style="width:16px;height:16px;"></div>
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora22l" style="top:0px;left:8px;width:40px;height:58px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora22r" style="top:0px;right:8px;width:40px;height:58px;" data-autocenter="2"></span>
    </div>
    <script type="text/javascript">jssor_1_slider_init();</script>
    <!-- #endregion Jssor Slider End -->
	</div>
	</div>
</body>
</html>
