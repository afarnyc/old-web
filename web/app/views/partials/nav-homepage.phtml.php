<nav id="nav-home" class="nav-main">
	<section class="layout">
		<ul>
		  <li id="li-first"><a href="/" class="nav-logo">afar</a></li>
      <li><?php echo $this->tag->linkTo(array('whatwedo', 'What We Do')); ?></li>
      <li><?php echo $this->tag->linkTo(array('about', 'About')); ?></li>
      <li><?php echo $this->tag->linkTo(array('programs', 'Programs')); ?></li>
      <li><?php echo $this->tag->linkTo(array('resources', 'Resources')); ?></li>
      <li><a href="http://blog.afarnyc.org">Blog</a></li>
      <li><?php echo $this->tag->linkTo(array('volunteer', 'Volunteer')); ?></li>
      <li><?php echo $this->tag->linkTo(array('donate', 'Donate')); ?></li>
      <li><?php echo $this->tag->linkTo(array('contact', 'Contact')); ?></li>
    </ul>
  </section><!-- layout -->
</nav><!-- main-nav -->