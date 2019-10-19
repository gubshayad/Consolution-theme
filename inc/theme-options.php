<?php
    function consolution_vc_option(){
        vc_map(array(
            'name'=>__('First section','text-donain'),
            'description'=>'This is the first section',
            'base'=>'section_base_1',
            'category'=>'consolution',
            'icon'=> get_template_directory_uri().'/images/datatrix-them-icon.png',
            'params'=>array(
                array(
                    'param_name'=>'about_section_image',
                    'type'=>'attach_images',
                    'heading'=>'Set image for about top',
                    'value'=> get_template_directory_uri().'/images/image_2.jpg',

                ),
                array(
                    'param_name'=>'section_title_1',
                    'type'=>'textfield',
                    'heading'=>'About section title',
                    'value'=>'This is for testing ',

                ),
                array(
                    'param_name'=>'section_about_desc_1',
                    'type'=>'textarea',
                    'heading'=>'About section description',
                    'value'=>'This is for testing description',

                ),
                array(
                    'param_name'=>'section_about_title_color',
                    'type'=>'colorpicker',
                    'heading'=>'About heading color',
                    'value'=> '#222',

                ),
                array(
                    'param_name'=>'section_about_welc_title',
                    'type'=>'textfield',
                    'heading'=>'About section title',
                    'value'=>'This is for testing title',

                ),
                array(
                    'param_name'=>'section_about_welc_desc',
                    'type'=>'textarea',
                    'heading'=>'About section title',
                    'value'=>'This is for testing title',

                ),

                 //About the About brat come section 

                array(
                    'param_name'=>'about_bread_come_img',
                    'type'=>'attach_images',
                    'heading'=>'About Bread come image',
                    'value'=> get_template_directory_uri().'/images/image_2.jpg',
                    'group'=>'Bread Come',
                ),
                array(
                    'param_name'=>'about_breat_come_title',
                    'type'=>'textfield',
                    'heading'=>'Home Features icon section title',
                    'value'=>'Organization',
                    'group'=>'Bread Come',
                ),
            ),
        ));

        vc_map(array(
            'name'=>__('About section','text-domain'),
            'description'=>'This is about section',
            'base'=>'about_base_1',
            'category'=>'consolution',
            'icon'=> get_template_directory_uri().'/images/home-icon.png',
            'params'=>array(
                array(
                    'param_name'=>'about_bottom_sec_img',
                    'type'=>'attach_images',
                    'heading'=>'About bottom image',
                    'value'=> get_template_directory_uri().'/images/image_2.jpg'

                ),
                array(
                    'param_name'=>'about_bottom_sec_title',
                    'type'=>'textfield',
                    'heading'=>'About bottom title',
                    'group'=>'about content',

                ),
                array(
                    'param_name'=>'about_bottom_sec_desc',
                    'type'=>'textarea_html',
                    'heading'=>'About bottom description',
                    'group'=>'about content',

                ),
            )
        ));

        //About the counter section

        vc_map(array(
            'name'=>__('About Counter section','text-domain'),
            'description'=>'This is about counter background img sec',
            'base'=>'about_counter_sec',
            'category'=>'consolution',
            'icon'=> get_template_directory_uri().'/images/home-icon.png',
            'params'=>array(
                array(
                    'param_name'=>'about_counter_sec_img',
                    'type'=>'attach_images',
                    'heading'=>'About counter background img',
                    'value'=> get_template_directory_uri().'/images/image_2.jpg'

                ),
                array(
                    'param_name'=>'about_counter_sec_title',
                    'type'=>'textfield',
                    'heading'=>'About counter title',
                    'group'=>'about content',

                ),
            )
        ));
        vc_map(array(
            'name'=>__('About Counter Count section','text-domain'),
            'description'=>'This is about counter count section',
            'base'=>'about_counter_count_sec',
            'category'=>'consolution',
            'icon'=> get_template_directory_uri().'/images/home-icon.png',
            'params'=>array(

                //About the priceing field
                array(
                    'param_name'=>'about_counter_name',
                    'type'=>'textfield',
                    'heading'=>'Write counter name',
                    'description'=>'Write integer value in this field',
                    'group'=>'about priceting',

                ),
                array(
                    'param_name'=>'about_counter_project',
                    'type'=>'textfield',
                    'heading'=>'HOW MANY PROJECTS COMPLETED',
                    'description'=>'Write integer value in this field',
                    'group'=>'about priceting',

                ),
            )
        ));

        //About the client field

        vc_map(array(
            'name'=>__('About client section','text-domain'),
            'description'=>'This is about counter count section',
            'base'=>'about_clients_sec',
            'category'=>'consolution',
            'icon'=> get_template_directory_uri().'/images/home-icon.png',
            'params'=>array( 
                array(
                    'param_name'=>'about_client_sec',
                    'type'=>'textfield',
                    'heading'=>'About clients title',
                    'description'=>'Write integer value in this field',
                    'group'=>'about priceting',

                ),
                array(
                    'param_name'=>'about_client_desc',
                    'type'=>'textarea_html',
                    'heading'=>'About clients desc',
                    'description'=>'Write integer value in this field',
                    'group'=>'about priceting',

                ),
             
            )
        ));
     
    }
    add_action('vc_before_init', 'consolution_vc_option');
?>
<?php
     function consolution_home_vc_option(){
        vc_map(array(
            'name'=>__('First section','text-donain'),
            'description'=>'This is the first section',
            'base'=>'section_home_base_1',
            'category'=>'consolution Home',
            'icon'=> get_template_directory_uri().'/images/home-icon.png',
            'params'=>array(
                array(
                    'param_name'=>'home_feature_title',
                    'type'=>'textfield',
                    'heading'=>'Features title',
                  
                ),
                array(
                    'param_name'=>'home_feature_desc',
                    'type'=>'textarea_html',
                    'heading'=>'Features description',
                   
                ),
                 //Features icon section 1
                array(
                    'param_name'=>'home_feature_icon_1',
                    'type'=>'iconpicker',
                    'heading'=>'Set Home Features Icon ',
                    'group'=>'icon sec 1',
                    
                ),
                array(
                    'param_name'=>'home_feature_icon_title_1',
                    'type'=>'textfield',
                    'heading'=>'Set Home Features Icon one title ',
                    'value'=>'Organization',
                    'group'=>'icon sec 1',
  
                ),
                array(
                    'param_name'=>'home_feature_icon_desc_1',
                    'type'=>'textarea',
                    'heading'=>'Set Home Features Icon one Description',
                    'group'=>'icon sec 1',

                ),

                //Features icon section 2
                array(
                    'param_name'=>'home_feature_icon_2',
                    'type'=>'iconpicker',
                    'heading'=>'Set Home Features Icon ',
                    'group'=>'icon sec 2',
                    
                ),

                array(
                    'param_name'=>'home_feature_icon_title_2',
                    'type'=>'textfield',
                    'heading'=>'Set Home Features Icon two title ',
                    'value'=>'Organization',
                    'group'=>'icon sec 2',
  
                ),
                array(
                    'param_name'=>'home_feature_icon_desc_2',
                    'type'=>'textarea',
                    'heading'=>'Set Home Features Icon two Description',
                    'group'=>'icon sec 2',
                 
  
                ),
                 //Features icon section 3
                 array(
                    'param_name'=>'home_feature_icon_3',
                    'type'=>'iconpicker',
                    'heading'=>'Set Home Features Icon ',
                    'group'=>'icon sec 3',
                    
                ),

                array(
                    'param_name'=>'home_feature_icon_title_3',
                    'type'=>'textfield',
                    'heading'=>'Set Home Features Icon two title ',
                    'value'=>'Organization',
                    'group'=>'icon sec 3',
  
                ),
                array(
                    'param_name'=>'home_feature_icon_desc_3',
                    'type'=>'textarea',
                    'heading'=>'Set Home Features Icon two Description',
                    'group'=>'icon sec 3',
                 
  
                ),

                //Features icon section 4

                array(
                    'param_name'=>'home_feature_icon_4',
                    'type'=>'iconpicker',
                    'heading'=>'Set Home Features Icon ',
                    'group'=>'icon sec 4',
                    
                ),

                array(
                    'param_name'=>'home_feature_icon_title_4',
                    'type'=>'textfield',
                    'heading'=>'Set Home Features Icon two title ',
                    'value'=>'Organization',
                    'group'=>'icon sec 4',
  
                ),
                array(
                    'param_name'=>'home_feature_icon_desc_4',
                    'type'=>'textarea',
                    'heading'=>'Set Home Features Icon two Description',
                    'group'=>'icon sec 4',
                 
  
                ),

                //Home features success story section

                array(
                    'param_name'=>'home_success_img',
                    'type'=>'attach_image',
                    'heading'=>'Features title',
                    'group'=>'Features success'
                  
                ),
                array(
                    'param_name'=>'home_success_title',
                    'type'=>'textfield',
                    'heading'=>'Features title',
                    'group'=>'Features success'
                  
                ),
                array(
                    'param_name'=>'home_success_desc',
                    'type'=>'textarea',
                    'heading'=>'Features title',
                    'group'=>'Features success'
                  
                ),
                array(
                    'param_name'=>'home_success_button',
                    'type'=>'textfield',
                    'heading'=>'Write features success button text',
                    'group'=>'Features success',
                   
                  
                ),
                
                
            )
        ));
        
        //About the service item section

        vc_map(array(
                'name'=>__('First section','text-donain'),
                'description'=>'This is the first section',
                'base'=>'section_service_base',
                'category'=>'consolution Home',
                'icon'=> get_template_directory_uri().'/images/Service-Icon.png',
                'params'=>array(
                    array(
                       'param_name'=>'service-item-icon',     
                       'type'=>'iconpicker',     
                       'heading'=>'Write Service items icons',     
                    ),
                    array(
                       'param_name'=>'service-item-title',     
                       'type'=>'textfield',     
                       'heading'=>'Write Service items title',     
                    ),
                    array(
                       'param_name'=>'service-item-desc',     
                       'type'=>'textarea_html',     
                       'heading'=>'Write Service items desc',     
                    ),
                )
            ));
            vc_map(array(
                'name'=>__('First best Guidance','text-donain'),
                'description'=>'This is the first section',
                'base'=>'section_best_guidance_base',
                'category'=>'consolution Home',
                'icon'=> get_template_directory_uri().'/images/Service-Icon.png',
                'params'=>array(
                    array(
                       'param_name'=>'service_bestguidance_img',     
                       'type'=>'attach_image',     
                       'heading'=>'Set best guidance background image',     
                    ),
                    array(
                       'param_name'=>'service-item-icon',     
                       'type'=>'textfield',     
                       'heading'=>'Write Service items icons',     
                    ),
                )
            ));

            vc_map(array(
                'name'=>__('Home project section','text-donain'),
                'description'=>'This is the first section',
                'base'=>'section_project_base',
                'category'=>'consolution Home',
                'icon'=> get_template_directory_uri().'/images/branding.jpg',
                'params'=>array(
                    array(
                       'param_name'=>'service_project_img',     
                       'type'=>'attach_image',     
                       'heading'=>'Set branding background image',     
                    ),
                    array(
                       'param_name'=>'project_title_section',     
                       'type'=>'textfield',     
                       'heading'=>'Write Branding title',     
                    ),
                    array(
                        'param_name'=>'project_title_name',     
                        'type'=>'textfield',     
                        'heading'=>'Write Branding title',     
                     ),
                )
            ));
      
    }
    add_action('vc_before_init', 'consolution_home_vc_option');
?>