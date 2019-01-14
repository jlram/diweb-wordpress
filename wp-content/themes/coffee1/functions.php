<?php
/*Contiene todas las funciones personalizadas que vamos a usar*/
require_once('templates/custom-fields.php');

/*Soportes del tema*/
add_theme_support('post-thumbnails');
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('post-formats', array('image', 'gallery', 'audio', 'video', 'link', quote));

/**
* Register and enqueue our custom scripts that need jQuery
* <script src="js/popper.min.js"></script>
* <script src="js/bootstrap.min.js"></script>
* <script src="js/owl.carousel.min.js"></script>
* <script src="js/aos.js"></script>
* <script src="js/bootstrap-datepicker.js"></script>
* <script src="js/scrollax.min.js"></script>
* <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
* <script src="js/google-map.js"></script>
* <script src="js/main.js"></script>
* 
* ----------JQUERY----------   
* <script src="js/jquery.min.js"></script>
* <script src="js/jquery-migrate-3.0.1.min.js"></script>
*  
* <script src="js/jquery.easing.1.3.js"></script>
* <script src="js/jquery.waypoints.min.js"></script>
* <script src="js/jquery.stellar.min.js"></script>
* <script src="js/jquery.animateNumber.min.js"></script>
* <script src="js/jquery.timepicker.min.js"></script>
* <script src="js/jquery.magnific-popup.min.js"></script>
*/

function my_theme_scripts() {
    
    wp_register_script('jquery', '/js/jquery.min.js', array(), null, false);
    wp_enqueue_script('jquery');
    
    wp_register_script('jquery-easing-js', get_template_directory_uri() . '/js/jquery.easing.1.3.js', array('jquery'), null, false);
    wp_enqueue_script('jquery-easing-js');
    
    wp_register_script('jquery-waypoints-js', get_template_directory_uri() . '/js/jquery.waypoints.min.js', array('jquery'), null, false);
    wp_enqueue_script('jquery-waypoints-js');
    
    wp_register_script('jquery-stellar-js', get_template_directory_uri() . '/js/jquery.stellar.min.js', array('jquery'), null, false);
    wp_enqueue_script('jquery-stellar-js');
    
    wp_register_script('jquery-animateNumber-js', get_template_directory_uri() . '/js/jquery.animateNumber.min.js', array('jquery'), null, false);
    wp_enqueue_script('jquery-animateNumber-js');
    
    wp_register_script('jquery-timepicker-js', get_template_directory_uri() . '/js/jquery.timepicker.min.js', array('jquery'), null, false);
    wp_enqueue_script('jquery-timepicker-js');
    
    wp_register_script('jquery-magnific-popup-js', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array('jquery'), null, false);
    wp_enqueue_script('jquery-magnific-popup-js');

    wp_register_script('popper-js', get_template_directory_uri() . '/js/popper.min.js', array('jquery'), null, false);
    wp_enqueue_script('popper-js');
    
    wp_register_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), null, false);
    wp_enqueue_script('bootstrap-js');
    
    wp_register_script('owl-carousel-js', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), null, false);
    wp_enqueue_script('owl-carousel-js');
    
    wp_register_script('aos-js', get_template_directory_uri() . '/js/aos.js', array('jquery'), null, false);
    wp_enqueue_script('aos-js');
    
    wp_register_script('bootstrap-datepicker-js', get_template_directory_uri() . '/js/bootstrap-datepicker.js', array('jquery'), null, false);
    wp_enqueue_script('bootstrap-datepicker-js');
    
    wp_register_script('scrollax-js', get_template_directory_uri() . '/js/scrollax.min.js', array('jquery'), null, false);
    wp_enqueue_script('scrollax-js');
    
    wp_register_script('google-map-js', get_template_directory_uri() . '/js/google-map.js', array('jquery'), null, false);
    wp_enqueue_script('google-map-js');
}

add_action('wp_enqueue_scripts', 'my_theme_scripts');

function generaltheme_widgets_init() {
    register_sidebar(array(
        'name' => 'Header Widgets',
        'id' => 'header',
        'description' => 'Header Widget Area',
        'before_widget' => '<div class="widget %2$s">',
        'after_widget' => '</div>',
    ));
}

add_action('widgets_init', 'generaltheme_widgets_init');