<?php
	$header = '';
	include 'partial/html-start.php';
?>
<!-- Content -->
<section>
	<div class="relative container text-center">
		<img class="inline-block my-20" src="img/logo_play.svg" alt="logo" />
		<h1>Front-End</h1>
		<h3>Page list</h3>
		<p class="mt-5">Lista della pagine disponibili.</p>
		<div class="my-20">
			<a href="home.php" class="btn inline-block mb-5">Pagina con Modale</a>
			<a href="registration.php" class="btn inline-block mb-5">Registrazione</a>
			<a href="thankyou.php" class="btn inline-block mb-5">thankyou page</a>
			<a href="login.php" class="btn inline-block mb-5">Login</a>
			<a href="recovery_password_email.php" class="btn inline-block mb-5">Recupera password Email</a>
			<a href="recovery_password_phone.php" class="btn inline-block mb-5">Recupera password Mobile phone</a>
			<a href="profile.php" class="btn inline-block mb-5">profile</a>
			<a href="settings.php" class="btn inline-block mb-5">settings</a>
		</div>
	</div>
</section> 
<?php
	include 'partial/html-end.php';
?> 