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
    $less->compileFile('less/module4.less', 'css/module4.css');
    ?>
    <link href="css/module4.css" rel="stylesheet" type="text/css" />
	<meta charset="UTF-8">
	<title>Light Home-Savory</title>
</head>
<body>
	<div class="module4">

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


	</div>

	<script>

	//On or off overlay
	function on() {
	    document.getElementById("overlay").style.display = "block";
	}

	function off() {
	    document.getElementById("overlay").style.display = "none";
	}
	</script>
	
</body>
</html>
