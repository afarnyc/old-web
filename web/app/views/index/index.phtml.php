<?php 
ini_set('display_errors',1);  
error_reporting(E_ALL); 
?>
<!DOCTYPE html>
<html lang="en" dir="LTR">
<head>
	<?php echo $this->partial('head'); ?>
	<meta property="og:site_name" content="Angels for Animal Rights (AFAR)" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Angels for Animal Rights - Towards a cruelty-free world" />
    <meta property="og:description" content="We represent all the animal angels who are in current need or have gone before us. Their legacy lives on through our programs, education, and initiatives." />
    <meta property="og:url" content="http://afarnyc.org/" />
    <meta property="og:image" content="http://afarnyc.org/img/photos/homepage-fb.jpg" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Angels for Animal Rights (AFAR)" />
    <meta name="twitter:description" content="We represent all the animal angels who are in current need or have gone before us. Their legacy lives on through our programs, education, and initiatives." />
    <meta name="twitter:url" content="http://afarnyc.org/" />
    <meta name="twitter:image:src" content="http://afarnyc.org/img/photos/homepage.jpg" />
	<meta name="description" content ="We represent all the animal angels who are in current need or have gone before us. Their legacy lives on through our programs, education, and initiatives.">
	<title>Angels for Animal Rights - Towards a cruelty free world, New York City</title>

</head>
<body>
	<?php echo $this->partial('nav-homepage-mobile'); ?>
		<div class="homepage-header">
			<section class="layout">
				<div class="logo">
					<a href="/"><div class="logo-img"></div></a>
				</div><!-- logo -->
				<div class="slogan">
					<p>Angels for Animal Rights</p>
					<hr>
					<p>Working towards a cruelty-free and compassionate world</p>
				</div><!-- slogan -->
			</section><!-- layout -->
		</div>
		<?php echo $this->partial('nav-homepage'); ?>
		<a href="/vetspets">
			<div class="hero homepage-hero-1">
				<div class="hero-text">
					<div class="hero-message">Help our veterans care for their pets.</div>
					<div class="cta-ghost ghost-hero">Learn more</div>
				</div><!-- hero-text -->
			</div><!-- hero -->
		</a>
		<section class="layout">
			<a href="/programs">
				<div class="info-one">
					<div class="graphic-one"><span></span></div><!-- graphic-one -->
					<h2 class="info-title">Programs</h2>
					<article class="info">
						Our two NYC based programs aim to help the pets of in need owners and to improve their comfortability by providing basic necessities. 
						<div class="cta-ghost-homepage sm-width">Learn more</div>
					</article><!-- home-info -->
				</div><!-- info-one -->
			</a>
			<a href="/whatwedo">
				<div class="info-two">
					<div class="graphic-two"><span></span></div><!-- graphic-two -->
					<h2 class="info-title">Advocacy</h2>
					<article class="info">
						We, above all else, champion the welfare of all animals&#8212;not just domestic ones. Our efforts make sure their rights are known.
						<div class="cta-ghost-homepage sm-width">Read more</div>
					</article><!-- home-info -->
				</div><!-- info-two -->
			</a>
			<a href="/resources">
				<div class="info-three">
					<div class="graphic-three"><span></span></div><!-- graphic-three -->
					<h2 class="info-title">Resources</h2>
					<article class="info">
						Look no further. We have information on everything from adoption to fostering, cruelty-free products, and more.
						<div class="cta-ghost-homepage sm-width">Have a look</div>
					</article><!-- home-info -->
				</div><!-- info-three -->
			</a>
		</section><!-- layout -->
		<a href="/donate">
			<div class="hero homepage-hero-2">
				<div class="hero-text">
					<div class="hero-message">Make a difference in animal lives.</div>
					<div class="cta-ghost ghost-hero">Help Today</div>
				</div><!-- hero-text -->
			</div><!-- hero -->
		</a>
	<?php echo $this->partial('footer-main'); ?>
</body>
</html>