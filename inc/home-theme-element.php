
<?php
	function consolution_home_base_section($attr){
		extract(shortcode_atts( array(
			'home_feature_title'=>'Home section title',
			'home_feature_desc'=>'Home section title',
			//Features icon section one
			'home_feature_icon_1'=>'',
			'home_feature_icon_title_1'=>'Organization',
			'home_feature_icon_desc_1'=>'Far far away, behind the word mountains, far from the countries Vokalia.',
			//Features icon section two
			'home_feature_icon_2'=>'',
			'home_feature_icon_title_2'=>'',
			'home_feature_icon_desc_2'=>'Far far away, behind the word mountains, far from the countries Vokalia.',
			//Features icon section Three
			'home_feature_icon_3'=>'',
			'home_feature_icon_title_3'=>'',
			'home_feature_icon_desc_3'=>'Far far away, behind the word mountains, far from the countries Vokalia.',
			//Features icon section Four
			'home_feature_icon_4'=>'',
			'home_feature_icon_title_4'=>'',
			'home_feature_icon_desc_4'=>'Far far away, behind the word mountains, far from the countries Vokalia.',

			//Features success item sec

			'home_success_img'=>get_template_directory_uri()."images/bg_1",
			'home_success_title'=>'Read Our Success Story for Inspiration',
			'home_success_desc'=>'Read Our Success Story for Inspiration',
			'home_success_button'=>'Contact us',

		), $attr));
		ob_start();
		?>
     <section class="ftco-section">
			<div class="container">
				<div class="row d-flex">
					<div class="col-md-5 order-md-last wrap-about align-items-stretch">
						<div class="wrap-about-border ftco-animate">
							<div class="img" style="background-image: url(<?php echo wp_get_attachment_image_url($home_success_img,'full') ?>); border"></div>
							<div class="text">
								<h3><?php echo esc_html($home_success_title); ?></h3>
								<p><?php echo esc_html($home_success_desc); ?></p>
								<p><a href="#" class="btn btn-primary py-3 px-4"><?php echo esc_html($home_success_button);?></a></p>
							</div>
						</div>
					</div>
					<div class="col-md-7 wrap-about pr-md-4 ftco-animate">
						<h2 class="mb-4"><?php echo esc_html($home_feature_title); ?></h2>
						<p><?php echo esc_html($home_feature_desc); ?></p>
						<div class="row mt-5">
							<div class="col-lg-6">
								<div class="services active text-center">
									<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="<?php echo esc_attr($home_feature_icon_1); ?>"></span></div>
									<div class="text media-body">
										<h3><?php echo esc_html($home_feature_icon_title_1) ?></h3>
										<p><?php echo esc_html($home_feature_icon_desc_1); ?></p>
									</div>
								</div>
								<div class="services text-center">
									<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class=""><i class="<?php echo esc_attr($home_feature_icon_2); ?>"></i></span></div>
									<div class="text media-body">
										<h3><?php echo esc_html($home_feature_icon_title_2) ?></h3>
										<p><?php echo esc_html($home_feature_icon_desc_2); ?></p>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="services text-center">
									<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class=""><i class="<?php echo esc_attr($home_feature_icon_3); ?>"></i></span></div>
									<div class="text media-body">
										<h3><?php echo esc_html($home_feature_icon_title_3) ?></h3>
										<p><?php echo esc_html($home_feature_icon_desc_3); ?></p>
									</div>
								</div>
								<div class="services text-center">
									<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class=""><i class="<?php echo esc_attr($home_feature_icon_4); ?>"></i></span></div>
									<div class="text media-body">
										<h3><?php echo esc_html($home_feature_icon_title_4) ?></h3>
										<p><?php echo esc_html($home_feature_icon_desc_4); ?></p>
									</div>
								</div>
							</div>
	
						</div>
					</div>
				</div>
			</div>
		</section>
	<?php return ob_get_clean();
	}
	add_shortcode( 'section_home_base_1', 'consolution_home_base_section' );

?>

<?php
	function consolution_service_base_section($attr){
		extract(shortcode_atts( array(
			'home_feature_title'=>'Home section title',
			'home_feature_desc'=>'Home section title',

	
		), $attr));
		ob_start();
		?>
    
		<!-- About the service item section -->
	
		<div class="no-gutters">
			<div class="d-flex">
				<div class="services-2 noborder-left text-center ftco-animate">
					<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-analysis"></span></div>
					<div class="text media-body">
						<h3>Business Analysis</h3>
						<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
					</div>
				</div>
			</div>
		</div>

	<?php return ob_get_clean();
	}
	add_shortcode( 'section_service_base', 'consolution_service_base_section' );

?>
<?php
	function consolution_bestguidance_base_section($attr){
		extract(shortcode_atts( array(
			'service_bestguidance_img'=>'Home section title',
			'home_feature_desc'=>'Home section title',

	
		), $attr));
		ob_start();
		?>
    
		<!-- About the service item section -->
	
		<section class="ftco-intro ftco-no-pb img" style="background-image: url(<?php echo wp_get_attachment_image_url($service_bestguidance_img,'full'); ?>);">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-9 col-md-8 d-flex align-items-center heading-section heading-section-white ftco-animate">
						<h2 class="mb-3 mb-md-0">You Always Get the Best Guidance</h2>
					</div>
					<div class="col-lg-3 col-md-4 ftco-animate">
						<p class="mb-0"><a href="#" class="btn btn-white py-3 px-4">Request Quote</a></p>
					</div>
				</div>	
			</div>
   		</section>

	<?php return ob_get_clean();
	}
	add_shortcode( 'section_best_guidance_base', 'consolution_bestguidance_base_section' );

?>
<?php
	function consolution_project_base_section($attr){
		extract(shortcode_atts( array(
			'service_project_img'=> get_template_directory_uri(). '/images/project-1.jpg',
			'project_title_section'=>'Branding & Illustration Design',
			'project_title_name'=>'Design',

	
		), $attr));
		ob_start();
		?>
    
		<!-- About the service item section -->

		<div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(<?php echo wp_get_attachment_image_url($service_project_img,'full') ?>);">
			<div class="overlay"></div>
			<a href="#" class="btn-site d-flex align-items-center justify-content-center"><span class="icon-subdirectory_arrow_right"></span></a>
			<div class="text text-center p-4">
				<h3><a href="#"><?php echo esc_html($project_title_section); ?></a></h3>
				<span><?php echo esc_html($project_title_name); ?></span>
			</div>
		</div>



	<?php return ob_get_clean();
	}
	add_shortcode( 'section_project_base', 'consolution_project_base_section' );

?>
