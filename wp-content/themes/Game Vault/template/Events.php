<?php
/*
Template Name: Events
*/
?>
<?php get_header(); ?>

<div class="video-section">
  <div class="container">

    
    <div class="game-vault border-non">
      <div class="row">
        <div class="col-xs-12 col-md-7 vault-section">
           <h2>Events</h2>
           
           <?php //the_field('event_content',65); ?>
           
           <ul>
              <?php the_field('event_list_in_content',65); ?>
           </ul>
           
        </div> <!--col-xs-12 col-md-7-->
        
        <div class="col-xs-12 col-md-5 vault-contact-form">
           <h2>contact us</h2> 
          <div class="fomr-section">
             <?php echo do_shortcode( '[contact-form-7 id="253" title="Contact form_Event_Page"]'); ?>
          </div> <!---fomr-section--->       
        </div> <!--col-xs-12 col-md-5-->
        
      </div> <!--row-->
    </div> <!--game-vault-->
    
  </div>
</div> <!--video-section-->





<div class="corporates-event">
  <div class="container">
     <div class="row">
       <div class="col-xs-6 col-md-4">
          <div class="img-wrap">
          <a href="<?php echo site_url(); ?>/birthday"> <img src="<?php echo esc_url(get_template_directory_uri());?>/images/qq.jpg" alt="..." /></a>
          </div>
         <h3><a href="<?php echo site_url(); ?>/birthday">Birthday Parties</a></h3>
       </div>
       <div class="col-xs-6 col-md-4">
        <div class="img-wrap"> <a href="<?php echo site_url(); ?>/corporate-events"><img src="<?php echo esc_url(get_template_directory_uri());?>/images/ww.jpg" alt="...." /></a></div>
         <h3><a href="<?php echo site_url(); ?>/corporate-events">Corporate Events</a></h3>
       </div>
       
       <div class="col-xs-6 col-md-4">
         <div class="img-wrap"><a href="<?php echo site_url(); ?>/vacation-care"><img src="<?php echo esc_url(get_template_directory_uri());?>/images/www.jpg" alt="..." /></a></div>
         <h3><a href="<?php echo site_url(); ?>/vacation-care">Vacation Care</a></h3>
       </div>
       
       <div class="col-xs-6 col-md-4">
         <div class="img-wrap"><a href="<?php echo site_url(); ?>/school-incursions"><img src="<?php echo esc_url(get_template_directory_uri());?>/images/ee.jpg" alt="..." /></a></div>
         <h3><a href="<?php echo site_url(); ?>/school-incursions">School Incursions</a></h3>
       </div>
       
       <div class="col-xs-6 col-md-4">
         <div class="img-wrap"><a href="<?php echo site_url(); ?>/community-fairs"><img src="<?php echo esc_url(get_template_directory_uri());?>/images/rrr.jpg" alt="..." /></a></div>
         <h3><a href="<?php echo site_url(); ?>/community-fairs">Community Fairs</a></h3>
       </div>
       <div class="col-xs-6 col-md-4">
         <div class="img-wrap"><a href="<?php echo site_url(); ?>/gaming-tournaments"><img src="<?php echo esc_url(get_template_directory_uri());?>/images/dd.jpg" alt="..." /></a></div>
         <h3><a href="<?php echo site_url(); ?>/gaming-tournaments">Gaming Tournaments</a></h3>
       </div>
       
     </div> <!--row Close-->
  </div> 
</div> <!--corporates-event Close-->
<!--**********Testimonial section start ************-->

<?php get_sidebar('testimonial'); ?>
<!--**********Testimonial section start ************-->
<?php get_footer(); ?>