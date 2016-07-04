<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
  <div class="wrap-404">
	<div  class="page-404-container">
		<div class="container">

			<div class="error-404 not-found">
				
					<h1><img src="<?php echo esc_url(get_template_directory_uri());?>/images/404.png" alt="404"></h1>
                    
                    <p>Oops! That page cannot be found. please Go back to <a class="go-to-home" href="<?php echo site_url(); ?>">Home</a></p>	
			</div><!-- .error-404 -->

		</div><!-- .site-main -->

		<?php get_sidebar( 'content-bottom' ); ?>

	</div><!-- .content-area -->

<div class="page-404-footer">
<?php get_footer(); ?>
</div>

</div>