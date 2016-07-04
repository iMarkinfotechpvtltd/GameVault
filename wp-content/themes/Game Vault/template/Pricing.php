<?php
/*
Template Name: Pricing
*/
?>
<?php get_header(); ?>

<div class="pricing-section">
  <div class="container">
    <h2>pricing</h2>
    
    <div class="row"> 
      <div class="col-xs-12 col-md-6">
	  <!-- ****** fetching left side table content ***** -->
	  <?php the_field('left_side_pricing_table',58); ?>
        <a class="btn btn-default btn-read-more price" href="<?php echo site_url(); ?>/contact">Enquire Now</a>
      </div> <!--col-xs-12 col-md-6 Close-->
      
      <div class="col-xs-12 col-md-6">
		<!-- ****** fetching right side table content ***** -->
         <?php the_field('right_side_pricing_table',58); ?> 
         
         <a class="btn btn-default btn-read-more price" href="<?php echo site_url(); ?>/contact">Enquire Now</a>
      </div> <!--col-xs-12 col-md-6 Close-->
	  
    </div> <!--row-->
	
  </div>
</div> <!--pricing-section-->
<!-- fetch the testimonial -->
	<?php get_sidebar('testimonial'); ?>



<?php get_footer(); ?>