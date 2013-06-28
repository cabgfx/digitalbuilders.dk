<?php
global $wpdb;
$team = $wpdb->get_results("SELECT ID, display_name from $wpdb->users ORDER BY display_name");
?>

<?php while(have_posts()): the_post(); ?>
  <header class="title-header">
    <h1><?php the_title(); ?></h1>
    <?php the_content(); ?>
  </header>

  <section class="panelists clearfix">
    <?php foreach($team as $object): $person = get_userdata($object->ID); ?>
      <figure class="panelist" data-overlay-target="panelist-<?php echo $person->ID; ?>">
        <div class="panelist-image"><?php echo get_wp_user_avatar($person->ID, 300); ?></div>

        <figcaption class="panelist-name">
          <span class="panelist-title"><?php echo $person->nickname; ?></span>
          <span class="panelist-firstname"><?php echo $person->user_firstname; ?></span>
          <?php echo $person->user_lastname; ?>
        </figcaption>
      </figure>

      <?php // The popup element ?>
      <div class="panelist-overlay" style="display: none;" id="panelist-<?php echo $person->ID; ?>">
        <?php echo get_wp_user_avatar($person->ID, 300); ?>
        
        <h2 class="panelist-name">
          <span class="panelist-firstname"><?php echo $person->user_firstname; ?></span>
          <?php echo $person->user_lastname; ?>
          <span class="panelist-title"><?php echo $person->nickname; ?></span>
        </h2>

        <p class="panelist-bio">
          <?php echo $person->description; ?>
        </p>
        
        <a class="close">&times;</a>
      </div>

    <?php endforeach; ?>
  </section>
<?php endwhile; ?>