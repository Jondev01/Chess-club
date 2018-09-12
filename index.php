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
			<a href=#><li>Über uns</li></a>
			<a href=#><li>Training</li></a>
			<a href=#><li>Mannschaften</li></a>
			<a href=#><li>Mitglieder</li></a>
			<a href=#><li>Kontakt</li></a>
		</ul>
	</nav>
	<div class="container">
		<header>
			<h1>SK Bad-Sooden Allendorf</h1>
		</header>
		<form id="addPost" method="POST" action="php/scripts.php">
			<input type="text" placeholder="Titel" name="title"/>
			<input type="text" placeholder="Autor" name="author"/>
			<textarea name="text">Text</textarea>
			<button type="submit" name="submit">Abschicken</button>
		</form>
		<section class="main">
			<?php displayPosts(); ?>
		</section>
	</div>
	<script src="js/main.js"></script>
</body>
</html>