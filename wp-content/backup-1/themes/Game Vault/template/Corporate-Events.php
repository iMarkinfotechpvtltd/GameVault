<?php 
/*
Template Name: Corporate Events
*/
?>
<?php get_header(); ?>
<div class="blog-section"> 
  <div class="container">         
   <div class="image-gallery">
     <h2>LOGOS</h2>
    <div class="row">
      <div class="col-xs-6 col-md-3">
         <img src="<?php echo esc_url(get_template_directory_uri());?>/images/2.jpg">  
      </div> <!--col-xs-12-->
      <div class="col-xs-6 col-md-3">
         <img src="<?php echo esc_url(get_template_directory_uri());?>/images/4.jpg" alt="...">  
      </div> <!--col-xs-12-->
      <div class="col-xs-6 col-md-3">
         <img src="<?php echo esc_url(get_template_directory_uri());?>/images/3.jpg" alt="...">  
      </div> <!--col-xs-12-->
      <div class="col-xs-6 col-md-3">
         <img src="<?php echo esc_url(get_template_directory_uri());?>/images/5.jpg" alt="...">    
      </div> <!--col-xs-12-->
      <div class="col-xs-6 col-md-3">
         <img src="<?php echo esc_url(get_template_directory_uri());?>/images/2.jpg">  
      </div> <!--col-xs-12-->
      
      <div class="col-xs-6 col-md-3">
         <img src="<?php echo esc_url(get_template_directory_uri());?>/images/6.jpg">  
      </div> <!--col-xs-12-->
      
      <div class="col-xs-6 col-md-3">
         <img src="<?php echo esc_url(get_template_directory_uri());?>/images/2.jpg">  
      </div> <!--col-xs-12-->
      
      <div class="col-xs-6 col-md-3">
         <img src="<?php echo esc_url(get_template_directory_uri());?>/images/2.jpg">  
      </div> <!--col-xs-12-->    
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

<?php get_footer(); ?>