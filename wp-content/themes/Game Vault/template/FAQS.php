<?php
/* 
Template Name: FAQS
*/
?>

<!--*********** get header**********-->
<?php
get_header();
?>
<div class="blog-section faq-section"> 
  <div class="container">
    <h2>FAQ</h2>
  
  <div class="row">
<?php 
		$args=array
		(
			'post_type'      => 'faqs',
			'posts_per_page' => 10,
			'order'        =>'ASC',
			'offset'		=> 0
		);
		$faq = new WP_Query($args);
			$a=0;?>
			<div class="panel-group col-xs-12 col-md-6 faq-page" id="accordion" role="tablist" aria-multiselectable="true">
			<?php while( $faq -> have_posts() ) : $faq -> the_post();
				if($a<10)
				{?>
					<?php if($a==0)
					{?>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="heading<?php echo $a; ?>">
							  <h4 class="panel-title">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $a; ?>" aria-expanded="false" aria-controls="collapse<?php echo $a; ?>">
								 <?php the_title(); ?>
								</a>
							  </h4>
							</div>
							<div id="collapse<?php echo $a; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?php echo $a; ?>">
							  <div class="panel-body">
								<?php the_content(); ?>
							  </div>
							</div>
						</div>
					<?php }
					else
					{?>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="heading<?php echo $a; ?>">
							  <h4 class="panel-title">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $a; ?>" aria-expanded="false" aria-controls="collapse<?php echo $a; ?>">
								 <?php the_title(); ?>
								</a>
							  </h4>
							</div>
							<div id="collapse<?php echo $a; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?php echo $a; ?>">
							  <div class="panel-body">
								<?php the_content(); ?>
							  </div>
							</div>
						</div>
					<?php } 
				
				 }
				else
				{ ?>
					
			<?php	}
			$a++;
			 endwhile?>
			</div>
			
			
<?php 
		$args=array
		(
			'post_type'      => 'faqs',
			'posts_per_page' => 9,
			'order'        =>'ASC',
			'offset'		=> 10
		);
		$faq = new WP_Query($args);
			$a=10;?>
			<div class="panel-group col-xs-12 col-md-6 faq-page" id="accordion0" role="tablist" aria-multiselectable="true">
			<?php while( $faq -> have_posts() ) : $faq -> the_post(); ?>
				<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="heading<?php echo $a; ?>">
						  <h4 class="panel-title">
							<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion0" href="#collapse<?php echo $a; ?>" aria-expanded="false" aria-controls="collapse<?php echo $a; ?>">
							  <?php the_title(); ?>
							</a>
								  </h4>
								</div>
								<div id="collapse<?php echo $a; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?php echo $a; ?>">
								  <div class="panel-body">
							<?php the_content(); ?>
						  </div>
						</div>
					  </div>
			 <?php $a++; endwhile ?>
			</div>
    </div><!--faq-page Close--> 
	</div>
</div>
    
 

   
<!--****** Get footer ******* -->
<?php 
get_footer();
?>