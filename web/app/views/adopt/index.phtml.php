<?php 
ini_set('display_errors',1);  
error_reporting(E_ALL); 
?>
<!DOCTYPE html>
<html lang="en" dir="LTR">
<head>
	<?php echo $this->partial('head'); ?>
	<meta name="description" content ="Adopting, as opposed to buying, a pet reduces the homeless pet population as well as the operations of breeding mills">
	<title>Adopt - Information on adopting your first pet</title>
</head>
<body id="b-resources">
	<?php echo $this->partial('nav-main-mobile'); ?>
		<?php echo $this->partial('nav-main'); ?>
		<header></header>
		<section id="content" class="layout">
			<h1>Adoption</h1>
			<hr/>
			<article class="content-paragraph">
				Adopting a pet is one of the best ways to add a new member to your family. Not only does it reduce the rising homeless pet population but it also works to curb the operations of breeding mills. Here is a video analyzing the most common myths and misconceptions about adopting pets. 
			</article>
			<div class="video-container">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/wtCyZQRnEvw" frameborder="0" allowfullscreen></iframe>
			</div><!-- video-container -->
			<article class="content-paragraph">
				It is stated that around 2.5 million puppies are sold at pet stores each year in the U.S. This, along with the millions of other kinds of pets sold each year, contribute to a surplus of domestic animals that is not sustainable for our society. If everyone who wanted a pet adopted instead of bought, there would be millions less animals in shelters today. Please consider adoption as your ONLY choice when getting a new friend. Have a look at the sites below for more information:
				<p><a href="http://petfinder.com" class="link-regular" target="www.petfinder.com">www.petfinder.com</a></p>
				<p><a href="http://petango.com" class="link-regular" target="www.petango.com">www.petango.com</a></p>
				<p><a href="http://adoptapet.com" class="link-regular" target="www.adoptapet.com">www.adoptapet.com</a></p>
				<p><a href="http://nycacc.org " class="link-regular" target="www.nycacc.org ">www.nycacc.org </a></p>
				<p><a href="http://animalalliancenyc.org" class="link-regular" target="www.animalalliancenyc.org">www.animalalliancenyc.org</a></p>
			</article>
		</section><!-- #content layout -->
	<?php echo $this->partial('footer-main'); ?>
</body>
</html>