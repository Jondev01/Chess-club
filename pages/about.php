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
			<a href=#><li>Über uns</li></a>
			<a href="training.php"><li>Training</li></a>
			<a href="teams.php"><li>Mannschaften</li></a>
			<a href="members.php"><li>Mitglieder</li></a>
			<a href="contact.php"><li>Kontakt</li></a>
		</ul>
	</nav>
	<div class="container">
		<header>
			<h1>Über uns</h1>
		</header>
		
		<section class="main">

		</section>
	</div>
	<script src="../js/main.js"></script>
	<script>setTimeout(access(<?php echo '"'; echo isset($_SESSION['user']) ? $_SESSION['user'] : false; echo '"';?>),50);</script> 
</body>
</html>