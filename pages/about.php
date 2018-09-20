<?php 
	include '../php/scripts.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>SK</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/styles.css">
</head>
<body>
	<nav>
		<ul>
			<a href="../index.php"><li>Startseite</li></a>
			<a class="current" href=#><li>Über uns</li></a>
			<a href="training.php"><li>Training</li></a>
			<a href="teams.php"><li>Mannschaften</li></a>
			<a href="members.php"><li>Mitglieder</li></a>
			<a href="contact.php"><li>Kontakt</li></a>
		</ul>
	</nav>
	<header class="fixed-header">
		<div class="logo">
			<img src="../img/logo.png"/>
		</div>
		<h1 class="header-title"><div class="block">Schachklub</div> Bad Sooden-Allendorf</h1>
	</header>
	<div class="container">
		<h1>Über uns</h1>
		
		<section class="main">

		</section>
	</div>
	<script src="../js/main.js"></script>
	<script>setTimeout(access(<?php echo '"'; echo isset($_SESSION['user']) ? $_SESSION['user'] : false; echo '"';?>),50);</script> 
</body>
</html>