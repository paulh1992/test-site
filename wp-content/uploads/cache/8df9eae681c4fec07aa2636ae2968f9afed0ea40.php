<div class="page-header">
  <img class="logo" src="/wp-content/uploads/2018/12/logo.png"><?php echo App::title(); ?></img>

  <nav class="nav-primary">
      <?php if(has_nav_menu('primary_navigation')): ?>
        <?php echo wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']); ?>

      <?php endif; ?>
  </nav>

  <div class="btn">Button</div>
</div>
