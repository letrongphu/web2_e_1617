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
    <div class="modul5">
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
    
    
    <div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 800px;
        height: 300px; overflow: hidden;">
        <!-- Slides Container -->
        <div u="slides" style="position: absolute; left: 0px; top: 20px; width: 800px; height: 150px;
            overflow: hidden;">

            <div><img u="image" src="./img/hinh5.jpg" /></div>
            <div><img u="image" src="./img/hinh4.jpg" /></div>
            <div><img u="image" src="./img/hinh3.jpg" /></div>
            <div><img u="image" src="./img/hinh2.jpg" /></div>
            <div><img u="image" src="./img/hinh1.jpg" /></div>
           
            
        </div>
        <div class="pp_hoverContainer" style="height: 414px; width: 342px;">                                             <a class="pp_next" href="#"><span class="fa fa-angle-right"></span></a>                                             <a class="pp_previous" href="#"><span class="fa fa-angle-left"></span></a>                                         </div>
        <!--#region Arrow Navigator Skin Begin -->
        <!-- Help: http://www.jssor.com/development/slider-with-arrow-navigator-no-jquery.html -->
        <style>
            /* jssor slider arrow navigator skin 13 css */
            /*
            .jssora13l                  (normal)
            .jssora13r                  (normal)
            .jssora13l:hover            (normal mouseover)
            .jssora13r:hover            (normal mouseover)
            .jssora13l.jssora13ldn      (mousedown)
            .jssora13r.jssora13rdn      (mousedown)
            .jssora13l.jssora13lds      (disabled)
            .jssora13r.jssora13rds      (disabled)
            */
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
            <div class="modul51">
            <h5>
                 TASTY AND CRUNCHY        </h5>
                <h2> Book a Table </h2>
                <h4> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedolorm reminusto doeiusmod tempor <br>incidition ulla mco laboris nisi ut aliquip ex ea commo condorico consectetur adipiscing elitut aliquip.</h4>
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
      <div class="row t">
        <div class="col-md-4">

            <h5 >Twitter Feed</h5>       


            Start creating with Kreate  Expert Theme for Creative Business <br><a  href="https://t.co/3OMwJ7ru78" class="active" >https://t.co/3OMwJ7ru78</a> #WordPress #Themes #Themeforest                          


            Need a blog? Tomas &amp; Daisy  A Stylish Blog for Him and Her<br> <a href="https://t.co/tiRwNLRrnA" class="active" >https://t.co/tiRwNLRrnA</a> #WordPress #Themes #Themeforest                           



        </div>
        <div class="col-md-4"><div class="textwidget">
            <div class="wpb_single_image wpb_content_element vc_align_center">

                <figure class="wpb_wrapper vc_figure">
                    <a href="http://savory.elated-themes.com/" target="_self" class="vc_single_image-wrapper   vc_box_border_grey"><img width="129" height="63" src="http://savory.elated-themes.com/wp-content/uploads/2016/10/logo-footer.png" class="vc_single_image-img attachment-full" alt="a"></a>
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