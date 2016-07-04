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
      
       
     </div>
   </div>   <!--row close--> 

   
  </div> <!--container-->
</div> 




<div class="blog-section"> 
  <div class="container">         
   <div class="image-gallery">
     <h2>LOGOS</h2>
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



 
 <div class="testimonial-carousel">
  <div class="container">
     <h2>What our clients say</h2>
    
    <div data-ride="carousel" class="carousel slide" id="carousel-example-generic">

  <!-- Wrapper for slides -->
  <div role="listbox" class="carousel-inner"> 
    <!--************* START fetch testimonial *************-->
	<?php 
		$args=array
		(
			'post_type'      => 'testimonial',
			'posts_per_page' => 2,
			'order'        =>'DESC'
		);
		$testi = new WP_Query($args);
			$b=0;
			while( $testi -> have_posts() ) : $testi -> the_post();
				if($b==0)
				{ ?>
						<div class="item active">
						<?php the_content(); ?>
						<p class="author-review"><?php the_title(); ?></p>
						</div>
				<?php }
				else
				{ ?>	<div class="item">
						<p><?php the_content(); ?></p>
						<p class="author-review"><?php echo the_title(); ?></p>
						</div>
			<?php	}
			$b++; 
			endwhile
	?>
    
</div>

	<!--************* END fetch testimonial *************-->

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  </div>
</div> <!--testimonial-carousel--->

<?php get_footer(); ?>