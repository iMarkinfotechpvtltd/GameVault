<?php
/*
Template Name: Privacy
*/
?>
<?php get_header(); ?>

<div class="event-section"> 
  <div class="container">
    <h2>Policies</h2>
  
   <div class="row event-internal">  
     <div class="col-xs-12">   
       <?php
			$include = get_pages('include=322');
			$content = apply_filters('the_content',$include[0]->post_content);
			echo $content;
			?>
     </div>
   </div>   <!--row close--> 

   
  </div> <!--container-->
</div> <!--event-section Close-->



<?php get_footer(); ?>