<html>
<head>

  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>


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
    <div class="module-2">
        <div class="container-fluid">
       
                <div class="subtitle">
                    <h5>TASTY AND CRUNCHY</h5>
                    <h2>Our Specialties	</h2>
                    <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedolorm <br> reminusto doeiusmod tempor incidition ulla mco laboris nisi ut aliquip <br>ex ea commo condorico consectetur adipiscing elitut aliquip.</h4>
                </div>
            <div class="row">
                <div class="col-md-4">
                  <img  src="images/img1.jpg ">  
                </div>
                <div class="col-md-4">
                    <img  src="images/img2.jpg ">  
                </div>
                <div class="col-md-4">
                    <img  src="images/img3.jpg ">  
                </div>
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
            <style type="text/css">
                
            </style>
    </div>
        
	
</div>
	
     
</body>
</html>