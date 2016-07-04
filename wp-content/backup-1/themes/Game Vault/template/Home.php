<?php 
/*
Template Name: Home
*/
?>

<?php get_header(); 

function get_numerics ($str) 
{
	preg_match_all('/\d+/', $str, $matches);
	return $matches[0];
}

?>
<div class="banner-section">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

	
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
  
  <!-- ******** START fetching the slider posts ******** -->
    <?php 
		$args=array
		(
			'post_type'      => 'slider',
			'posts_per_page' => 3,
			'order'        =>'DESC'
		);
		$Slider = new WP_Query($args);
			$a=0;
			while( $Slider -> have_posts() ) : $Slider -> the_post();
				if($a==0)
				{
						echo '<div class="item active">';
						the_post_thumbnail('sliderimg'); 
				}
				else
				{
						echo '<div class="item">';
						the_post_thumbnail('sliderimg'); 				
				}
			$a++; ?>
					<div class="banner-caption">
						<div class="container">
							<ul>
							   <?php the_field('home_slider_inner_text',14); ?>
							 </ul>
						</div>
					</div> <!--banner-caption-->
				</div>
			
			<?php endwhile?><!-- ********** END fetching the slider posts  **********-->
		</div>				
    </div>                        
</div> <!---banner-section Close--->


<div class="gaming-expericnce">
  <div class="container">
     <h2><?php the_field('slider_below_text1',14); ?></h2>
     <p><?php the_field('slider_below_text2',14); ?></p>
     
     <div class="button-section">
       <img src="<?php echo esc_url(get_template_directory_uri());?>/images/left-border.svg" alt="..." />
       <a class="btn btn-default btn-book" href="<?php echo site_url(); ?>/contact">book now</a>
        <img src="<?php echo esc_url(get_template_directory_uri());?>/images/right-border.svg" alt="..." />
     </div> <!--button-section Close-->
  </div>
</div> <!--gaming-expericnce Close-->


<div class="video-section">
  <div class="container">
    <div class="game-video">
      <h2>watch our video</h2>
      <div class="row">
         <div class="col-xs-12 col-md-6">
           <div class="iframe-border">
             <a href="#" data-toggle="modal" data-target="#myModal"><img src="<?php echo esc_url(get_template_directory_uri());?>/images/video.jpg" alt="..." /></a>
           </div>
         </div> <!--col-xs-12 col-md-6-->
         <div class="col-xs-12 col-md-6">
           <div class="iframe-border">
              <a href="<?php echo site_url(); ?>/pricing"><img src="<?php the_field('pricing_and_packages',14); ?>" alt="..." /></a>
           </div>
         </div> <!--col-xs-12 col-md-6-->
         
      </div> <!--row-->
    </div> <!--game-video-->
    
    <div class="game-vault home">
      <div class="row">
        <div class="col-xs-12 col-md-7 vault-section">
           <h2>WELCOME TO GAME VAULT</h2>
           
		   <!-- ********* Read the Main Content Of About Us Page ********-->
		   <?php
			$include = get_pages('include=75');
			$content = apply_filters('the_content',$include[0]->post_content);
			echo $content;
			?>
           
           <a class="btn btn-default btn-read-more" href="<?php echo site_url(); ?>/about">Read More</a>
           
        </div> <!--col-xs-12 col-md-7-->
        
        <div class="col-xs-12 col-md-5 vault-contact-form">
           <h2>contact us</h2> 
          <div class="fomr-section">
				<?php echo do_shortcode( '[contact-form-7 id="31" title="Contact form 1"]'); ?>
		 </div> <!---fomr-section--->       
        </div> <!--col-xs-12 col-md-5-->
        
      </div> <!--row-->
    </div> <!--game-vault-->
    
  </div>
</div> <!---video-section--->

<div class="testimonial-carousel">
  <div class="container">
     <h2><?php the_field('testimonial_heading',14); ?></h2>
    
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
  
  
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
				{ ?>	<div class="item">';
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

  
  <div class="grid-carousel">
      <div class="owl-carousel">
	  <?php //echo $post->ID;
			$one = get_post_meta(14,'home_bottom_slider',true); 
			$arr=get_numerics($one);
			 foreach($arr as $val)
			 {
				 $small_image_url = wp_get_attachment_image_src($val, 'full'); 
				 if($small_image_url != "")
				 {
		?>
                <div class="item"><img src="<?php echo $small_image_url[0]; ?>" alt="..."></div>
               
				 <?php } } ?>
	   </div>
  </div> <!--grid-carousel Close-->


  
  <?php get_footer(); ?>