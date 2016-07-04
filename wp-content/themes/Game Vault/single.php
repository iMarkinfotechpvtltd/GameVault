<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); 
global $post; 

?>

<div class="event-section single-blog"> 
	<div class="container">
		<h2>BLOG</h2>
			<div class="blog-internal">
			  <div class="row">  
				<div class="col-xs-12 col-md-4">
				  <?php the_post_thumbnail('blog'); ?>
				 
				</div>  <!--col-xs-12 col-md-4-->
				<div class="col-xs-12 col-md-8">
				
					
				  <h3><?php the_title();  ?></h3>
				 <ul class="posted-info">
				 
				   <li><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo get_the_date('F j,Y', $post->ID); ?> </li>
				   <li><?php $i=0; while (have_posts()) : the_post(); ?> Posted By: <?php  the_author(); ?><?php $i++;endwhile; ?>	 </li> 
				 </ul>
				 <p><?php the_content(); ?> </p>
					 
				</div>  <!--col-xs-12 col-md-4--> 
				
			  </div> <!--row-->  
			</div>  <!--blog-internal-->
			
		   
    </div> <!--container-->
</div>



<?php get_footer(); ?>
