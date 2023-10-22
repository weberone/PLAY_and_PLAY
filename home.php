<?php
	$header = '';
	include 'partial/html-start.php';
	include 'partial/header.php';
?>
<!-- Modal -->
<div id="modal-registration" class="modal">
	<div class="flex h-full justify-center items-center" >
		<div class="absolute top-0 left-0 z-10 w-full h-full area"></div>
		<div class="modal-content text-center z-20">
			<span class="close">&times;</span>
			<h2 class="mb-5">Register Now!</h2>
			<p class="mb-5">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
			<?php include 'partial/form-registration.php';?>
		</div>
	</div>
</div>
<!-- Content -->
<section>
	<img src="img/image.jpg" alt="" class=" w-full anicontrast">
	<div class="container text-center relative  py-[50px]">
		<h1 class="mb-5">content</h1>
		<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio ex ducimus cupiditate? Ea quod tempore error dolorem rem odio voluptas deserunt tempora aliquid iure sit, fuga nihil molestiae eos nam.</p>
		<button id="btn-registration" class="btn mt-8">REGISTER</button>
	</div>
</section> 
<?php
	include 'partial/footer.php';
	include 'partial/html-end.php';
?> 