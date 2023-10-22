<?php
	$header = 'page_int';
	include 'partial/html-start.php';
	include 'partial/header.php';
?>
<!-- Content -->
<section>
	<div class="grid grid-cols-1 lg:grid-cols-5 lg:gap-0">
		<div class="lg:col-span-1 bg-gradient-to-t from-navi-500 to-navi-700 pl-12  lg:pl-28">
			<nav  class="supply py-5">
				<ul>
					<li class="uppercase py-3 px-5 border-b hover:bg-navi-500 border-play text-play"><a class="block" href="#">my profile</a></li>
					<li class="uppercase py-3 px-5 hover:bg-navi-500"><a class="block" href="#">my wallet</a></li>
					<li class="uppercase py-3 px-5 hover:bg-navi-500"><a class="block" href="settings.php">setting</a></li>
					<li class="uppercase py-3 px-5 hover:bg-navi-500"><a class="block" href="#">logout</a></li>
				</ul>
			</nav>
		</div>
		<div class="lg:col-span-4">
			<div class="lg:col-span-3 bg-navi-300 px-12 lg:px-28 py-16 flex">
				<div class="inline-block mr-10">
					<img class="rounded-full" src="img/user.png" alt="">	
				</div>
				<div class="inline-block w-full">
					<p class="uppercase mb-1">username</p>
					<h2 class="uppercase text-green mb-5">WArrior99</h2>
					<div class="relative mb-1">
						<p class="uppercase text-play">Complete your profile</p>
						<p class="uppercase absolute right-0 top-0"><img src="img/diamond-w.svg" alt="" class="w-[15px] inline-block"> 250 credits</p>
					</div>
					<div class="w-full bg-navi-700 h-3 relative mb-5"><!-- progressbar -->
						<div class="w-[50%] bg-play h-full absolute top-0 left-0"></div>
					</div>
					<div class="relative">
						<p class="uppercase">(<span class="text-play">2/4</span> Tasks Completed)</p>
						<p class="uppercase absolute right-0 top-0"><button class="btn btn-small">Get you Reward!</button></p><!-- bottone che compare solo al completamenteo di tutti i task --> 
					</div>
				</div>
			</div>
			<div class="lg:col-span-3 px-12 lg:px-28 py-16 bg-gradient-to-t from-gray-300 to-white text-black relative">
				<div class="float-right supply uppercase text-black"><a href="#" class="hover:underline"><img src="img/pen.svg" alt="" class="w-3 inline-block"> edit</a></div>
				<h3 class="text-black inline mr-5">personal details</h3>
				<div class="grid grid-cols-2 lg:grid-cols-4 lg:gap-0 my-8">
					<div class="">
						<div class="label">First Name</div>
						<p class="supply">Paolo</p>
					</div>
					<div class="">
						<div class="label">Last Name</div>
						<p class="supply">Banzi</p>
					</div>
					<div class="">
						<div class="label">Phone Number</div>
						<p class="supply">+39 3391234567</p>
					</div>
					<div class="">
						<div class="label">Email Address</div>
						<p class="supply">paolo.b@gmail.com</p>
					</div>
				</div>
				<hr class="border border-gray-300 my-12">
				<h3 class="text-black inline mr-5">OTHER details</h3>
				<div class="float-right supply uppercase text-black"><a href="#" class="hover:underline"><img src="img/pen.svg" alt="" class="w-3 inline-block"> edit</a></div>
				<div class="grid grid-cols-2 lg:grid-cols-4 lg:gap-0 my-8">
					<div class="">
						<div class="label">Username</div>
						<p class="supply">Warriors99</p>
					</div>
					<div class="">
						<div class="label">Password</div>
						<p class="supply">*******</p>
					</div>
				</div>
				<div class="">
					<div class="label">Time Zone</div>
					<p class="supply">(UTC+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm</p>
				</div>
			</div>
		</div>
	</div>
</section> 
<?php
	include 'partial/footer.php';
	include 'partial/html-end.php';
?> 