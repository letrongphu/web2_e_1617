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

  <div class="module7">
        <div class="container-fluid">
              <div class="subtitle">
                    <h5>TASTY AND CRUNCHY</h5>
                    <h2>Our Specialties </h2>
                    <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedolorm <br> reminusto doeiusmod tempor incidition ulla mco laboris nisi ut aliquip <br>ex ea commo condorico consectetur adipiscing elitut aliquip.</h4>
              </div>
        </div>
    </div>
</body>
</html>