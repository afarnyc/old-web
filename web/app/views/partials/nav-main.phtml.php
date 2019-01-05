<nav id="nav-fixed" class="nav-main">
	<section class="layout">
		<ul>
		  <li><a href="/" class="nav-logo">afar</a></li>
      <li class="a-whatwedo"><?php echo $this->tag->linkTo(array('whatwedo', 'What We Do')); ?></li>
      <li class="a-about"><?php echo $this->tag->linkTo(array('about', 'About')); ?></li>
      <li class="a-programs"><?php echo $this->tag->linkTo(array('programs', 'Programs')); ?></li>
      <li class="a-resources"><?php echo $this->tag->linkTo(array('resources', 'Resources')); ?></li>
      <li><a href="http://blog.afarnyc.org">Blog</a></li>
      <li class="a-volunteer"><?php echo $this->tag->linkTo(array('volunteer', 'Volunteer')); ?></li>
      <li class="a-donate"><?php echo $this->tag->linkTo(array('donate', 'Donate')); ?></li>
      <li class="a-contact"><?php echo $this->tag->linkTo(array('contact', 'Contact')); ?></li>
    </ul>
  </section><!-- layout -->
</nav><!-- main-nav -->