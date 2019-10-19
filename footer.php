
		<?php global $datatrix ?>
    
    <?php if($datatrix['opt-fooer']==1) : ?>

    <style>
          .ftco-footer {
              background: <?php echo $datatrix['opt-footer-bg-color'];?>
          }
    </style>
    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
              <h2 class="ftco-heading-2">Recent Blog</h2>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(<?php echo get_template_directory_uri()?>/images/image_1.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> June 27, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-5 d-flex">
                <a class="blog-img mr-4" style="background-image: url(<?php echo get_template_directory_uri()?>/images/image_2.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> June 27, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5 ml-md-4">
              <h2 class="ftco-heading-2">Links</h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Home</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>About</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Services</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Projects</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2">Subscribe Us!</h2>
              <form action="#" class="subscribe-form">
                <div class="form-group">
                  <input type="text" class="form-control mb-2 text-center" placeholder="Enter email address">
                  <input type="submit" value="Subscribe" class="form-control submit px-3">
                </div>
              </form>
            </div>
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2 mb-0">Connect With Us</h2>
            	<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <?php if(!empty ($datatrix['opt-footer-social-network']['facebook'])) :?>
                   <li class="ftco-animate"><a href="<?php echo $datatrix['opt-footer-social-network']['facebook'];?>" target="_blank"><span class="icon-facebook"></span></a></li>
                <?php endif;?> 
                <?php if(!empty ($datatrix['opt-footer-social-network']['twitter'])) :?>
                    <li class="ftco-animate"><a href="<?php echo $datatrix['opt-footer-social-network']['twitter'];?>" target="_blank"><span class="icon-twitter"></span></a></li>
                <?php endif;?> 
                <?php if(!empty ($datatrix['opt-footer-social-network']['instagram'])) {?>
                    <li class="ftco-animate"><a href="<?php echo $datatrix['opt-footer-social-network']['instagram'];?>" target="_blank"><span class="icon-instagram"></span></a></li>
                <?php }?>     
                <?php if(!empty ($datatrix['opt-footer-social-network']['youtube'])) {?>
                    <li class="ftco-animate"><a href="<?php echo $datatrix['opt-footer-social-network']['youtube'];?>" target="_blank"><span class="icon-youtube"></span></a></li>
                <?php }?>  
                <?php if(!empty ($datatrix['opt-footer-social-network']['skype'])) {?>
                    <li class="ftco-animate"><a href="<?php echo $datatrix['opt-footer-social-network']['skype'];?>" target="_blank"><span class="icon-skype"></span></a></li>
                <?php }?>  
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> <?php echo $datatrix['opt-footer-copyright']; ?> by <a style="color:red" href="https://www.datatrixsoft.com">Datatrix soft</a>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>

    <?php endif ; ?>
    
 <?php wp_footer(); ?>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
 
  </body>
</html>