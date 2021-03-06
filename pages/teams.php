<?php 
	require '../includes/_header.php';
?>
	<nav>
		<?php displayLogin();?>
		<ul>
			<a href="index.php"><li>Startseite</li></a>
			<a href="about.php"><li>Über uns</li></a>
			<a href="training.php"><li>Training</li></a>
			<a class="current" href=#><li>Mannschaften</li></a>
			<a href="members.php"><li>Mitglieder</li></a>
			<a href="contact.php"><li>Kontakt</li></a>
		</ul>
	</nav>
	
	<div class="container">
		<h1>Mannschaften</h1>

		<section class="main">
			<?php displayTeams(); selectMember(); selectBoard();
			if(isAdmin())
				echo '<button class="admin" onclick="addTeamMember()">Spieler zur Mannschaft hinzufügen</button>';
			?>
			<div id="displayTeamMembers">
			</div>
		</section>
	</div>
	<script src="../js/main.js"></script>
</body>
</html>