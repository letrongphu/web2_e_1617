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

  <div class="module4">
   
     <div class=" row">
        <div class="col-md-6">
          <img src="images/img4.jpg"> 
        </div> 
        <div class="col-md-6">
          <h5>TASTY AND CRUNCHY</h5>
          <h2>Losos & Vegetables</h2>
          <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidition ullamco laboris nisi ut aliquip ex ea commodo condorico consectetur adipiscing elit, sed do eiusmod tempor incidition.</h4>
          <span class="btn-text">VIEW OUR MENU</span>
        </div>
      </div>

      
        <div class="col-md-6">
          <h5>TASTY AND CRUNCHY</h5>
          <h2>Chicken Tagliatelle</h2>
          <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidition ullamco laboris nisi ut aliquip ex ea commodo condorico consectetur adipiscing elit, sed do eiusmod tempor incidition.</h4>
          <span class="btn-text">VIEW OUR MENU</span>
        </div>
        <div class="col-md-6">
          <img src="images/img5.jpg"> 
        </div> 
    

        <div class="col-md-6">
          <img src="images/img6.jpg"> 
        </div> 
        <div class="col-md-6">
          <h5>TASTY AND CRUNCHY</h5>
          <h2>Sweet Melancholia</h2>
          <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidition ullamco laboris nisi ut aliquip ex ea commodo condorico consectetur adipiscing elit, sed do eiusmod tempor incidition.</h4>
          <span class="btn-text">VIEW OUR MENU</span>
        </div>
      
  </div>  
</body>
</html>