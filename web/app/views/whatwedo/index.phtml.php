<?php 
ini_set('display_errors',1);  
error_reporting(E_ALL); 
?>
<!DOCTYPE html>
<html lang="en" dir="LTR">
<head>
	<?php echo $this->partial('head'); ?>
	<meta name="description" content ="Our efforts ultimately will move the nation towards a kinder, cruelty-free society that will treat vulnerable animals with compassion and respect.">
	<title>What We Do - Working for greater compassion in our society</title>
</head>
<body id="b-whatwedo">
	<?php echo $this->partial('nav-main-mobile'); ?>
		<?php echo $this->partial('nav-main'); ?>
		<header></header>
		<section id="content" class="layout">
			<h1>What We Do</h1>
			<hr/>
			<article class="content-paragraph">
				Angels for Animal Rights (AFAR) is a registered 501(c)(3) non-profit organization that runs local pet aid programs and maintains online resources committed to educating the public about at risk animals, current policies, and what can be done to make a difference in animal lives. Our local projects serve the Greater New York area and focus on bringing comfort to shelter animals and providing support for pets of military veterans.
			</article>
			<article class="content-paragraph">
				Our mission is simple: increase awareness of animal issues, assist pets and owners with limited resources, and promote cruelty-free and sustainable living. Our motto states this best, <em>"working towards a cruelty-free and compassionate world."</em>
			</article>
			<div class="img-circle-200 circle-350 whatwedo-pic"></div>
			<article class="content-paragraph">
				Under our goals, the key advocacy fields are adoption and fostering&#8212;for good reason. According to the Humane Society of the United States, shelters take in around 6-8 million dogs and cats each year, of whom 3-4 million are euthanized for lack of space. We cannot let this continue to be the norm. We believe through our collective efforts we can push for change, resulting in more favorable legislation for animals both in the U.S. and abroad.
			</article>
			<article class="content-paragraph">
				By offering virtual volunteering opportunities and using social media as a tool, we are expanding our efforts daily in saving at risk animals and preventing such conditions, in the first place. Animal loving professionals in many fields continue to contribute to our organization in order to bring information that is relevant, helpful, encouraging and engaging to affect change. We endeavor to be a reliable resource for people who want to help improve and encourage the humane treatment of animals everywhere.
			</article>
			<a href="/donate" class="cta-ghost">Help Us Out</a>
		</section><!-- #content layout -->
	<?php echo $this->partial('footer-main'); ?>
</body>
</html>