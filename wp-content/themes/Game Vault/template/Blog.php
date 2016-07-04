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

$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$loopb = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' =>2, 'paged' => $paged ) ); 
while ( $loopb->have_posts() ) : $loopb->the_post(); ?>
	
			<div class="blog-internal">
			  <div class="row">  
				<div class="col-xs-12 col-md-4">
				  <a class="more" href=" <?php the_permalink(); ?> "><?php the_post_thumbnail('blog'); ?></a>
				 
				</div>  <!--col-xs-12 col-md-4-->
				<div class="col-xs-12 col-md-8">
				  <a class="more" href=" <?php the_permalink(); ?> "><h3><?php the_title();  ?></h3></a>
				 <ul class="posted-info">
				   <li><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo get_the_date('F j, Y', $post->ID); ?> </li>
				   <li>Posted By: <?php the_author(); ?></li> 
				 </ul>
				 
				 <p><?php the_content(); ?> <a class="more" href=" <?php the_permalink(); ?> ">[Read More]</a></p>
						  
				</div>  <!--col-xs-12 col-md-4--> 
			  </div> <!--row-->  
			</div>  <!--blog-internal-->
			
          
<?php endwhile; wp_reset_query(); ?>

<div class="blog-pagination">  
<?php
if($loopb->max_num_pages>1){?>
   <ul class="pagination">
   <?php
     if ($paged > 1) { ?>
       <li class="prev"><a href="<?php echo '?paged=' . ($paged -1); //prev link ?>"></a></li>
                       <?php }
   for($i=1;$i<=$loopb->max_num_pages;$i++){?>
       <li><a href="<?php echo '?paged=' . $i; ?>" <?php echo ($paged==$i)? 'class="selected"':'';?>><?php echo $i;?></a></li>
       <?php
   }
   if($paged < $loopb->max_num_pages){?>
       <li class="next"><a href="<?php echo '?paged=' . ($paged + 1); //next link ?>"></a></li>
   <?php } ?> 
   
   </ul>

<?php } ?>		
 </div>	
 
</div> <!--container-->
</div><!--blog-section Close--> 




<?php get_footer(); ?>

