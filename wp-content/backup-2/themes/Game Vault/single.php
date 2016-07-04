<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); 
global $post; ?>

<div class="event-section"> 
	<div class="container">
		<h2>BLOG</h2>
		<div class="row event-internal">  
    		 <div class="col-xs-12">   
				  <?php the_post_thumbnail('blog'); ?>
				   <h3><?php the_title();  ?></h3>
				   <P> <?php echo $post->post_content; ?></p> 
	    	 </div>
	   </div>   <!--row close--> 		   
    </div> <!--container-->
</div>



<?php get_footer(); ?>
