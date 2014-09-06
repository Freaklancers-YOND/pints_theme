<header class="banner navbar navbar-default navbar-static-top" role="banner">
	<h3 class="toggle"><img src="toggle.png" class ="toggler expanded" alt="Expand"/> </h3>

<div id="TableData" class="hidden-first">
      <?php
        if (has_nav_menu('secondary')) :
          wp_nav_menu(array('theme_location' => 'secondary', 'menu_class' => 'nav navbar-nav-sec'));
        endif;
      ?>
    
</div>
  <div class="container">
	<a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>

    <nav class="collapse navbar-collapse" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
        endif;
      ?>
    </nav>
  </div>
 

		</div>
	
</header>
