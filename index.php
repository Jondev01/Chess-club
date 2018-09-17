<?php 
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
	<header class="fixed-header">
		<div class="logo">
			<img src="img/logo.png"/>
		</div>
		<h1 class="header-title"><div class="block">Schachklub</div> Bad Sooden-Allendorf</h1>
	</header>
	<div class="container">
		<!--<?php 
				if(isset($_SESSION['user']) && $_SESSION['user']=="admin"){
					echo '<h1>Angemeldet</h1>';
				} else{
					echo '<h1>Nicht Angemeldet</h1>';
				}
		?>-->
		<form id="login" method="post" action="php/login.php">
		<input type="text" placeholder="Benutzername" name="username"/>
		<input type="password" placeholder="Passwort" name="password"/>
		<button type="submit" name="login">Anmelden</button>
		</form>
		<form id="addPost" class="admin" method="POST" action="php/scripts.php" enctype="multipart/form-data">
			<input type="text" placeholder="Titel" name="title"/>
			<input type="text" placeholder="Autor" name="author"/>
			<input type="file" name="fileToUpload" id="fileToUpload">
			<textarea name="text">Text</textarea>
			<button type="submit" name="addPost">Abschicken</button>
		</form>
		<section class="main">
			<?php displayPosts(); ?>
		</section>
	</div>
	<script src="js/main.js"></script>
	<script>isAdmin(<?php echo isset($_SESSION['user']) && $_SESSION['user']=="admin"?>)</script>; 
</body>
</html>