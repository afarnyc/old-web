<?php 
ini_set('display_errors',1);  
error_reporting(E_ALL); 
?>
<!DOCTYPE html>
<html lang="en" dir="LTR">
<head>
	<?php echo $this->partial('head'); ?>
	<meta name="description" content ="All the professionals who have volunteered their expertise come from an immense sundry of industries, all working towards the greater good">
	<title>About Us - The people behind our mission</title>
</head>
<body id="b-about">
	<?php echo $this->partial('nav-main-mobile'); ?>
		<?php echo $this->partial('nav-main'); ?>
		<header></header>
		<section class="layout">
			<img src="img/error-images/404.png" alt="404 Error" class="error-display">
			<span class="error-title">The page you were looking for was not found. Please use our top-page navigation bar to find what you need.</span>
		</section><!-- layout -->

	<?php echo $this->partial('footer-main'); ?>
</body>
</html>