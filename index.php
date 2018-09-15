<?php 
	session_start(); 
	include 'php/scripts.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>SK</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>
	<nav>
		<ul>
			<a href=#><li>Startseite</li></a>
			<a href="pages/about.php"><li>Über uns</li></a>
			<a href="pages/training.php"><li>Training</li></a>
			<a href="pages/teams.php"><li>Mannschaften</li></a>
			<a href="pages/members.php"><li>Mitglieder</li></a>
			<a href="pages/contact.php"><li>Kontakt</li></a>
		</ul>
	</nav>
	<header>
		<div class="logo">
			<img src="img/logo.png"/>
		</div>
		<h1><div class="block">SK</div> Bad-Sooden Allendorf</h1>
	</header>
	<div class="container">
		<form id="addPost" method="POST" action="php/scripts.php">
			<input type="text" placeholder="Titel" name="title"/>
			<input type="text" placeholder="Autor" name="author"/>
			<textarea name="text">Text</textarea>
			<button type="submit" name="addPost">Abschicken</button>
		</form>
		<section class="main">
			<?php displayPosts(); ?>
		</section>
	</div>
	<script src="js/main.js"></script>
</body>
</html>