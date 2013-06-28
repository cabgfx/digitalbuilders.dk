<header class="banner navbar navbar-static-top" role="banner">
  <div class="navbar-inner">
    <div class="container">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <a class="brand" href="<?php echo home_url(); ?>/">
        <?php
          /* 
          *  Digital Builders should be written as two words,
          *  but we want to massage it a bit in the logo display.
          *  To become DigitalBuilders and inject some markup for styling.
          *
          */
          echo preg_replace("/^([a-z]+)\s([a-z]+)$/i", "<b>\\1</b>\\2", get_bloginfo('name'));
        ?>
      </a>

      <nav class="nav-main nav-collapse collapse" role="navigation">
        <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav'));
          endif;
        ?>
      </nav>
    </div>
  </div>
</header>
