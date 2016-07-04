<?php
include('../../../../wp-config.php');
?>
<?php
$display_count=4;

$offSet=$_GET['page_val1'];

echo $offSet = ( $offSet - 1 ) * $display_count; 


query_posts( array (  'post_type' => 'images', 'order'=> 'DESC','posts_per_page'=>$display_count,'offset'=>$offSet) ); 
										
										
				while ( have_posts() ) : the_post();
			
		 
        
                 $url = wp_get_attachment_url( get_post_thumbnail_id($image->ID) )?>
				<div class="col-xs-6 col-md-3 asd" > 
					<a href="<?php echo $url ?>" data-lightbox="roadtrip"><img src="<?php echo $url ?>"></a>  
				</div> <!--col-xs-12-->
						
					
			<?php endwhile; ?>
