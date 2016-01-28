<!DOCTYPE html>
<html>
<head>
	<title>Rijschool Rocket</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
	<script type="text/javascript" src="assets/js/youtube.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script>
	$(document).ready(function(){
	    $(".hamburger").click(function(){
	        $(".mobile").toggle();
	    });
	});
	</script>
</head>
<body>
<header>
	<div class="container">
		<div class="logo-txt">
			RijschooLRocket
		</div>
		<div class="hamburger">
			<i class="glyphicon glyphicon-menu-hamburger"></i>
		</div>
		<ul class="mobile">
			<li>
				<a href="index.php"><i class="glyphicon glyphicon-home"></i></a>
			</li>
			<li><a href="opleidingen.php">Opleidingen</a></li>
			<li><a href="prijzen.php">Paketten</a></li>
			<li><a href="lesautos.php">Lesauto's</a></li>
			<li><a href="instructeurs.php">Rijinstructeurs</a></li>
			<li><a href="contact.php">Contact</a></li>
			<li>
				<a href="inloggen.php"><i class="glyphicon glyphicon-user"></i></a>
			</li>
		</ul>
	</div>
</header>

<div class="rijschool-reviews">
	<div class="container">
		<div class="row">
			<div id="user-review"></div>
		</div>
	</div>
</div>

