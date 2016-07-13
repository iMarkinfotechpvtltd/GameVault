<?php
/*
Template Name: Contact Us
*/
?>
<?php get_header(); ?>


<div class="blog-section"> 
  <div class="container">
    <h2>Get In Touch!</h2>

    <div class="row round-circle">  
      <div class="col-xs-12 col-md-4">
         <div class="round-box">
           <span class="icons mobile"></span>
           <p><?php the_field('phone_circle',61); ?> <br>
                <a href="tel:+<?php the_field('phone_number',61); ?>"><?php the_field('phone_number',61); ?></a></p>
         </div> <!--round-box-->
      </div> <!--col-xs-12 col-md-3-->
      
      <div class="col-xs-12 col-md-4">
         <div class="round-box">
           <span class="icons email"></span>
           <p><?php the_field('email_circle',61); ?><br>
                <a href="mailto:<?php the_field('email_address',61); ?>"><?php the_field('email_address',61); ?></a></p>
         </div> <!--round-box-->
      </div> <!--col-xs-12 col-md-3-->
      
      <div class="col-xs-12 col-md-4">
         <div class="round-box">
           <span class="facebook"></span>
           <a href="https://www.facebook.com/gamevaultperth/" target="_blank"><p>Like us on Facebook</p></a>
         </div> <!--round-box-->
      </div> <!--col-xs-12 col-md-3-->
      
    </div> <!--row--> 
    
   
    
   <div class="contact-form contact-page-sections"> 
     <div class="row">
       <div class="col-md-8 col-md-offset-2">
          <h2><?php the_title(); ?></h2>
   
			
			<?php echo do_shortcode( '[contact-form-7 id="143" title="contact_us_form"]'); ?>
           
        
        
        <div class="contact-page-icons">
          <ul>
            <li class="facebook"><a href="https://www.facebook.com/gamevaultperth/" target="_blank" ></a></li>
            <li class="printest"><a href="https://www.pinterest.com/gamevault/" target="_blank"></a></li>
            <li class="instagram"><a href="https://www.instagram.com/gamevault/" target="_blank"></a></li>
            <li class="google"><a href="https://plus.google.com/106415101291162711537/posts" target="_blank"></a></li>
            <li class="youtube"><a href="https://www.youtube.com/watch?v=BNZY-t72svI" target="_blank"></a></li>   
         </ul>
        </div> <!--contact-page-icons-->        
       </div>
     </div> <!--row-->
   </div> <!--contact-form-->
</div>
</div>

<?php get_footer(); ?>