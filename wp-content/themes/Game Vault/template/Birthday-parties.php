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
      		<a class="btn btn-default btn-read-more price" href="<?php echo site_url(); ?>/contact">Enquire Now</a>
      </div> <!--col-xs-12 col-md-6 Close-->
      
      <div class="col-xs-12 col-md-6">
         <?php the_field('right_side_pricing_table',58); ?>
         <a class="btn btn-default btn-read-more price" href="<?php echo site_url(); ?>/contact">Enquire Now</a>
      </div> <!--col-xs-12 col-md-6 Close-->
	  
    </div> <!--row-->
 
  </div>
</div> <!--pricing-section-->

	<!-- fetch the testimonial -->
	<?php get_sidebar('testimonial'); ?>

<?php get_footer(); ?>