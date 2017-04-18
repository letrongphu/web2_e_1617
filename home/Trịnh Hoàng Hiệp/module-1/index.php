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
    $less->compileFile('less/module1.less', 'css/module1.css');
    ?>
    <link href="css/module1.css" rel="stylesheet" type="text/css" />
	<meta charset="UTF-8">
	<title>Light Home-Savory</title>
</head>
<body>
	<div class="module1">
	<!--Icon-->
		<div id="icon">
			<img src="img/meni-logo-dark.png" style="width: 129px; height: 63px;">
		</div>
	</div>
</body>
</html>
