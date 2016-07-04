<?php
/*
Template Name: Blog
*/
?>
<?php get_header(); ?>

<div class="blog-section"> 
  <div class="container">
    <h2>blog</h2>

<?php 
		global $post;
		
		if ( get_query_var('paged') ) {
    $paged = get_query_var('paged');
} elseif ( get_query_var('page') ) { // 'page' is used instead of 'paged' on Static Front Page
    $paged = get_query_var('page');
} else {
    $paged = 1;
}

$args = array(
    'post_type' => 'post', 
    'posts_per_page' => 10,
    'paged' => $paged,
    'post_status' => 'publish',
    'ignore_sticky_posts' => true,
    'order' => 'DESC', // 'ASC'
);
		
		$posts = new WP_Query($args);
			
			while( $posts -> have_posts() ) : $posts -> the_post(); ?>
				<div class="blog-internal">
				  <div class="row">  
					<div class="col-xs-12 col-md-4">
					  <a class="more" href=" <?php the_permalink(); ?> "><?php the_post_thumbnail('blog'); ?></a>
					 
					</div>  <!--col-xs-12 col-md-4-->
					<div class="col-xs-12 col-md-8">
					  <a class="more" href=" <?php the_permalink(); ?> "><h3><?php the_title();  ?></h3></a>
					 <ul class="posted-info">
					   <li><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo get_the_date('F j,Y', $post->ID); ?> </li>
					   <li>Posted By: <?php the_author(); ?></li> 
					 </ul>
					 
					 <p><?php the_content(); ?> <a class="more" href=" <?php the_permalink(); ?> ">[Read More]</a></p>
							  
					</div>  <!--col-xs-12 col-md-4--> 
				  </div> <!--row-->  
				</div>  <!--blog-internal-->
			
			<?php endwhile ?>
				
			<!-- ********** END fetching the slider posts  **********-->

</div> <!--container-->
</div><!--blog-section Close--> 




<?php get_footer(); ?>

