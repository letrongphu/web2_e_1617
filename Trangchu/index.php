<!DOCTYPE html>
<html lang="en">
<head>
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="./js/jssor.slider.min.js" type="text/javascript"></script>

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




	<!--module-->

	<div class="module7">
        <div class="container-fluid">
              <div class="subtitle">
                    <h5>TASTY AND CRUNCHY</h5>
                    <h2>Our Specialties </h2>
                    <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedolorm <br> reminusto doeiusmod tempor incidition ulla mco laboris nisi ut aliquip <br>ex ea commo condorico consectetur adipiscing elitut aliquip.</h4>
              </div>
        </div>
    </div>
    <!------- -----#uusu-->
    <div class="module8">
            <div class="row">
                <div class="col-md-4">
                  <img  src="img/img1.jpg ">  
                </div>
                <div class="col-md-4">
                    <img  src="img/img2.jpg ">  
                </div>
                <div class="col-md-4">
                    <img  src="img/img3.jpg ">  
                </div>
            </div>
    </div>

    <!------>
     <div class="module9">
        
            <div class="row">
                <div class="col-md-6">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidi tion ullamco laboris nisi ut aliquip ex ea commodo condorico adipiscing elit, sed do eiusmod tempor incidition ullam. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidition ullamco laboris nisi ut aliquip ex ea commodo condorico consectetur adi piscing elit, sed do eiusmod tempor.<br>
<br>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidition ullamco laboris nisi ut aliquip ex ea commodo condorico consectetur adipiscing elit, sed do eiusmod tempor incidition sit.</p>
                </div>
                <div class="col-md-6">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidi tion ullamco laboris nisi ut aliquip ex ea commodo condorico adipiscing elit, sed do eiusmod tempor incidition ullam. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidition ullamco laboris nisi ut aliquip ex ea commodo condorico consectetur adi piscing elit, sed do eiusmod tempor. <br>
<br>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidition ullamco laboris nisi ut aliquip ex ea commodo condorico consectetur adipiscing elit, sed do eiusmod tempor incidition sit.                    </p>
                </div>
            </div>
            
    </div>


    <!----#mohule 10---->

    <!-- #region Jssor Slider Begin -->
   <?php  include_once'module-10/index.php';?>


   <div class="module12">
   
     <div class=" row">
        <div class="col-md-6">
          <img src="img/img4.jpg"> 
        </div> 
        <div class="col-md-6">
          <h5>TASTY AND CRUNCHY</h5>
          <h2>Losos & Vegetables</h2>
          <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidition ullamco laboris nisi ut aliquip ex ea commodo condorico consectetur adipiscing elit, sed do eiusmod tempor incidition.</h4>
          <span class="btn-text">VIEW OUR MENU</span>
        </div>
      </div>
  </div>  


  <div class="module13">
   
    <div class=" row">
      <div class="col-md-6">
          <h5>TASTY AND CRUNCHY</h5>
          <h2>Chicken Tagliatelle</h2>
          <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidition ullamco laboris nisi ut aliquip ex ea commodo condorico consectetur adipiscing elit, sed do eiusmod tempor incidition.</h4>
          <span class="btn-text">VIEW OUR MENU</span>
        </div>
        <style type="text/css">
          .btn-text{
            text-align: right;
          }
        </style>
        <div class="col-md-6">
          <img src="img/img5.jpg"> 
        </div>    
    </div>  


  <div class="module14">
   
     <div class=" row">
        <div class="col-md-6">
          <img src="img/img6.jpg"> 
        </div> 
        <div class="col-md-6">
          <h5>TASTY AND CRUNCHY</h5>
          <h2>Sweet Melancholia</h2>
          <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidition ullamco laboris nisi ut aliquip ex ea commodo condorico consectetur adipiscing elit, sed do eiusmod tempor incidition.</h4>
          <span class="btn-text">VIEW OUR MENU</span>
        </div>
      </div>  
  </div>


<div class="modul15">
        <div class="container-fuild">
            <div class="modul50">
                <!-- Jssor Slider Begin -->
    <script type="text/javascript" src="./js/jssor.slider.min.js"></script>
    <script>
        jssor_slider1_starter = function (containerId) {
            var options = {
                $AutoPlay: 1,

                $PauseOnHover: 1,                               //[Optional] Whether to pause when mouse over if a slideshow is auto playing, default value is false

                $ArrowKeyNavigation: true,                          //Allows arrow key to navigate or not, default value is true
                $SlideWidth: 400,                                   //[Optional] Width of every slide in pixels, the default is width of 'slides' container
                //$SlideHeight: 300,                                  //[Optional] Height of every slide in pixels, the default is width of 'slides' container
                $SlideSpacing: 0,                                   //Space between each slide in pixels
                $Cols: 2,                                  //Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                $ParkingPosition: 100,                                //The offset position to park slide (this options applys only when slideshow disabled).

                $ArrowNavigatorOptions: {                       //[Optional] Options to specify and enable arrow navigator or not
                    $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 2,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
                }
            };

            var jssor_slider1 = new $JssorSlider$(containerId, options);
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
                if (parentWidth)
                    jssor_slider1.$ScaleWidth(Math.min(parentWidth, 12000));
                else
                    $Jssor$.$Delay(ScaleSlider, 30);
            }

            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);

            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            //responsive code end
        };
    </script>
    <style type="text/css">
	img{
		width:150px;
		padding-right: 14px;
}
	</style>
    
    <div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 800px;
        height: 300px; overflow: hidden;">
        <!-- Slides Container -->
        <div u="slides" style="position: absolute; left: 0px; top: 20px; width: 800px; height: 150px;
            overflow: hidden;">

            <div><img u="image" src="./img/hinh5.jpg "  /></div>
            <div><img u="image" src="./img/hinh6.jpg " /></div>
            <div><img u="image" src="./img/hinh7.jpg " /></div>
            <div><img u="image" src="./img/hinh8.jpg " /></div>
            <div><img u="image" src="./img/hinh9.jpg " /></div>
           
            
        </div>
       
        <!--#region Arrow Navigator Skin Begin -->
        <!-- Help: http://www.jssor.com/development/slider-with-arrow-navigator-no-jquery.html -->
        <style>
            /* jssor slider arrow navigator skin 13 css */
            
            .jssora13l                  (normal)
            .jssora13r                  (normal)
            .jssora13l:hover            (normal mouseover)
            .jssora13r:hover            (normal mouseover)
            .jssora13l.jssora13ldn      (mousedown)
            .jssora13r.jssora13rdn      (mousedown)
            .jssora13l.jssora13lds      (disabled)
            .jssora13r.jssora13rds      (disabled)
            
                    .jssora13l { background-position: 10px -35px; }
            .jssora13r { background-position: 70px -35px; }
            .jssora13l:hover { background-position: -130px -35px; }
            .jssora13r:hover { background-position: -190px -35px; }
            .jssora13l.jssora13ldn { background-position: -250px -35px; }
            .jssora13r.jssora13rdn { background-position: -310px -35px; }

            .jssora13l.jssora13lds { background-position: -10px -35px; opacity: .4; pointer-events: none; }
            .jssora13r.jssora13rds { background-position: -70px -35px; opacity: .4; pointer-events: none; }
        </style>
        <!-- Arrow Left -->
        <span u="arrowleft" class="jssora13l" style="top: 123px; left: 30px; width: 800px;">
        </span>
        <!-- Arrow Right -->
        <span u="arrowright" class="jssora13r" style="top: 123px; right: 30px;">
        </span>
		
        <!--#endregion Arrow Navigator Skin End -->
        <!-- Trigger -->
        <script>
            jssor_slider1_starter('slider1_container');
        </script>

    </div>
    
    <!-- Jssor Slider End -->
<div class="modu17">
        <div class="container">
           
            <div class="modul51">
            <h5>
                 TASTY AND CRUNCHY        </h5>
                <h2> Book a Table </h2>
                <h4> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedolorm <br>reminusto doeiusmod tempor incidition ulla mco laboris nisi ut aliquip <br>ex ea commo condorico consectetur adipiscing elitut aliquip.</h4>
            </div>
           




</div>


 <div class="modul8">
        <div class="container">
            <div class="modul50">
                <!-- Jssor Slider Begin -->
   
    
    <!-- Jssor Slider End -->
            </div>
           
            <div class="modul52">
                <div class="row ">
                    <div class="col-md-4 a">
                        <div class="eltd-rf-field-holder clearfix">
                            <select name="partySize" class="eltd-ot-people">
                                <option value="1">1 Person</option>
                                <option value="2">2 People</option>
                                <option value="3">3 People</option>
                                <option value="4">4 People</option>
                                <option value="5">5 People</option>
                                <option value="6">6 People</option>
                                <option value="7">7 People</option>
                                <option value="8">8 People</option>
                                <option value="9">9 People</option>
                                <option value="10">10 People</option>
                            </select>

                        </div>




                    </div>
                    <div class="col-md-4 b">
                        <div class="eltd-rf-col-holder">
                            <div class="eltd-rf-field-holder clearfix">
                                <input type="text" value="04/06/2017" class="eltd-ot-date hasDatepicker" name="startDate" id="dp1491483675109">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 c">
                     <div class="eltd-rf-col-holder eltd-rf-time-col">
                        <div class="eltd-rf-field-holder clearfix">
                            <select name="ResTime" class="eltd-ot-time">
                                <option value="5:30pm">6:30 am</option>
                                <option value="5:30pm">7:00 am</option>
                                <option value="5:30pm">7:30 am</option>
                                <option value="5:30pm">8:00 am</option>
                                <option value="5:30pm">8:30 am</option>
                                <option value="5:30pm">9:00 am</option>
                                <option value="5:30pm">9:30 am</option>
                                <option value="5:30pm">10:00 am</option>
                                <option value="5:30pm">10:30 am</option>
                                <option value="5:30pm">11:00 am</option>
                                <option value="5:30pm">11:30 am</option>
                                <option value="5:30pm">12:00 pm</option>
                                <option value="5:30pm">12:30 pm</option>
                                <option value="5:30pm">1:00 pm</option>
                                <option value="5:30pm">1:30 pm</option>
                                <option value="5:30pm">2:00 pm</option>
                                <option value="5:30pm">2:30 pm</option>
                                <option value="5:30pm">3:00 pm</option>
                                <option value="5:30pm">3:30 pm</option>
                                <option value="5:30pm">4:00 pm</option>
                                <option value="5:30pm">4:30 pm</option>
                                <option value="5:30pm">5:00 pm</option>
                                <option value="5:30pm">5:30 pm</option>
                                <option value="6:00pm">6:00 pm</option>
                                <option value="6:30pm">6:30 pm</option>
                                <option value="7:00pm" selected="selected">7:00 pm</option>
                                <option value="7:30pm">7:30 pm</option>
                                <option value="8:00pm">8:00 pm</option>
                                <option value="8:30pm">8:30 pm</option>
                                <option value="9:00pm">9:00 pm</option>
                                <option value="9:30pm">9:30 pm</option>
                                <option value="10:00pm">10:00 pm</option>
                                <option value="10:30pm">10:30 pm</option>
                                <option value="11:00pm">11:00 pm</option>
                                <option value="11:30pm">11:30 pm</option>
                            </select>
                        </div>
                    </div>
                </div>

            </div>

            <button type="submit" class="eltd-btn eltd-btn-medium eltd-btn-solid activ"> 
              <span class="eltd-btn-text"><a href="https://www.opentable.com/r/ainsworth-midtown-reservations-new-york?restref=142273&datetime=2017-04-08T19%3A00&covers=1&searchdatetime=2017-04-08T19%3A00&partysize=1"> BOOK TABLE</a></span> 

          </button>
          <p class="eltd-rf-copyright tuuu"> POWERED BY OPENTABLE</p>
        
      </div>
	        <style type="text/css">
             .fa {
                
                padding: 0 10px;
             }
             a{
                color: #fff;
             }
             .active:hover{
                 color: #fff;
             }
              .active{
                 color: #8f8f8f;
             }
            
             .activ:hover{
                
                background: #000;
                 color: #fff;
             }
              .activ{
                
                background: #8f8f8f;
                 color: #000;
             }
             .tuuu{
                 color: #8f8f8f;
             }
}

         </style>
     








</div>
</div>






<div class="modul9">
        <div class="container-fuild">
            
          
           
      <div class="row t">
        <div class="col-md-4">

            <h5 >Twitter Feed</h5>       


            Start creating with Kreate  Expert Theme for Creative Business <br><a  href="https://t.co/3OMwJ7ru78" class="active" >https://t.co/3OMwJ7ru78</a> #WordPress #Themes #Themeforest                          


            Need a blog? Tomas &amp; Daisy  A Stylish Blog for Him and Her<br> <a href="https://t.co/tiRwNLRrnA" class="active" >https://t.co/tiRwNLRrnA</a> #WordPress #Themes #Themeforest                           



        </div>
        <div class="col-md-4"><div class="textwidget">
            <div class="wpb_single_image wpb_content_element vc_align_center">

                <figure class="wpb_wrapper vc_figure">
                    <a href="http://savory.elated-themes.com/" target="_self" class="vc_single_image-wrapper   vc_box_border_grey"><img width="30" height="39" src="./img/logohinh.png " class="vc_single_image-img attachment-full" alt="a" style="width: 90px; height: 60px;"></a>
                </figure>
            </div>

            <div class="vc_empty_space" style="height: 16px"><span class="vc_empty_space_inner"></span></div>



            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.
            <div class="vc_empty_space" style="height: 15px"><span class="vc_empty_space_inner"></span></div>

            +387648592568 <br>
            <div class="vc_empty_space" style="height: 5px"><span class="vc_empty_space_inner"></span></div>

            info@elatedthemes.com<br>
            <div class="vc_empty_space" style="height: 5px"><span class="vc_empty_space_inner"></span></div>

            Eighth Avenue 487, New York<br>
            <div class="vc_empty_space" style="height: 25px"><span class="vc_empty_space_inner"></span></div>
        </div>

        <div class="icon">
        <a href="https://vimeo.com/">
        <i class="fa fa-vimeo" aria-hidden="true"></i>
        </a>
        <a href="https://www.instagram.com/">
        <i class="fa fa-instagram" aria-hidden="true"></i>
        </a>
        <a href="https://twitter.com/">
        <i class="fa fa-twitter" aria-hidden="true"></i>
        </a>
        <a href="https://www.pinterest.com/">
        <i class="fa fa-pinterest-p" aria-hidden="true"></i>
        </a>
        <a href="https://www.facebook.com/">
        <i class="fa fa-facebook" aria-hidden="true"></i>
        </a>
         </div>
         <style type="text/css">
             .fa {
                
                padding: 0 10px;
             }
             a{
                color: #fff;
             }
             .active:hover{
                 color: #fff;
             }
              .active{
                 color: #8f8f8f;
             }
            
             .activ:hover{
                
                background: #000;
                 color: #fff;
             }
              .activ{
                
                background: #8f8f8f;
                 color: #000;
             }
             .tuuu{
                 color: #8f8f8f;
             }
}

         </style>

    </div>






    <div class="col-md-4"><div id="eltd_instagram_widget-4" class="widget eltd-footer-column-3 widget_eltd_instagram_widget"><h5 class="eltd-footer-widget-title">Instagram Feed</h5></div></div>




</div>




<div class="row r">
 <div class="col-md-4"></div>
 <div class="col-md-4"> @2016. All Rights Reserved</div>
 <div class="col-md-4"></div>









</div>
</div>


</body>
</html>
