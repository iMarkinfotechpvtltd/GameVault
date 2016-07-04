<div class="footer">
  <div class="container">
    <div class="row">
       <div class="col-sm-6 col-md-3 quick-links">
         <h3>Quick Links</h3>
         
         <ul>
             <?php

				$defaults = array(
				'theme_location'  => '',
				'menu'            => 'footer_menu',
				'container'       => '',
				'container_class' => '',
				'container_id'    => '',
				'menu_class'      => 'menu',
				'menu_id'         => '',
				'echo'            => true,
				'fallback_cb'     => 'wp_page_menu',
				'before'          => '',
				'after'           => '',
				'link_before'     => '',
				'link_after'      => '',
				'items_wrap'      => '%3$s',
				'depth'           => 0,
				'walker'          => ''
				);
				wp_nav_menu( $defaults );
		?> 
         </ul>
       </div> <!--col-sm-6 col-md-3-->
       
        <div class="col-sm-6 col-md-3 contact-us">
         <h3>contact us</h3>
          
         <ul>
            <li><span class="location"></span><?php the_field('address_line2',61); ?>
			<?php the_field('address_line3',61); ?>
			</li>
            <li><span class="phone"></span><a href="tel:+0419 903 922">Phone: <?php the_field('phone_number',61); ?></a></li>    
            <li><span class="email"></span><a href="mailto:info@gamevault.com">Email: <?php the_field('email_address',61); ?></a></li>
         </ul>
         
       </div> <!--col-sm-6 col-md-3-->
       
       <div class="col-sm-6 col-md-3 news-letter">
         <h3><?php the_field('footers_form_heading',14); ?></h3>
         
            <div class="input-holder">
              <span class="icon user"></span>
              <input type="text" class="form-control" placeholder="Name"> 
             </div>
             <div class="input-holder">
               <span class="icon email"></span>
              <input type="text" class="form-control" placeholder="Email"> 
             </div>
             
            <input type="button" class="btn btn-default btn-submit" value="Submit"> 
         
       </div> <!--col-sm-6 col-md-3-->
       
       <div class="col-sm-6 col-md-3 social-icons-section">
         <h3>Connect With Us On</h3>
         
         <ul class="social-icons">
            <li class="facebook"><a href=""></a></li>
            <li class="printest"><a href=""></a></li>
            <li class="instagram"><a href=""></a></li>
            <li class="google"><a href=""></a></li>
            <li class="youtube"><a href=""></a></li>
            
         </ul>  
         
         <div class="games-logo">
             <ul>
                <li><a href="#"><img src="<?php echo esc_url(get_template_directory_uri());?>/images/ubi-log.png" alt="...." /></a></li>
                <li><a href="#"><img src="<?php echo esc_url(get_template_directory_uri());?>/images/test-.png" alt="...." /></a></li>
                <li><a href="#"><img src="<?php echo esc_url(get_template_directory_uri());?>/images/w.png" alt="...." /></a></li>
             </ul>
         </div>
         
       </div> <!--col-sm-6 col-md-3-->
       
     </div>
  </div> <!--container-->
 
 <div class="copy-right-bar"> 
   <p>Copyright© 2016  Game Vault, Perth. Allrights Reserved.</p>
 </div>
</div> <!--footer-->


<!--MODAL-->

	
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div  id="div1" class="embed-responsive embed-responsive-16by9">
        <?php the_field('video_home_page',14);?>
      </div>      
    </div>
  </div>
</div>


    <?php wp_footer(); ?>
	
	<script src="<?php echo esc_url(get_template_directory_uri());?>/js/bootstrap.min.js"></script>
    <script src="<?php echo esc_url(get_template_directory_uri());?>/js/bootstrap-select.min.js"></script>
    <script src="<?php echo esc_url(get_template_directory_uri());?>/js/owl.carousel.min.js"></script>
	<script src="<?php echo esc_url(get_template_directory_uri());?>/js/my-script.js"></script>
	
</body>
</html>
