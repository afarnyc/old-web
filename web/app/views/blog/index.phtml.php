<?php 
ini_set('display_errors',1);  
error_reporting(E_ALL); 
?>
<!DOCTYPE html>
<html lang="en" dir="LTR">
<head>
	<?php echo $this->partial('head'); ?>
	<meta name="description" content ="Angel for Animal Rights blog for pet stories, updates, animal welfare discussions, and more">
	<title>A Blog from AFAR - A hub for stories and animal welfare knowledge</title>
</head>
<body>
	<?php echo $this->partial('nav-main-mobile'); ?>
		<?php echo $this->partial('nav-main'); ?>
		<header></header>
		<section id="content" class="layout">
			<h1>A Blog from AFAR</h1>
			<hr/>
			<article class="content-paragraph">
				Coming real soon! In the meatime, have a look around the rest of our site:
			</article>
			<a href="/about" class="cta-ghost">About Us</a>
		</section><!-- #content layout -->
	<?php echo $this->partial('footer-main'); ?>
</body>
</html>