<?php 
ini_set('display_errors',1);  
error_reporting(E_ALL); 
?>
<!DOCTYPE html>
<html lang="en" dir="LTR">
<head>
	<?php echo $this->partial('head'); ?>
	<meta name="description" content ="Living cruelty-free is good for animals as well as for our planet, we are the only ones who can make a difference">
	<title>Cruelty Free Living - Living for our animals and planet</title>
</head>
<body id="b-resources">
	<?php echo $this->partial('nav-main-mobile'); ?>
		<?php echo $this->partial('nav-main'); ?>
		<header></header>
		<section id="content" class="layout">
			<h1>Cruelty Free Living</h1>
			<hr/>
			<article class="content-paragraph">
				Reducing our consumption of products that harm animals is a key step towards improved animal well-being. Not only is cruelty-free living good for our animal friends but it helps our planet become more sustainable. Have a look below:
			</article>
		</section><!-- #content layout -->
		<section class="layout mar-auto" id="content-0">
			<a href="/leisure">
				<div class="content-left-33">
					<div class="c-one"><span></span></div><!-- c-one -->
					<h2 class="info-title">Leisure</h2>
					<article class="info">
						Recreational activities should always be fun, for humans and animals alike
					</article><!-- info -->
				</div><!-- content-left-33 -->
			</a>
			<a href="/fashion">
				<div class="content-mid-33">
					<div class="c-two"><span></span></div><!-- c-two -->
					<h2 class="info-title">Fashion</h2>
					<article class="info">
						It is possible to be chic or dapper without harming our animal friends  
					</article><!-- info -->
				</div><!-- content-mid-33 -->
			</a>
			<a href="/foods">
				<div class="content-right-33">
					<div class="c-three"><span></span></div><!-- c-three -->
					<h2 class="info-title">Foods</h2>
					<article class="info">
						Eat well and deliciously, without putting living creatures on the plate
					</article><!-- info -->
				</div><!-- content-right-33 -->
			</a>
		</section><!-- layout #content-0 -->
	<?php echo $this->partial('footer-main'); ?>
</body>
</html>