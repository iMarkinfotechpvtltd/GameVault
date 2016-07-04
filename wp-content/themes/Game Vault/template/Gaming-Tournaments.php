<?php 
/*
Template Name: Gaming Tournaments
*/
?>

<?php get_header(); ?>

<div class="event-section"> 
  <div class="container">
    <h2>Gaming Tournaments</h2>
  
   <div class="row event-internal">  
     <div class="col-xs-12">   
	<?php	$image=get_post_meta(180,"gaming_tournaments_image",true);
		$thumb = wp_get_attachment_image_src($image, 'full' );
	  ?>
      <img src="<?php echo $url = $thumb['0'];?>" alt="...." />
       <h3><?php the_field('gaming_tournaments_heading',180); ?></h3>
       <?php the_field('gaming_tournaments_content',180); ?>
      
       
     </div>
   </div>   <!--row close--> 

   
  </div> <!--container-->
</div> <!--event-section Close-->

<!-- fetch the testimonial -->
	<?php get_sidebar('testimonial'); ?>




<?php get_footer(); ?>
