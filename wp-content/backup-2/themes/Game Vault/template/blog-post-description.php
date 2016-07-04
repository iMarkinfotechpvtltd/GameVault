<?php
/* 
Template Name: blog post description
*/
?>

<!--*********** get header**********-->
<?php get_header(); ?>


<?php global $post;
 ?>
 <pre>
	<?php print_r($post); ?>
 </pre>

<div class="event-section"> 
  <div class="container">
    <h2>BLOG</h2>
  
   <div class="row event-internal">  
     <div class="col-xs-12">   
	<?php	$image=get_post_meta(71,"birthday_section_image",true);
		$thumb = wp_get_attachment_image_src($image, 'full' );
	  ?>
      <img src="<?php echo $url = $thumb['0'];?>" alt="...." />
       <h3><?php the_field('birthday_section_heading',71); ?></h3>
       <?php the_field('birthday_section_content',71); ?>
      
       
     </div>
   </div>   <!--row close--> 

   
  </div> <!--container-->
</div>

<?php get_footer(); ?>