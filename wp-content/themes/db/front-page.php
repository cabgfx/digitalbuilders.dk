<?php
global $wpdb;
$team = $wpdb->get_results("SELECT ID, display_name from $wpdb->users ORDER BY display_name");
?>

<?php while(have_posts()): the_post(); ?>
  <header class="title-header">
    <h1><?php the_title(); ?></h1>
  </header>

  <?php foreach($team as $object): $person = get_userdata($object->ID); ?>
    <figure class="panelist">
      <?php echo get_wp_user_avatar($person->ID, 300); ?>

      <figcaption class="panelist-name" title="<?php echo $person->nickname; ?>">
        <span class="panelist-firstname"><?php echo $person->user_firstname; ?></span>
        <?php echo $person->user_lastname; ?>
      </figcaption>
    </figure>
  
  <?php endforeach; ?>
<?php endwhile; ?>