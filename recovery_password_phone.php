<?php
	$header = 'page_int';
	include 'partial/html-start.php';
	include 'partial/header.php';
?>
<!-- Content -->
<section class=" bg-gradient-to-t from-gray-300 to-white text-black">
	<div class="container text-center relative pt-10 w-full lg:w-2/3">
		<div class="uppercase text-play pb-10 supply">Login</div>
		<h1 class=" text-black mb-10">Forgot your password?</h1>
    	<p class=" pb-10">No problem. Just let us know your mobile phone number and we will send you a password reset link that will allow you to choose a new one.</p>
	</div>	
	<div class="container text-center relative w-full lg:w-2/6">
		<?php include 'partial/form-password-phone.php';?>
	</div>	
	<div class="container relative p-0 mt-20">
		<?php include 'partial/banner.php';?>
	</div>
</section> 
<?php
	include 'partial/footer.php';
	include 'partial/html-end.php';
?> 