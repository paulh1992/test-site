<div class="page-header">
  <img class="logo" src="/wp-content/uploads/2018/12/logo.png">{!! App::title() !!}</img>

  <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
  </nav>

  <div class="btn">Button</div>
</div>
