<?php 
ini_set('display_errors',1);  
error_reporting(E_ALL); 
?>
<!DOCTYPE html>
<html lang="en" dir="LTR">
<head>
	<?php echo $this->partial('head'); ?>
	<meta name="description" content ="The Vets Pets program allows for our honored military veterans to keep their pets healthy so that they may continue to provide support and happiness">
	<title>Vets' Pets - Because every Veteran deserves a healthy pet</title>
</head>
<body id="b-programs">
	<?php echo $this->partial('nav-main-mobile'); ?>
		<?php echo $this->partial('nav-main'); ?>
		<header id="vetspets-header"></header>
		<section id="content" class="layout">
			<h1>Vets' Pets</h1>
			<hr/>
			<div class="vets-pets vp-alt"></div>
			<article class="content-paragraph">
				Angels for Animal Rights believes that every pet serves as a form of therapy for its humans. This is especially true for our veterans, who rely on their pets for comfort and emotional support. The Vets’ Pets program is designed as a support system for veterans’ pets so they never have to worry about their best friend. AFAR helps with low-cost medical treatment, medicine, food and supplies, and training. 
			</article>
			<article class="content-paragraph">
				AFAR also finds short term fosters for Veterans when needing treatment as well as taking case by case situations for deployment and/or re-homing. Contact us for more details and please consider making a donation towards this program.
			</article><!-- content-paragraph -->
			<a href="/donate" class="cta-ghost lg-width">Help Our Vets' Pets</a>
		</section><!-- #content layout -->
	<?php echo $this->partial('footer-main'); ?>
</body>
</html>