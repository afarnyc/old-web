<?php 
ini_set('display_errors',1);  
error_reporting(E_ALL); 
?>
<!DOCTYPE html>
<html lang="en" dir="LTR">
<head>
	<?php echo $this->partial('head'); ?>
	<meta name="description" content ="Our programs aim to help war veterans who cannot afford veterinary costs and pet expenses and to provide beds for pets in the Greater New York area">
	<title>Programs - Vets Pets and Broadway Beds</title>
</head>
<body id="b-programs">
	<?php echo $this->partial('nav-main-mobile'); ?>
		<?php echo $this->partial('nav-main'); ?>
		<header></header>
		<section id="content" class="layout">
			<h1>Our Programs</h1>
			<hr/>
			<article class="content-paragraph">
				Our programs, serving the Greater New York area, aim to keep pets healthy and comfortable. They focus on helping military veterans who cannot afford veterinary and basic expenses for their pets and creating comfortable bedding for pets to sleep / lounge on. Find out more about our programs below:
			</article>
		</section><!-- #content layout -->
		<section id="content-0" class="layout">
			<a href="/vetspets">
				<div class="content-left-50 content-programs">
					<div class="vets-pets"></div><!-- vets-pets -->
					<div class="cta-ghost">Vets' Pets</div>
				</div><!-- content-left-50 -->
			</a>
			<a href="/broadwaybeds">
				<div class="content-right-50 content-programs">
					<div class="broadway-beds"></div><!-- broadway-beds -->
					<div class="cta-ghost">Broadway Beds</div>
				</div><!-- content-right-50 -->
			</a>
		</section><!-- #content-0 layout -->
	<?php echo $this->partial('footer-main'); ?>
</body>
</html>