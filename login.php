<?php
	$header = 'page_int';
	include 'partial/html-start.php';
	include 'partial/header.php';
?>
<!-- Content -->
<section class=" bg-gradient-to-t from-gray-300 to-white text-black">
	<div class="container text-center relative pt-10 w-full lg:w-2/3">
		<div class="uppercase text-play pb-10 supply">Welcome</div>
		<h1 class=" text-black mb-10">Login</h1>
    	<p class=" pb-10">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
	</div>	
	<div class="container text-center relative w-full lg:w-2/6">
		<?php include 'partial/form-login.php';?>
	</div>	
	<div class="container relative p-0 mt-20">
		<?php include 'partial/banner.php';?>
	</div>
</section> 
<?php
	include 'partial/footer.php';
	include 'partial/html-end.php';
?> 