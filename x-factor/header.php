<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
  <meta charset="<?php bloginfo('charset');?>" />
  <meta name="viewport" content="width=device-width">
  <title><?php bloginfo('name');?></title>
  <link rel="pingback" href="<?php bloginfo('pingback_url');?>" />
  <?php wp_head();?>

</head>

<body>


<!-- header nav class -->
<header class="class_header">

  <nav class="class_nav">

      <!-- define nav attributes -->
      <?php
      
      $args = array(
        'container_class' => 'cont_nav_header',
        'theme_location' => 'header' );    
      ?>

      <!-- display nav -->
      <?php wp_nav_menu( $args ); ?>

  </nav>

</header>