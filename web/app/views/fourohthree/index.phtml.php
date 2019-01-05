<?php 
ini_set('display_errors',1);  
error_reporting(E_ALL); 
?>
<!DOCTYPE html>
<html lang="en" dir="LTR">
<head>
	<?php echo $this->partial('head'); ?>
	<meta name="description" content ="403 Error Forbidden">
	<title>403 Error - Forbidden</title>
</head>
<body>
	<section class="layout error-container">
		<div class="error-img">
			<img src="http://afarnyc.org/img/photos/lab-puppy.jpg" alt="403 Error" class="error-display">
		</div>
		<div class="error-message">
			<p class="error-title">Oops!</p>
			<p>
				You have ventured too far into the wild: and now this puppy misses you. Come back before this puppy gets anxious and starts chewing your wires, shoes, phone...
			</p>
			<a href="/" class="cta-ghost">Return Home</a>
		</div>
	</section><!-- layout -->
</body>
</html>