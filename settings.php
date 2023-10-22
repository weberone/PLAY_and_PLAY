<?php
	$header = 'page_int';
	include 'partial/html-start.php';
	include 'partial/header.php';
?>
<!-- Content -->
<section>
	<div class="grid grid-cols-1 lg:grid-cols-5 lg:gap-0">
		<div class="lg:col-span-1 bg-gradient-to-t from-navi-500 to-navi-700 lg:pl-28">
			<nav  class="supply py-5">
				<ul>
					<li class="uppercase py-2 px-5 hover:bg-navi-500"><a class="block" href="profile.php">my profile</a></li>
					<li class="uppercase py-2 px-5 hover:bg-navi-500"><a class="block" href="#">my wallet</a></li>
					<li class="uppercase py-2 px-5 border-b hover:bg-navi-500 border-play text-play"><a class="block" href="#">setting</a></li>
					<li class="uppercase py-2 px-5 hover:bg-navi-500"><a class="block" href="#">logout</a></li>
				</ul>
			</nav>
		</div>
		<div class="lg:col-span-4">
			<div class="lg:col-span-3 px-28 py-16 bg-gradient-to-t from-gray-300 to-white text-black relative">
				<h3 class="text-black mb-8">Notifications</h3>
				<p>We'll always let you know about important changes, but you pick what else you want to hear about.</p>
				<div class="py-2">
					<input id="accept" type="checkbox" value="" class="checkbox-style" required>
					<label class="supply mt-5 inline-block">Team Invitation</label>
					<p>An email will be sent if any team leader invites you to their team.</p>
				</div>
				<div class="py-2">
					<input id="accept" type="checkbox" value="" class="checkbox-style" required>
					<label class="supply mt-5 inline-block">Message</label>
					<p>An email arrives as soon as someone sends you a message on the platform.</p>
				</div>
				<div class="py-2">
					<input id="accept" type="checkbox" value="" class="checkbox-style" required>
					<label class="supply mt-5 inline-block">Tournament registration</label>
					<p>An email arrives as soon as you register or check in for a tournament offer.</p>
				</div>
				<div class="py-2 mb-3">
					<input id="accept" type="checkbox" value="" class="checkbox-style" required>
					<label class="supply mt-5 inline-block">Challenge overcome</label>
					<p>An email arrives as soon as you overcome a challenge offer.</p>
				</div>
				<button type="submit" class="btn">SAVE</button>
			</div>
		</div>
	</div>
</section> 
<?php
	include 'partial/footer.php';
	include 'partial/html-end.php';
?> 