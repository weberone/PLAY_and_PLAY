<?php
	$header = 'page_int';
	include 'partial/html-start.php';
	include 'partial/header.php';
?>
<!-- Content -->
<section class=" bg-gradient-to-t from-gray-300 to-white text-black">
	<div class="container text-center relative pt-10 w-full lg:w-2/3">
		<div class="uppercase text-play pb-10 supply">Registration</div>
		<h1 class=" text-black mb-10">Thanks for signing up!</h1>
    	<p class=" pb-10">Before getting started, could you please verify your e-mail address by clicking on the link we just e-mailed you? If you did not receive the e-mail, please try checking your spam or we will be happy to send you another one.</p>
		<button type="submit" class="btn">RESEND VERIFICATION EMAIL</button>
	</div>	
	<div class="container relative p-0 mt-20">
		<?php include 'partial/banner.php';?>
	</div>
</section> 
<?php
	include 'partial/footer.php';
	include 'partial/html-end.php';
?> 