<?php 
	session_start(); 
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
			<a href=#><li>Mitglieder</li></a>
			<a href="contact.php"><li>Kontakt</li></a>
		</ul>
	</nav>
	<div class="container">
		<header>
			<h1>Mitglieder</h1>
		</header>
		<form id="addMember" method="POST" action="../php/scripts.php">
			<input type="text" placeholder="Mitgliedsnummer" name="id"/>
			<input type="text" placeholder="Nachname" name="lName"/>
			<input type="text" placeholder="Vorname" name="fName"/>
			<input type="text" placeholder="DWZ" name="dwz"/>
			<input type="text" placeholder="Elo" name="elo"/>
			<button type="submit" name="addMember">Hinzufügen</button>
		</form>
		<section class="main">
			<?php displayMembers(); ?>
		</section>
	</div>
	<script src="../js/main.js"></script>
</body>
</html>