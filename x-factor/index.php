<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
  <meta charset="<?php bloginfo('charset');?>" />
  <title><?php wp_title(); ?></title>
  <link rel="pingback" href="<?php bloginfo('pingback_url');?>" />
  <?php wp_head();?>
</head>

<body>
  <?php include("header.php");?>
  
  <?php include("body.php");?>

  <?php include("footer.php");?>
</body>

</html>