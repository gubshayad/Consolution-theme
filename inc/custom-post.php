<?php 
    function consolution_theme_custom_post(){
        register_post_type( 'slide', array(
            'public' => true,
            'label'  => 'slides',
            'labels'  => array(
                'name'=>'Sliders',
                'add_new'=>'Add new slider',
                'search_items'=>'you search hear',
            ),
            'supports' => array('title','editor','excerpt', 'thumbnail','page-attributes', 'custom-fields'),
        ));

        register_post_type( 'feature', array(
            'public' => true,
            'label'  => 'features',
            'labels'  => array(
                'name'=>'features',
                'add_new'=>'Add new features',               
            ),
            'supports' => array('title','editor','excerpt', 'thumbnail','page-attributes', 'custom-fields'),
        ));

        //About the features success

        register_post_type( 'feature-success', array(
            'public' => true,
            'label'  => 'features-success',
            'labels'  => array(
                'name'=>'features-success',
                'add_new'=>'Add new success',               
            ),
            'supports' => array('title','editor','excerpt', 'thumbnail','page-attributes', 'custom-fields'),
        ));
    }
    add_action('init', 'consolution_theme_custom_post');
?>