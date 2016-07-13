<?php 
/*
Template Name: Corporate Events
*/
?>
<?php get_header(); 
function get_numerics ($str) 
{
	preg_match_all('/\d+/', $str, $matches);
	return $matches[0];
}?>

<div class="event-section"> 
  <div class="container">
    <h2>Corporate Events</h2>
  
   <div class="row event-internal">  
     <div class="col-xs-12">   
	<?php	$image=get_post_meta(191,"image",true);
		$thumb = wp_get_attachment_image_src($image, 'full' );
	  ?>
      <img src="<?php echo $url = $thumb['0'];?>" alt="...." />
       <h3><?php the_field('title_after_heading',191); ?></h3>
       <?php the_field('content',191); ?>
      <div class="submit-wrap btn-green rev" ><a class="btn btn-default btn-read-more" href="<?php echo site_url(); ?>/contact">Book Now</a></div>
       
     </div>
   </div>   <!--row close--> 

   
  </div> <!--container-->
</div> 




<div class="blog-section padd"> 
  <div class="container">         
   <div class="image-gallery cp-section">
     <h2>Past Clients</h2>
    <div class="row">
		<?php //echo $post->ID;
			$one = get_post_meta(191,'logos',true); 
			$arr=get_numerics($one);
			 foreach($arr as $val)
			 {
				 $small_image_url = wp_get_attachment_image_src($val, 'full'); 
				 if($small_image_url != "")
				 { 
				?>
					<div class="col-xs-6 col-md-3">
						<div class="logo-cont-div">
							<img src="<?php echo $small_image_url[0]; ?>" alt="..." > 
						</div>
					</div> <!--col-xs-12-->
               
		<?php } } ?>   
    </div> <!--row-->
   </div> <!--image-gallery-->
 </div>
</div>  

<!-- fetch the testimonial -->
	<?php get_sidebar('testimonial'); ?>

<?php get_footer(); ?>