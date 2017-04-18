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

   <div class="module8">
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
            </div>
    </div>
</body>
</html>