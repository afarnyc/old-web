<?php 
ini_set('display_errors',1);  
error_reporting(E_ALL); 
?>
<!DOCTYPE html>
<html lang="en" dir="LTR">
<head>
	<?php echo $this->partial('head'); ?>
	<meta name="description" content ="Recreational activities should always be fun, for humans and animals alike">
	<title>Leisure - Cruelty Free Living - Fun for all creatures</title>
</head>
<body id="b-resources">
	<?php echo $this->partial('nav-main-mobile'); ?>
		<?php echo $this->partial('nav-main'); ?>
		<header></header>
		<section id="content" class="layout">
			<h1>Leisure - Cruelty Free </h1>
			<hr/>
			<article class="content-paragraph">
				It is up to us to truly evaluate the type of fun we have and ask: am I contributing to the harming of any animals solely for entertainment? Here are some activities that you should reconsider taking part in (and alternatives to such activities):
			</article>
			<div class="blurb blurb-first">
				<div class="blurb-header">
					<div class="blurb-title">Circuses with Animals</div>
				</div><!-- blurb-header -->
				<div class="blurb-text">
					Most people are not aware of the harm inflicted due to the negative training imposed on animals that are part of a circus act. Circus animals are meant to live in the wild and run free, not caged up and used for entertainment. Thankfully, our society has slowly paid more attention to this issue, using spokespersons such as Tony Award winner Viola Davis. Please join Viola Davis in boycotting circuses:
					<p><a href="http://www.peta.org/blog/viola-davis-ready-help-elephants-hurt-circuses/" class="link-regular" target="_blank">Support Circus Elephants with Viola Davis</a></p>
					Instead try a human circus where those who entertain do so voluntarily:
					<p><a href="https://www.cirquedusoleil.com/en/home/shows.aspx#/en/home/americas/usa.aspx" class="link-regular" target="_blank">Cirque du Soleil</a></p>

				</div><!-- blurb-text -->
			</div><!-- blurb -->
		</section><!-- #content layout -->
	<?php echo $this->partial('footer-main'); ?>
</body>
</html>