<html>
<head>

    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">

    <?php
    if (!class_exists('lessc')) {
        include ('./libs/lessc.inc.php');
    }
    $less = new lessc;
    $less->compileFile('less/1.less', 'css/1.css');
    ?>
    <link href="css/1.css" rel="stylesheet" type="text/css" />

</head>

<body>
    <div class="modul15">
        <div class="container">
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
            <div><img u="image" src="./img/hinh4.jpg " /></div>
            <div><img u="image" src="./img/hinh3.jpg " /></div>
            <div><img u="image" src="./img/hinh2.jpg " /></div>
            <div><img u="image" src="./img/hinh1.jpg " /></div>
           
            
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


          
        
    
</div>
</div>



</body>
</html>