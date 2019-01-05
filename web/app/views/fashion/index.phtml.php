<?php 
ini_set('display_errors',1);  
error_reporting(E_ALL); 
?>
<!DOCTYPE html>
<html lang="en" dir="LTR">
<head>
	<?php echo $this->partial('head'); ?>
	<meta name="description" content ="It is possible to be chic or dapper without harming our animal friends ">
	<title>Fashion - Cruelty Free Living - Fashion to look and feel good</title>
</head>
<body id="b-resources">
	<?php echo $this->partial('nav-main-mobile'); ?>
		<?php echo $this->partial('nav-main'); ?>
		<header></header>
		<section id="content" class="layout">
			<h1>Fashion - Cruelty Free </h1>
			<hr/>
			<article class="content-paragraph">
				In this day and age, finding cruelty-free clothing and accessories could not be easier. Wearing animal skins / by-products is so last century! Have a look at some incredible designers and brands that adhere to compassionate fashion:
			</article>
		</section><!-- #content layout -->
		<section class="layout" id="content-0">
			<div class="blurb blurb-first">
				<div class="blurb-header">
					<div class="blurb-title">John Bartlett</div>
					<div class="blurb-date">New York, NY</div>
				</div><!-- blurb-header -->
				<div class="blurb-text">
					John Bartlett is an award winning designer who is a vegan and wants to design vegan, too. 
					Bartlett said he will wait to present during NYC's coveted Fashion Week until he 
					has established alternatives to all animal-derived elements within his work. 
					<p><a class="link-regular" href="http://www.nbcnewyork.com/blogs/niteside/John-Bartlett-I-Want-to-Be-a-One-Hundred-Percent-Vegan-Designer-115481749.html" target="_blank">NBC article here</a></p>
					For more information about this animal loving designer who not only “talks the talk” 
					but “walks the walk” too, and to support his Tiny Tim Fund which raises money for 
					shelters in memory of his late rescued pit bull.
					<p><a href="http://www.johnbartlettny.com/about" class="link-regular" target="_blank">Go to his website</a></p>
					<div class="blurb-photo j-bartlett-0"></div>
				</div><!-- blurb-text -->
			</div><!-- blurb -->
		</section><!-- #content-0 layout -->
	<?php echo $this->partial('footer-main'); ?>
</body>
</html>