<?php 
ini_set('display_errors',1);  
error_reporting(E_ALL); 
?>
<!DOCTYPE html>
<html lang="en" dir="LTR">
<head>
	<?php echo $this->partial('head'); ?>
	<meta name="description" content ="Volunteers are at the core of our organization: the various talents that are applied to our efforts makes our goals attainable. Get involved!">
	<title>Volunteer - Help us out in what you do best</title>
</head>
<body id="b-volunteer">
	<?php echo $this->partial('nav-main-mobile'); ?>
		<?php echo $this->partial('nav-main'); ?>
		<header></header>
		<section id="content" class="layout">
			<h1>Volunteer</h1>
			<hr/>
			<article class="content-paragraph">
				Volunteers are at the core of our organization. If you want to make a difference in how our animals are treated, get involved with us. 
				<br/><br/>
				We are looking for the following help:
			</article>
		</section>

		<section class="layout mar-auto" id="content-0">
			<div class="content-left-50 no-padding">
				<ul class="volunteer">
					<li>Bloggers</li>
					<li>Editors</li>
					<li>Writers</li>
					<li>Publishers</li>
					<li>Videographers</li>
					<li>Photographers</li>
					<li>Graphic Designers</li>
					<li>Social Media Managers</li>
					<li>Marketing Analysts</li>
					<li>Event Managers</li>
				</ul><!-- volunteer -->
			</div><!-- content-left-50 -->
			<div class="content-right-50 no-padding">
				<div class="img-circle-200 circle-350 volunteer-pic"></div>
			</div><!-- content-right-50 -->
		</section><!-- #content-0 layout -->

		<section id="content-1" class="layout">
			<article class="content-paragraph">
				Even if you don't fall into one of the above categories, we could still use your help in whatever useful skill you can contribute. Find out how you can help.
			</article>
			<a href="/contact" class="cta-ghost lg-width">Volunteer with Us</a>
		</section><!-- #content layout -->
	<?php echo $this->partial('footer-main'); ?>
</body>
</html>