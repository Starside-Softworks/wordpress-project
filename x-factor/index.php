<?php 

get_header();

  /*

    "The Loop", not necessary as best as I can tell

  if(have_posts()):
    while(have_posts()) : the_post(); ?>

    <?php the_content(); ?>

  <?php endwhile;

  else :
    echo '<p>No content found</p>';
  endif;
  */

the_post();

the_content();

get_footer();

?>
