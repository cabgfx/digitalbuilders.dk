<?php get_template_part('templates/head'); ?>

<?php global $post_ID; ?>
<?php $featured_image_present = has_post_thumbnail($post_ID); // TODO: Prevent notices on non-post/page content ?>
<?php $featured_image = $featured_image_present ? wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'thumbnail')) : null; ?>

<body <?php body_class(); ?>>

  <!--[if lt IE 7]><div class="alert">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</div><![endif]-->

  <div class="site-wrap">
    <?php
      do_action('get_header');
      // Use Bootstrap's navbar if enabled in config.php
      if (current_theme_supports('bootstrap-top-navbar')) {
        get_template_part('templates/header-top-navbar');
      } else {
        get_template_part('templates/header');
      }
    ?>

    <?php if ($featured_image_present): ?>
      <div class="page-header-image">
        <img src="<?php echo $featured_image; ?>" alt="">
      </div>
    <?php endif; ?>

    <div class="wrap container" role="document">
      <div class="content row">
        <div class="main span12" role="main">
          <?php include roots_template_path(); ?>
        </div><!-- /.main -->
      </div><!-- /.content -->
    </div><!-- /.wrap -->

    <?php get_template_part('templates/footer'); ?>

    <?php if (WPBP_ENV == 'development'): ?>
      <script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
    <?php endif; ?>
  </div><!-- /.site-wrap -->

</body>
</html>
