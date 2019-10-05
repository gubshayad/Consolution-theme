<?php 
    function consolution_my_theme(){
        wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '4.1.0', 'all' );
        wp_enqueue_style( 'open-iconic', get_template_directory_uri() . '/css/open-iconic-bootstrap.min.css', array(), '1.0', 'all' );
        wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css', array(), '3.1.0', 'all' );
        wp_enqueue_style( 'owl.carousel', get_template_directory_uri() . '/css/owl.carousel.min.css', array(), '3.1.0', 'all' );
        wp_enqueue_style( 'owl.theme', get_template_directory_uri() . '/css/owl.theme.default.min.css', array(), '3.1.0', 'all' );
        wp_enqueue_style( 'magnific', get_template_directory_uri() . '/css/magnific-popup.css', array(), '3.1.0', 'all' );
        wp_enqueue_style( 'aos', get_template_directory_uri() . '/css/aos.css', array(), '3.1.0', 'all' );
        wp_enqueue_style( 'ionicons', get_template_directory_uri() . '/css/ionicons.min.css', array(), '3.1.0', 'all' );
        wp_enqueue_style( 'flaticon', get_template_directory_uri() . '/css/flaticon.css', array(), '3.1.0', 'all' );
        wp_enqueue_style( 'icomoon', get_template_directory_uri() . '/css/icomoon.css', array(), '3.1.0', 'all' );
        wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css', array(), '3.1.0', 'all' );

        wp_enqueue_script( 'jquery',  get_template_directory_uri() . '/js/jquery-3.2.1.min.js', array('jquery'), '1.3', true );
        wp_enqueue_script( 'jquery-migrate',  get_template_directory_uri() . '/js/jquery-migrate-3.0.1.min.js', array('jquery'), '1.3', true );
        wp_enqueue_script( 'popper',  get_template_directory_uri() . '/js/popper.min.js', array('jquery'), '1.3', true );
        wp_enqueue_script( 'bootstrap',  get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '1.3', true );
        wp_enqueue_script( 'easing',  get_template_directory_uri() . '/js/jquery.easing.1.3.js', array('jquery'), '1.3', true );
        wp_enqueue_script( 'waypoints',  get_template_directory_uri() . '/js/jquery.waypoints.min.js', array('jquery'), '1.3', true );
        wp_enqueue_script( 'stellar',  get_template_directory_uri() . '/js/jquery.stellar.min.js', array('jquery'), '1.3', true );
        wp_enqueue_script( 'owl.carousel',  get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), '1.3', true );
        wp_enqueue_script( 'magnific',  get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array('jquery'), '1.3', true );
        wp_enqueue_script( 'aos',  get_template_directory_uri() . '/js/aos.js', array('jquery'), '1.3', true );
        wp_enqueue_script( 'animateNumber',  get_template_directory_uri() . '/js/jquery.animateNumber.min.js', array('jquery'), '1.3', true );
        wp_enqueue_script( 'scrollax',  get_template_directory_uri() . '/js/scrollax.min.js', array('jquery'), '1.3', true );
        wp_enqueue_script( 'google-map',  get_template_directory_uri() . '/js/google-map.js', array('jquery'), '1.3', true );
        wp_enqueue_script( 'main.js',  get_template_directory_uri() . '/js/main.js', array('jquery'), '1.3', true );

    }

    add_action('wp_enqueue_scripts', 'consolution_my_theme');
?>