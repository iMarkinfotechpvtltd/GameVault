<?php
/*
Template Name: BirthdayParties
*/
?>
<?php get_header(); ?>

<div class="event-section"> 
  <div class="container">
    <h2>birthdays</h2>
  
   <div class="row event-internal">  
     <div class="col-xs-12">   
	<?php	$image=get_post_meta(71,"birthday_section_image",true);
		$thumb = wp_get_attachment_image_src($image, 'full' );
	  ?>
      <img src="<?php echo $url = $thumb['0'];?>" alt="...." />
       <h3><?php the_field('birthday_section_heading',71); ?></h3>
       <?php the_field('birthday_section_content',71); ?>
      
       
     </div>
   </div>   <!--row close--> 

   
  </div> <!--container-->
</div> <!--event-section Close-->

<div class="pricing-section">
  <div class="container">
    <h2>pricing</h2>
    
    <div class="row"> 
      <div class="col-xs-12 col-md-6">
        <!-- ****** fetching left side table content ***** -->
	  <?php the_field('left_side_pricing_table',58); ?>
      </div> <!--col-xs-12 col-md-6 Close-->
      
      <div class="col-xs-12 col-md-6">
         <?php the_field('right_side_pricing_table',58); ?>
      </div> <!--col-xs-12 col-md-6 Close-->
    </div> <!--row-->
    
  </div>
</div> <!--pricing-section-->
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


<?php get_footer(); ?>