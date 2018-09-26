<?php 
	require '../includes/_header.php';
	if(!isAdmin() || !isset($_GET['id']))
		header("Location: ../pages/index.php");
?>
	<nav>
		<?php displayLogin();?>
		<ul>
			<a href="index.php"><li>Startseite</li></a>
			<a href="about.php"><li>Über uns</li></a>
			<a href="training.php"><li>Training</li></a>
			<a href="teams.php"><li>Mannschaften</li></a>
			<a href="members.php"><li>Mitglieder</li></a>
			<a href="contact.php"><li>Kontakt</li></a>
		</ul>
	</nav>

	<div class="container">
		<h1> Beitrag bearbeiten </h1>
		<?php $post = getPost($_GET['id']); ?>
		<form id="editPost" class="admin" method="POST" action="../php/scripts.php" enctype="multipart/form-data">
			<input type="text" value="<?php echo $post->title;?>" name="title"/>
			<input type="text" value="<?php echo $post->author;?>" name="author"/>
			<input type="file" name="fileToUpload" id="fileToUpload">
			<input hidden name="id" value="<?php echo $post->id;?>">
			<textarea name="text" value="<?php echo $post->text;?>" class="ckeditor"> <?php echo $post->text;?> </textarea>
			<button type="submit" name="editPost">Abschicken</button>
		</form>
			
	</div>
	<script src="../js/main.js"></script>
	<script>
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace( 'ckeditor' );
    </script>
</body>
</html>