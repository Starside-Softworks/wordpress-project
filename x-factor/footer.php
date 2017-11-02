<?php wp_footer(); ?>

<!-- footer nav class -->
<div class="footer">

  <div class="footer_copyright">&copy; <?php the_date('Y'); ?> X Factor Consultants</div>

  <div class="nav">

      <!-- define nav attributes -->
      <?php
      
      $args = array(
        'container_class' => 'cont_nav_footer',
        'theme_location' => 'footer' 
      );    
      ?>

      <!-- display nav -->
      <?php wp_nav_menu( $args ); ?>

  </div>

</div>

</body>
</html>