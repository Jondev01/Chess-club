<?php 
	require '../includes/_header.php';
?>
	<nav>
		<?php displayLogin();?>
		<ul>
			<a class="current" href=#><li>Startseite</li></a>
			<a href="about.php"><li>Über uns</li></a>
			<a href="training.php"><li>Training</li></a>
			<a href="teams.php"><li>Mannschaften</li></a>
			<a href="members.php"><li>Mitglieder</li></a>
			<a href="contact.php"><li>Kontakt</li></a>
		</ul>
	</nav>

	<div class="container">
		<h1> Aktuell </h1>
		<?php if(isset($_SESSION['rights']) &&  $_SESSION['rights']== "admin")
				displayAddPost();
		?>
		<section class="main">
			<?php displayPosts(); ?>
		</section>
	</div>
	<script src="../js/main.js"></script>
	<script>
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace( 'ckeditor' );
    </script>
</body>
</html>