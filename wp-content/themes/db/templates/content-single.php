<?php while (have_posts()) : the_post(); ?>

  <?php if (has_post_thumbnail()): ?>
        </div>
      </div>
    </div>
    
    <div class="page-header-image">
      <?php the_post_thumbnail('full') ?>
    </div>

    <div class="wrap container" role="document">
      <div class="content row">
        <div class="main <?php echo roots_main_class(); ?>" role="main">

  <?php endif; ?>

  <article <?php post_class(); ?>>
    <header>
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <?php get_template_part('templates/entry-meta'); ?>
    </header>
    <div class="entry-content">
      <?php the_content(); ?>
    </div>
    <footer>
      <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>
