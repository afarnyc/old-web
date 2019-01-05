<?php 
ini_set('display_errors',1);  
error_reporting(E_ALL); 
?>
<!DOCTYPE html>
<html lang="en" dir="LTR">
<head>
	<?php echo $this->partial('head'); ?>
	<meta name="description" content ="Reliable information on fostering, adopting, and rescuing pets as well as cruelty-free living and current animal legislation">
	<title>Resources - All about fostering, adoptions, legislation and more</title>
</head>
<body id="b-resources">
	<?php echo $this->partial('nav-main-mobile'); ?>
		<?php echo $this->partial('nav-main'); ?>
		<header></header>
		<section id="content" class="layout">
			<h1>Resources</h1>
			<hr/>
			<article class="content-paragraph">
				As part of our mission to increase awareness of animal welfare, we've compiled an extensive list on everything from fostering, adopting, and even how to live cruelty-free. Have a look below:
			</article>
		</section><!-- #content layout -->
		<section id="content-0" class="layout-med">
			<a href="/adopt">
				<div class="content-left-50-med">
					<div class="r-one"><span></span></div><!-- r-one -->
					<h2 class="info-title">Adopt</h2>
					<article class="info">
						Adopting, as opposed to buying, a pet reduces the homeless pet population as well as the operations of breeding mills 
					</article>
				</div><!-- content-left-50-med -->
			</a>
			<a href="/foster">
				<div class="content-right-50-med">
					<div class="r-two"><span></span></div><!-- r-two -->
					<h2 class="info-title">Foster</h2>
					<article class="info">
						A temporary home for a pet is better than staying at a shelter, where supplies and human interaction are often limited  
					</article><!-- info -->
				</div><!-- content-right-50-med -->
			</a>
		</section><!-- layout-med -->
		<section class="layout-med">
			<a href="/legislation">
				<div class="content-left-50-med">
					<div class="r-three"><span></span></div><!-- r-three -->
					<h2 class="info-title">Legislation</h2>
					<article class="info">
						Laws pertaining to animal welfare are constantly changing for the better, both in the U.S. and internationally
					</article>
				</div><!-- content-left-50-med -->
			</a>
			<a href="/crueltyfree">
				<div class="content-right-50-med">
					<div class="r-four"><span></span></div><!-- r-four -->
					<h2 class="info-title">Cruelty Free</h2>
					<article class="info">
						Living cruelty-free is good for animals as well as for our planet&#8212;<em>we</em> are the only ones who can make a difference
					</article>
				</div><!-- content-right-50-med -->
			</a>
		</section><!-- layout-med -->
	<?php echo $this->partial('footer-main'); ?>
</body>
</html>