<header class="banner">
  <div class="container">
	<div class="col col-sm-12 col-md-3 col-lg-3 logoholder">
		<img class="logo" src="/wp-content/uploads/2018/12/logo.png"><?php echo App::title(); ?></img>
	</div>

	<div class="col col-sm-12 col-md-7 col-lg-6 offset-lg-1">
		<nav class="nav-primary">
	      <?php if(has_nav_menu('primary_navigation')): ?>
	        <?php echo wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']); ?>

	      <?php endif; ?>
		</nav>
	</div>

	<div class="col col-sm-12 col-md-2 col-lg-2">
		<a href="#" class="button-top">Button</a>
	</div>

  </div>
</header>

<?php echo $__env->make('partials.page-featured-image', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
