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
			<a href="about.php"><li>Über uns</li></a>
			<a href="training.php"><li>Training</li></a>
			<a href="teams.php"><li>Mannschaften</li></a>
			<a class="current" href=#><li>Mitglieder</li></a>
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
			<h1>Mitglieder</h1>
		<?php
		if(isAdmin())
			echo '<form id="addMember" class="admin" method="POST" action="../php/scripts.php">
					<input type="text" placeholder="Mitgliedsnummer" name="id"/>
					<input type="text" placeholder="Nachname" name="lName"/>
					<input type="text" placeholder="Vorname" name="fName"/>
					<input type="text" placeholder="DWZ" name="dwz"/>
					<input type="text" placeholder="Elo" name="elo"/>
					<button type="submit" name="addMember">Hinzufügen</button>
				</form>'; ?>
		<section class="main">
			<?php displayMembers(); ?>
		</section>
	</div>
	<script src="../js/main.js"></script>
</body>
</html>