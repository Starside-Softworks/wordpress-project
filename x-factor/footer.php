<?php wp_footer(); ?>

<div class="footer_copyright">&copy; <?php the_date('Y'); ?> X Factor Consultants</div>

<!-- footer nav class -->
<footer class="class_footer">

  <nav class="class_nav">

      <!-- define nav attributes -->
      <?php
      
      $args = array(
        'container_class' => 'cont_nav_footer',
        'theme_location' => 'footer' 
      );    
      ?>

      <!-- display nav -->
      <?php wp_nav_menu( $args ); ?>

  </nav>

</footer>




</body>
</html>