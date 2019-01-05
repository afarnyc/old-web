<?php 
ini_set('display_errors',1);  
error_reporting(E_ALL); 
?>
<!DOCTYPE html>
<html lang="en" dir="LTR">
<head>
	<?php echo $this->partial('head'); ?>
	<meta name="description" content ="The Broadway Beds program allows for our honored military veterans to keep their pets healthy so that they may continue to provide support and happiness">
	<title>Broadway Beds - Beds for pets are comforting for pets</title>
</head>
<body id="b-programs">
	<?php echo $this->partial('nav-main-mobile'); ?>
		<?php echo $this->partial('nav-main'); ?>
		<header id="broadwaybeds-header"></header>
		<section id="content" class="layout">
			<h1>Broadway Beds</h1>
			<hr/>
			<div class="broadway-beds bb-alt"></div>
			<article class="content-paragraph">
				Every pet should have a comfortable place to sit and sleep. Created and driven by Kelly Smith&#8212;a professional costumer for Broadway, television, and film&#8212;our Broadway Beds program utilizes the skills of professional stitchers who outfit some of the biggest talents on screen and on Broadway.  
			</article>
			<article class="content-paragraph">
				On site in theaters, wardrobe departments will sew beds during the course of their show week and, as evident from our first run benefiting the decimated shelters after Super Storm Sandy, we believe that each production can create 100 beds in a week. Every pet deserves a comfortable place to rest their paws on--we can provide this for them.
			</article>
			<article class="content-paragraph">
				As part of our expansion, AFAR also aims to bring Broadway Beds into the classrooms of fashion students who can benefit from the supervision of professional costumers as well as become introduced to the world of animal welfare and learn about the humane pet business from our sponsors who will provide prizes for innovative designs. 
			</article>
			<article class="content-paragraph">
				Contact us for more details and please consider making a donation towards this program. We are also in need of fabrics and related materials; such in kind donations would be incredibly helpful.
			</article><!-- content-paragraph -->
			<a href="/donate" class="cta-ghost lg-width">Give Beds to Pets</a>
		</section><!-- #content layout -->
	<?php echo $this->partial('footer-main'); ?>
</body>
</html>