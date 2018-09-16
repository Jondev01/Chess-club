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
			<a href=#><li>Mannschaften</li></a>
			<a href="members.php"><li>Mitglieder</li></a>
			<a href="contact.php"><li>Kontakt</li></a>
		</ul>
	</nav>
	<div class="container">
		<header>
			<h1>Mannschaften</h1>
		</header>

		<section class="main">
			<?php displayTeams(); selectMember(); selectBoard();?>
			<button onclick="addTeamMember()">Spieler zur Mannschaft hinzufügen</button>
			<div id="displayTeamMembers">
			</div>
		</section>
	</div>
	<script src="../js/main.js"></script>
</body>
</html>