<?php 
    function consolution_costom_menu(){
        register_nav_menus(array(
            'header_menu'=>'header menu',
            'fooer_menu'=>'header menu',
        ));
    }
    add_action('init', 'consolution_costom_menu');

    function theme_default_menus(){
        echo '<h1>Hi ! set your menu</h1>';
    }


?>