<?php 
ini_set('display_errors',1);  
error_reporting(E_ALL); 
?>
<!DOCTYPE html>
<html lang="en" dir="LTR">
<head>
	<?php echo $this->partial('head'); ?>
	<meta name="description" content ="Get in touch with Angels for Animal Rights by emailing or calling us directly. We are based in New York City.">
	<title>Contact - Get connected with Angels for Animal Rights</title>
</head>
<body id="b-contact">
	<?php echo $this->partial('nav-main-mobile'); ?>
		<?php echo $this->partial('nav-main'); ?>
		<header></header>
		<section id="content" class="layout">
			<h1>Contact Us</h1>
			<hr/>
			<article class="content-paragraph">
				Whether you want to find out more about our programs, what we do, donations, volunteer opportunities, and more, send us an email and we'll get back to you as soon as we can:
			</article>
			<a href="mailto:contact@afarnyc.org" class="cta-ghost xl-width">contact@afarnyc.org</a>
		</section><!-- #content layout -->
	<?php echo $this->partial('footer-main'); ?>
</body>
</html>