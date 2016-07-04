<?php
/*
Template Name: About
*/
?>
<?php get_header(); ?>

 <div class="section type0">
   <div class="container">
      <h2>About Us</h2>
    <div class="table-section">  
      <div class="row">
        <div class="col-xs-12 col-md-6 padd-left">
          <h3><?php the_field('section_1_heading',75); ?></h3>
          
          <?php the_field('section_1_content',75); ?> 
		  
        </div> <!--col-xs-12-->
        <div class="col-xs-12 col-md-6 padd-right">
		<?php		//getting the image of section 1
		$image=get_post_meta(75,"section_1_image",true);
		$thumb = wp_get_attachment_image_src($image, 'full' );
	  ?>
          <img src="<?php echo $url = $thumb['0'];?>" alt="..." />
        </div> <!--col-xs-12-->
        
      </div> <!--row-->
     </div>  <!--table-section-->
   </div>
 </div> <!--mobile-events Close-->
 
 
 <div class="section type1">
    <div class="container">
    <div class="table-section">  
      <div class="row">
        
        <div class="col-xs-12 col-md-6 padd-left">
		<?php		//getting the image of section 2
		$image=get_post_meta(75,"section_2_image",true);
		$thumb = wp_get_attachment_image_src($image, 'full' );
		?>
          <img src="<?php echo $url = $thumb['0'];?>" alt="..." />
        </div> <!--col-xs-12-->
         <div class="col-xs-12 col-md-6 padd-right">
          <h3><?php the_field('section_2_heading',75); ?></h3>
          
          <?php the_field('section_2_content',75); ?>
		  
           </div> <!--col-xs-12-->
      </div> <!--row-->
     </div>  <!--table-section-->
   </div>
   
 </div> <!--young-old-->


<div class="section type2">
  <div class="container">
    <div class="table-section">  
      <div class="row">
        
        <div class="col-xs-12 col-md-6 padd-left">
          <h3><?php the_field('section_3_heading',75); ?></h3>
          
          <?php the_field('section_3_content',75); ?>
            
        </div> <!--col-xs-12-->
         <div class="col-xs-12 col-md-6 padd-right">
		 <?php		//getting the image of section 3
		$image=get_post_meta(75,"section_3_image",true);
		$thumb = wp_get_attachment_image_src($image, 'full' );
		?>
           <img src="<?php echo $url = $thumb['0'];?>" alt="..." />
         </div> <!--col-xs-12-->
      </div> <!--row-->
     </div>  <!--table-section-->
   </div>
</div> <!--latest-game-->

<div class="section type3">
  <div class="container">
    <div class="table-section">  
      <div class="row">
        
    
         <div class="col-xs-12 col-md-6 padd-left">
		 <?php		//getting the image of section 4
		$image=get_post_meta(75,"section_4_image",true);
		$thumb = wp_get_attachment_image_src($image, 'full' );
		?>
           <img src="<?php echo $url = $thumb['0'];?>" alt="..." />
         </div> <!--col-xs-12-->
       <div class="col-xs-12 col-md-6 padd-right">
          <h3><?php the_field('section_4_heading',75); ?></h3>
          
          <?php the_field('section_4_content',75); ?>
            
        </div> <!--col-xs-12-->
         
      </div> <!--row-->
     </div>  <!--table-section-->
   </div> 
</div> <!--family-wned-->


<?php get_footer(); ?>