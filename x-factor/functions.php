<!-- enqueue styles -->
<?php 
if (!function_exists('enqueue_styles')) {

    function enqueue_styles() {
   
        wp_enqueue_style('style', get_stylesheet_uri(), false, '20150320');
        }
    }
    add_action('wp_enqueue_scripts', 'enqueue_styles'); 
?>


<!-- register nav menus -->

<?php 
register_nav_menus( array(
    'header' => __('Header Nav' ),
    'footer' => __('Footer Nav' ),
    
));
?>