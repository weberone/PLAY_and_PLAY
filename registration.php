<?php
	$header = 'page_int';
	include 'partial/html-start.php';
	include 'partial/header.php';
?>
<!-- Content -->
<section class=" bg-gradient-to-t from-gray-300 to-white text-black">
	<div class="container text-center relative pt-10 w-full lg:w-2/3">
		<div class="uppercase text-play pb-10 supply">registration</div>
		<h1 class=" text-black mb-10">Join Play&Play and get ready to amplify your gaming experience</h1>
    	<p class=" pb-10">To compete and win in tournaments or to just have fun while improving your game, nothing beats joining a real immersive esport platform. <br/><br/>Fill out the form below and you’ll ready to start! <br/><strong>All skill levels are welcome!</strong></p>
	</div>	
	<div class="container text-center relative w-full lg:w-2/6">
		<?php include 'partial/form-registration.php';?>
	</div>	
	<div class="container relative p-0 mt-20">
		<?php include 'partial/banner.php';?>
	</div>
</section> 
<?php
	include 'partial/footer.php';
	include 'partial/html-end.php';
?> 