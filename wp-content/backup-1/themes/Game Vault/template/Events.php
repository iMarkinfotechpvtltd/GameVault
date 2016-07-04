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
           
           <?php the_field('event_content',65); ?>
           
           <ul>
              <?php the_field('event_list_in_content',65); ?>
           </ul>
           
        </div> <!--col-xs-12 col-md-7-->
        
        <div class="col-xs-12 col-md-5 vault-contact-form">
           <h2>contact us</h2> 
          <div class="fomr-section">
             <?php echo do_shortcode( '[contact-form-7 id="31" title="Contact form 1"]'); ?>
          </div> <!---fomr-section--->       
        </div> <!--col-xs-12 col-md-5-->
        
      </div> <!--row-->
    </div> <!--game-vault-->
    
  </div>
</div> <!--video-section-->



<!--**********Testimonial section start ************-->
<div class="testimonial-carousel">
  <div class="container">
     <h2>What our clients say</h2>
    
    <div data-ride="carousel" class="carousel slide" id="carousel-example-generic">

  <!-- Wrapper for slides -->
  <div role="listbox" class="carousel-inner">
    <!--************* START fetch testimonial *************-->
	<?php 
		$args=array
		(
			'post_type'      => 'testimonial',
			'posts_per_page' => 2,
			'order'        =>'DESC'
		);
		$testi = new WP_Query($args);
			$b=0;
			while( $testi -> have_posts() ) : $testi -> the_post();
				if($b==0)
				{ ?>
						<div class="item active">
						<?php the_content(); ?>
						<p class="author-review"><?php the_title(); ?></p>
						</div>
				<?php }
				else
				{ ?>	<div class="item">';
						<p><?php the_content(); ?></p>
						<p class="author-review"><?php echo the_title(); ?></p>
						</div>
			<?php	}
			$b++; 
			endwhile
	?>
  </div>

  <!-- Controls -->
  <a data-slide="prev" role="button" href="#carousel-example-generic" class="left carousel-control">
    <span aria-hidden="true" class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a data-slide="next" role="button" href="#carousel-example-generic" class="right carousel-control">
    <span aria-hidden="true" class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  </div>
</div>

<!--**********Testimonial section start ************-->

<div class="corporates-event">
  <div class="container">
     <div class="row">
       <div class="col-xs-6 col-md-4">
          <div class="img-wrap">
          <a href="<?php echo site_url(); ?>/event-internal"> <img src="<?php echo esc_url(get_template_directory_uri());?>/images/qq.jpg" alt="..." /></a>
          </div>
         <h3><a href="">Birthday Parties</a></h3>
       </div>
       <div class="col-xs-6 col-md-4">
        <div class="img-wrap"> <a href="<?php echo site_url(); ?>/corporate-events"><img src="<?php echo esc_url(get_template_directory_uri());?>/images/ww.jpg" alt="...." /></a></div>
         <h3><a href="">Corporate Events</a></h3>
       </div>
       
       <div class="col-xs-6 col-md-4">
         <div class="img-wrap"><a href="<?php echo site_url(); ?>/vocation-care"><img src="<?php echo esc_url(get_template_directory_uri());?>/images/www.jpg" alt="..." /></a></div>
         <h3><a href="">Vacation Care</a></h3>
       </div>
       
       <div class="col-xs-6 col-md-4">
         <div class="img-wrap"><a href="<?php echo site_url(); ?>/school-incursions"><img src="<?php echo esc_url(get_template_directory_uri());?>/images/ee.jpg" alt="..." /></a></div>
         <h3><a href="">School Incursions</a></h3>
       </div>
       
       <div class="col-xs-6 col-md-4">
         <div class="img-wrap"><a href="<?php echo site_url(); ?>/community-fairs"><img src="<?php echo esc_url(get_template_directory_uri());?>/images/rrr.jpg" alt="..." /></a></div>
         <h3><a href="">Community Fairs</a></h3>
       </div>
       <div class="col-xs-6 col-md-4">
         <div class="img-wrap"><a href="<?php echo site_url(); ?>/gaming-tournaments"><img src="<?php echo esc_url(get_template_directory_uri());?>/images/dd.jpg" alt="..." /></a></div>
         <h3><a href="">Gaming Tournaments</a></h3>
       </div>
       
     </div> <!--row Close-->
  </div> 
</div> <!--corporates-event Close-->
<?php get_footer(); ?>