<?php global $datatrix ?>
<!DOCTYPE html>
<html lang="<?php language_attributes() ?>">
  <head>
    <title><?php wp_title('|',true,'right'); ?></title>
    <meta charset="<?php bloginfo('charset') ?>">
  
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800,900&display=swap" rel="stylesheet">

   <?php wp_head(); ?>
  </head>
  <body>
  		<?php if($datatrix['header-switch']==1): ?>
		<div class="bg-top navbar-light">
			<div class="container">
				<div class="row no-gutters d-flex align-items-center align-items-stretch">
					<div class="col-md-4 d-flex align-items-center py-4">

						<a class="navbar-brand" href="index.html">
							<?php 
								if($datatrix['opt-gallery-logo']['url']){
									?>
										<img style="width:34px; height:35px;" src="<?php echo $datatrix['opt-gallery-logo']['url']; ?>">
									<?php
								} else {
									echo $datatrix['logo-text'];
								}
							?>
							
						</a>
					</div>
					<div class="col-lg-8 d-block">
						<div class="row d-flex">
							<div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
								<div class="icon d-flex justify-content-center align-items-center"><span class="icon-<?php echo $datatrix['opt-header-icon-1']?>"></span></div>
								<div class="text">
									<span>Email</span>
									<span><?php echo $datatrix['opt-header-icon-text-1']; ?></span>
								</div>
							</div>
							<div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
								<div class="icon d-flex justify-content-center align-items-center"><span class="icon-<?php echo $datatrix['opt-header-icon-2']?>"></span></div>
								<div class="text">
									<span>Call</span>
									<span><?php echo $datatrix['opt-header-icon-text-2']; ?></span>
								</div>
							</div>
							<div class="col-md topper d-flex align-items-center justify-content-end">
								<p class="mb-0 d-block">
									<a href="#" class="btn py-2 px-3 btn-primary">
										<span><?php echo $datatrix['opt-header-search'];?></span>
									</a>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php endif; ?>
	  <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container d-flex align-items-center">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <form action="#" class="searchform order-lg-last">
          <div class="form-group d-flex">
            <input type="text" class="form-control pl-3" placeholder="Search">
            <button type="submit" placeholder="" class="form-control search"><span class="ion-ios-search"></span></button>
          </div>
        </form>

			
			<?php wp_nav_menu(array(
				'theme_location'=>'header_menu',
				'container'=>'div',
				'container_class'=>'collapse navbar-collapse',
				'menu_class'=>'navbar-nav mr-auto',
				'depth'=>2,
				'fallback_cb' => 'theme_default_menus',
			)); ?>
				
	      <!-- <div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active"><a href="index.html" class="nav-link pl-0">Home</a></li>
					<li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
					<li class="nav-item"><a href="project.html" class="nav-link">Projects</a></li>
					<li class="nav-item"><a href="services.html" class="nav-link">Services</a></li>
					<li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
					<li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
				</ul>
	      </div> -->
	    </div>
	  </nav>
    <!-- END nav -->