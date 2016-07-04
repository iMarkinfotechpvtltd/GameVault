<?php
/*
Template Name: Gallery
*/
?>
<?php get_header(); ?>
<div class="blog-section"> 
  <div class="container">
    <h2>gallery</h2>
   
   <div class="video-gallery ">
     <h3>videos</h3>
    
   
     <div class="gallery-carousel">
		<?php 
		$args=array
		(
			'post_type'      => 'video',
			'posts_per_page' => -1,
			'order'        =>'DESC'
		);
		$image = new WP_Query($args);
		$image1=$image;
			$a=0;
			while( $image -> have_posts() ) : $image -> the_post(); ?>
				  <div class="col-xs-12 col-sm-4">
					 <div class="embed-responsive embed-responsive-16by9 iframe-custom">
						<a href="#" data-toggle="modal" data-target="#myModal<?php echo $a; ?>"><?php the_post_thumbnail('full');?> <button type="button"></button></a>
					 </div>
				  </div>
				  <?php $a++;
			endwhile ?>
       </div>   <!--grid-carousel Close-->  
		
		<?php 
		$z=0;
			while( $image -> have_posts() ) : $image -> the_post(); ?>
		<!-- model -->
				  <div class="modal fade" id="myModal<?php echo $z; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static" data-keyboard="false">
					  <div class="modal-dialog" role="document">
						<div class="modal-content">
						  <div class="modal-header">
							<button type="button" onClick="destroyVideo(<?php echo $z; ?>)" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						  </div>
						  <div  id="div1" class="embed-responsive embed-responsive-16by9">
							<iframe class="Player" scr="<?php the_content();?>"></iframe>
						  </div>      
						</div>
					  </div>
					</div>
		<?php $z++; endwhile ?>
   </div>   
   
   
   <div class="image-gallery">
     <h3>PHOTOS</h3>
    <div class="row div1">
	<?php 
		$args = array('post_type'      => 'images',
					  'posts_per_page' => 4,
					  'order'          => 'DESC',
					  'offset'         =>  0 
					 );
		$image = new WP_Query($args);
			while( $image -> have_posts() ) : $image -> the_post(); 
				$url = wp_get_attachment_url( get_post_thumbnail_id($image->ID) )?>
				<div class="col-xs-6 col-md-3 asd" >
					<a href="<?php echo $url ?>" data-lightbox="roadtrip"><img src="<?php echo $url ?>"></a>  
				</div> <!--col-xs-12-->
		<?php endwhile; wp_reset_query(); ?>
    </div> <!--row-->
	
	<input type="hidden" name="page_val" id="page_val" value="2"> 
	<input type="hidden" name="page_val" id="total_rec" value="<?php echo $image->found_posts; ?>">
    <div class="submit-wrap" ><a href="javascript:void(0);" class="btn btn-default btn-read-more" onclick="pagination();">Load More</a></div>
	<img src="<?php bloginfo('template_url'); ?>/images/loader.gif" id="loader" style="display:none;" />
   </div> <!--image-gallery-->
      
  </div> <!--container-->
</div> <!--blog-section Close-->          




<?php get_footer(); ?>