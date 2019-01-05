<?php 
ini_set('display_errors',1);  
error_reporting(E_ALL); 
?>
<!DOCTYPE html>
<html lang="en" dir="LTR">
<head>
	<?php echo $this->partial('head'); ?>
	<meta name="description" content ="Your donation is much appreciated!">
	<title>Thank you for your donation!</title>
</head>
<body id="b-donate">
	<?php echo $this->partial('nav-main-mobile'); ?>
		<?php echo $this->partial('nav-main'); ?>
		<header></header>
		<section id="content" class="layout">
			<h1>Thank you!</h1>
			<hr/>
			<article class="content-paragraph">
				You are the champion of creatures everywhere! Your receipt of payment has been emailed to you.
			</article>
			<a href="/" class="cta-ghost xxl-width">Click If not Redirected in <span id="timer">3</span> sec</a>
		</section><!-- #content layout -->
	<?php echo $this->partial('footer-main'); ?>
	<script type="text/javascript">
		<!--
		var count=4;
		var counter=setInterval(timer, 900); //1000 will  run it every 1 second

		// countdown function
		function timer() {
		  count=count-1;
		  if (count <= 0) {
		     clearInterval(counter);
		     document.getElementById("timer").innerHTML = "0";
		     return;
		  }
		  document.getElementById("timer").innerHTML = count;
		}

		// redirect function
		function redirect(){
		    window.location="/";
		}
		setTimeout('redirect()', 3000);
		//-->
	</script>
</body>
</html>