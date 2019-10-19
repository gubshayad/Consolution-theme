<?php
    function consolution_base_section_1($attr){

        extract(shortcode_atts(array(
            'about_bread_come_img'=>'Set about breat come images',
            'about_section_image'=>'Set about images',
            'section_title_1'=>'This is another section',
            'section_about_desc_1'=>'This is desciption',
            'section_about_title_color'=>'This about title color',
            'section_about_welc_title'=>'This about welcomoe section',
            'section_about_welc_desc'=>'This about welcomoe desc',
 
        ), $attr));

        ob_start(); 
        ?> 

		<section class="hero-wrap hero-wrap-2" style="background-image: url(<?php echo wp_get_attachment_image_url($about_bread_come_img,'full');?>);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row no-gutters slider-text align-items-center justify-content-center">
				<div class="col-md-9 ftco-animate text-center">
					<h1 class="mb-2 bread"><?php echo the_title(); ?></h1>
					<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span><?php echo the_title(); ?><i class="ion-ios-arrow-forward"></i></span></p>
				</div>
				</div>
			</div>
		</section>

        <section class="ftco-section">
			<div class="container">
				<div class="row d-flex">
					<div class="col-md-5 order-md-last wrap-about align-items-stretch">
						<div class="wrap-about-border">
							<div class="img" style="background-image: url(<?php echo wp_get_attachment_image_url($about_section_image,'full');?>); border"></div>
							<div class="text">
								<h3 style="color:<?php echo esc_html($section_about_title_color);?>"><?php echo esc_html( $section_title_1) ?></h3>
								<p><?php echo esc_html($section_about_desc_1); ?></p>
								<p><a href="#" class="btn btn-primary py-3 px-4">Contact us</a></p>
							</div>
						</div>
					</div>
					<div class="col-md-7 wrap-about pr-md-4 ftco-animate">
                	<h2 class="mb-4"><?php echo esc_html($section_about_welc_title); ?></h2>
						<p><?php echo esc_html($section_about_welc_desc) ?></p>
				
					</div>
				</div>
			</div>
		</section>

<?php
        return ob_get_clean();
    }
    add_shortcode( 'section_base_1', 'consolution_base_section_1' );
?>

<?php 
	function about_base_bottom_sec($attr){
		extract(shortcode_atts( array(
			'about_bottom_sec_img'=>'about bottom images',
			'about_bottom_sec_title'=>'about bottom title',
			'about_bottom_sec_desc'=>'about bottom desc',
		), $attr));
		ob_start();
		?>

		<section class="ftco-section ftco-counter">
			<div class="container">
				<div class="row justify-content-center mb-5 pb-2 d-flex">
    			<div class="col-md-6 align-items-stretch d-flex">
    				<div class="img img-video d-flex align-items-center" style="background-image: url(<?php echo wp_get_attachment_image_url($about_bottom_sec_img,'full')?>);">
    					<div class="video justify-content-center">
								<a href="https://vimeo.com/45830194" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
									<span class="ion-ios-play"></span>
		  					</a>
							</div>
    				</div>
    			</div>
				<div class="col-md-6 heading-section ftco-animate pl-lg-5 pt-md-0 pt-5">
					<h2 class="mb-4"><?php echo esc_html($about_bottom_sec_title) ?></h2>
					<p><?php echo esc_html($about_bottom_sec_desc);?></p>
				</div>
				</div>	
			</div>
		</section>

	<?php	return ob_get_clean();
	}
	add_shortcode( 'about_base_1', 'about_base_bottom_sec' );
?>

<?php 
	function about_counter_bottom_sec($attr){
		extract(shortcode_atts( array(
			'about_counter_sec_img'=>'about counter images',
			'about_counter_sec_title'=>'about counter title',
			
		), $attr));
		ob_start();
		?>

		<section class="ftco-intro ftco-no-pb img" style="background-image: url(<?php echo wp_get_attachment_image_url( $about_counter_sec_img, 'full') ?>);">
			<div class="container">
				<div class="row justify-content-center mb-5">
					<div class="col-md-10 text-center heading-section heading-section-white ftco-animate">
						<h2 class="mb-0"><?php echo esc_html( $about_counter_sec_title); ?></h2>
					</div>
				</div>	
			</div>
		</section>
	<?php	return ob_get_clean();
	}
	add_shortcode( 'about_counter_sec', 'about_counter_bottom_sec' );
?>


<?php 
	function about_counter_count_sec($attr){
		extract(shortcode_atts( array(
			'about_counter_project'=>'about counter images',
			'about_counter_sec_title'=>'about counter title',
			'about_counter_project'=>200,
			'about_counter_name'=>'PROJECTS COMPLETED',
			
		), $attr));
		ob_start();
		?>
		<section class="ftco-counter" id="section-counter">
			<div class="container">
				<div class="row d-md-flex align-items-center justify-content-center">
					<div class="wrapper">
						<div class="row d-md-flex align-items-center">
							<div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
								<div class="block-18">
									<div class="icon"><span class="flaticon-doctor"></span></div>
									<div class="text">
										<strong class="number" data-number="<?php echo esc_html($about_counter_project);?>">0</strong>
										<span><?php echo esc_html($about_counter_name); ?></span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	<?php	return ob_get_clean();
	}
	add_shortcode( 'about_counter_count_sec', 'about_counter_count_sec' );
?>

<?php 
	function about_client_sec($attr){
		extract(shortcode_atts( array(
			'about_client_sec'=>'Our Clients Says',
			'about_client_desc'=>'Separated they live in. A small river named Duden flows by their place and supplies it with the 							necessary regelialia. It is a paradisematic country',

			
		), $attr));
		ob_start();
		?>

		<div class="row justify-content-center mb-5">
			<div class="col-md-8 text-center heading-section client-heading ftco-animate">
				<h2 class="mb-4"><?php echo esc_html($about_client_sec); ?></h2>
				<p><?php echo esc_html($about_client_desc); ?></p>
			</div>
		</div>

	<?php	return ob_get_clean();
	}
	add_shortcode( 'about_clients_sec', 'about_client_sec' );
?>

