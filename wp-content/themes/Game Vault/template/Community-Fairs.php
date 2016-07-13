<?php 
/*
Template Name: Community Fairs
*/
?>

<?php get_header(); ?>

<div class="event-section"> 
  <div class="container">
    <h2>Community Fairs</h2>
  
   <div class="row event-internal">  
     <div class="col-xs-12">   
	<?php	$image=get_post_meta(178,"community_fare_image",true);
		$thumb = wp_get_attachment_image_src($image, 'full' );
	  ?>
      <img src="<?php echo $url = $thumb['0'];?>" alt="...." />
       <h3><?php the_field('community_fare_heading',178); ?></h3>
       <?php the_field('community_fare_content',178); ?>
      <div class="submit-wrap btn-green rev" ><a class="btn btn-default btn-read-more" href="<?php echo site_url(); ?>/contact">Book Now</a></div>
       
     </div>
   </div>   <!--row close--> 

   
  </div> <!--container-->
</div> <!--event-section Close-->

<!-- fetch the testimonial -->
	<?php get_sidebar('testimonial'); ?>




<?php get_footer(); ?>
