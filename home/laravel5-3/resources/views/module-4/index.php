<!DOCTYPE html>
<html lang="en">
<head>
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

   
    <link href="css/module4.css" rel="stylesheet" type="text/css" />
	<meta charset="UTF-8">
	<title>Light Home-Savory</title>
</head>
<body>
	<div class="module4">

	<!--Overlay-->
		<div id="overlay">
			<p onclick="off()">x</p>
			<div class="search">
				<span>Search</span>
				<input type="text" name="search">
				<span class="glyphicon glyphicon-search" onclick="off()"></span>
			</div>
		</div>


	<!--Search-->
		<div class="search-icon">
			<span class="glyphicon glyphicon-search" onclick="on()"></span>
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
