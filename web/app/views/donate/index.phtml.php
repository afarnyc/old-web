<?php 
ini_set('display_errors',1);  
error_reporting(E_ALL); 
?>
<!DOCTYPE html>
<html lang="en" dir="LTR">
<head>
	<?php echo $this->partial('head'); ?>
	<meta name="description" content ="All donations are used to fund our two major programs in New York City as well support our goal of greater animal welfare advocacy">
	<title>Donate - Every dollar is put towards good use</title>
</head>
<body id="b-donate">
	<?php echo $this->partial('nav-main-mobile'); ?>
		<?php echo $this->partial('nav-main'); ?>
		<header></header>
		<section id="content" class="layout">
			<h1>Donate</h1>
			<hr/>
			<article class="content-paragraph">
				As a non-profit, donations are the main source of income for our organization. Without donations we cannot advance our cause or fund our programs. With enough help, we hope to expand our programs nationwide. All donations are tax deductible.
			</article>
		</section><!-- #content layout -->
		<section id="content-0" class="layout button-container">
			<div class="content-left-50">
				<a  href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&amp;hosted_button_id=H8C5VRPLM8ZMN" class="cta-ghost xl-width"><i class="fa fa-paypal"></i>&nbsp;&nbsp;Make A Donation</a>
			</div><!-- content-left-50 -->
			<div class="content-right-50">
				<a href="/sponsorship" class="cta-ghost xl-width">Corporate Sponsorship</a>
			</div><!-- content-right-50 -->
		</section><!-- layout -->
		<section id="content-1" class="layout">	
			<article class="content-paragraph">
				You can also have Amazon give a portion of your purchases (through the following link) to our organization via AmazonSmile:
			</article>
			<div class="content-left-50">
				<a  href="https://smile.amazon.com/ch/46-3115576" class="cta-ghost xl-width" target="_blank"><i class="fa fa-amazon"></i>&nbsp;&nbsp;Shop and Donate</a>
			</div><!-- content-left-50 -->
		</section>	
	    <section id="content-2" class="layout">
	    	<article class="content-paragraph">
				In kind donations are also appreciated! For our <a href="/broadwaybeds" class="link-regular">Broadway Beds</a> program, we rely on donated fabrics and materials to create bedding. We could also use any dog or cat supplies to distribute among pet-parents-in-need through our <a href="/vetpets" class="link-regular">Vets Pets</a> program. Please <a href="/contact" class="link-regular">contact us</a> to find out how to contribute such in kind donations.
			</article>
	    </section><!-- layout -->
	<?php echo $this->partial('footer-main'); ?>
</body>
</html>