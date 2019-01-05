<?php 
ini_set('display_errors',1);  
error_reporting(E_ALL); 
?>
<!DOCTYPE html>
<html lang="en" dir="LTR">
<head>
	<?php echo $this->partial('head'); ?>
	<meta name="description" content ="Eat well and deliciously, without putting living creatures on the plate">
	<title>Foods - Cruelty Free Living - Compassionate consumption</title>
</head>
<body id="b-resources">
	<?php echo $this->partial('nav-main-mobile'); ?>
		<?php echo $this->partial('nav-main'); ?>
		<header></header>
		<section id="content" class="layout">
			<h1>Foods - Cruelty Free </h1>
			<hr/>
			<article class="content-paragraph">
				There are so many reasons for not eating animal meats and by-products. This video is a great summary of main reasons to stop animal consumption, by Philip Wollen, former Vice President of Citibank:
			</article>
			<div class="video-container">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/uQCe4qEexjc" frameborder="0" allowfullscreen></iframe>
			</div><!-- video-container -->
			<article class="content-paragraph">
				Some more good reasons to become a vegetarian, vegan, or at minimum reduce your meat consumption:
				<p><a href="http://www.vegsource.com" class="link-regular">VegSource</a></p>
			</article>
		</section><!-- #content layout -->
	<?php echo $this->partial('footer-main'); ?>
</body>
</html>