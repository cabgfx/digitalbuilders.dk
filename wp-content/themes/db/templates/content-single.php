<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class('row'); ?>>
    <header class="title-header title-header-single span12">
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <?php get_template_part('templates/entry-meta'); ?>
    </header>

    <div class="entry-content span8 offset2">
      <?php the_content(); ?>
    </div>

    <footer class="span8 offset2">
      <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>

      <?php comments_template('/templates/comments.php'); ?>
    </footer>
  </article>
<?php endwhile; ?>
