<div class="footer">
  <div class="container">
    <div class="row">
       <div class="col-sm-6 col-md-3 quick-links">
         <h3>Quick Links</h3>
         
         <ul>
             <?php

				$defaults = array(
				'theme_location'  => '',
				'menu'            => 'footer_menu',
				'container'       => '',
				'container_class' => '',
				'container_id'    => '',
				'menu_class'      => 'menu',
				'menu_id'         => '',
				'echo'            => true,
				'fallback_cb'     => 'wp_page_menu',
				'before'          => '',
				'after'           => '',
				'link_before'     => '',
				'link_after'      => '',
				'items_wrap'      => '%3$s',
				'depth'           => 0,
				'walker'          => ''
				);
				wp_nav_menu( $defaults );
		?> 
         </ul>
       </div> <!--col-sm-6 col-md-3-->
       
        <div class="col-sm-6 col-md-3 contact-us">
         <h3>contact us</h3>
          
         <ul>
            <li><span class="location"></span><?php the_field('address_line2',61); ?>
			<?php the_field('address_line3',61); ?>
			</li>
            <li><span class="phone"></span><a href="tel:+<?php the_field('phone_number',61); ?>">Phone: <?php the_field('phone_number',61); ?></a></li>    
            <li><span class="email"></span><a href="mailto:<?php the_field('email_address',61); ?>"> <?php the_field('email_address',61); ?></a></li>
         </ul>
         
       </div> <!--col-sm-6 col-md-3-->
       
       <div class="col-sm-6 col-md-3 news-letter">
         <h3><?php the_field('footers_form_heading',14); ?></h3>
         
		 <?php echo do_shortcode( '[mc4wp_form id="190"]'); ?>
            <!--<div class="input-holder">
              <span class="icon user"></span>
              <input type="text" class="form-control" placeholder="Name"> 
             </div>
             <div class="input-holder">
               <span class="icon email"></span>
              <input type="text" class="form-control" placeholder="Email"> 
             </div>
             
            <input type="button" class="btn btn-default btn-submit" value="Submit"> -->
         
       </div> <!--col-sm-6 col-md-3-->
       
       <div class="col-sm-6 col-md-3 social-icons-section">
         <h3>Connect With Us On</h3>
         
         <ul class="social-icons">
            <li class="facebook"><a href="https://www.facebook.com/gamevaultperth/" target="_blank"></a></li>
            <li class="printest"><a href="https://www.pinterest.com/gamevault/" target="_blank"></a></li>
            <li class="instagram"><a href="https://www.instagram.com/gamevault/" target="_blank"></a></li>
            <li class="google"><a href="https://plus.google.com/106415101291162711537/posts" target="_blank"></a></li>
            <li class="youtube"><a href="https://www.youtube.com/watch?v=BNZY-t72svI" target="_blank"></a></li>
            
         </ul>  
         
         <div class="games-logo">
             <ul>
                <li><a target="_blank" href="#"><img src="<?php echo esc_url(get_template_directory_uri());?>/images/ubi-log.png" alt="...." /></a></li>
                <li><a target="_blank" href="#"><img src="<?php echo esc_url(get_template_directory_uri());?>/images/test-.png" alt="...." /></a></li>
                <li><a target="_blank" href="#"><img src="<?php echo esc_url(get_template_directory_uri());?>/images/w.png" alt="...." /></a></li>
             </ul>
         </div>
         
       </div> <!--col-sm-6 col-md-3-->
       
     </div>
  </div> <!--container-->
 
 <div class="copy-right-bar"> 
   <p>Copyright © 2016 Game Vault Perth, Website By <a target="_blank" href="http://tradesignaus.com.au/">Tradesign.</a> </p>
 </div>
</div> <!--footer-->


<!--MODAL-->

	
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" onClick="destroyVideo(0)" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div  id="div1" class="embed-responsive embed-responsive-16by9">
        <iframe class="Player" scr="<?php the_field('video_home_page',14);?>"></iframe>
      </div>      
    </div>
  </div>
</div>

	<?php wp_footer(); ?>
	
	<!--  Stop video after clicked close button -->
	<script>
		function destroyVideo(index){
			var url = document.getElementsByClassName("Player")[index].src; 
			document.getElementsByClassName("Player")[index].src= "null";
			document.getElementsByClassName("Player")[index].src = url;		
		}	
	</script>
	
	
	<!--   load more script -->
	<script>
		function pagination() {

            var page_val = jQuery('#page_val').val();
			
			jQuery('#loader').show();
           
             //alert(page_val);
             //alert(page_val1);
            jQuery.ajax({
                type: "GET",
                url: "<?php bloginfo('template_url'); ?>/template/page1.php",
                data: {
                    page_val1: page_val, 
                    format: 'raw'
                },
                success: function (resp) {
					
                    jQuery('#loader').hide();
                    if (resp != "") {
						
						var total_rec = jQuery('#total_rec').val();
						var page_val = jQuery('#page_val').val();
						var page_val1 = parseInt(page_val) + 1;
						
						var curr_diss= parseInt(page_val) * 4;
						
						
						jQuery(resp).insertAfter('.asd:last');
                        jQuery('#page_val').val(page_val1);
						if(curr_diss > total_rec )
						{
							jQuery('.btn-read-more').hide();
						}	
						
						

                    }
                }
            });
        }
    </script>
	
	
	<!--<script>
			jQuery(document).ready(function(){
   		    jQuery('ul li').click(function(){
			jQuery('li').removeClass("active");
			jQuery(this).addClass("active");
		    });
		    });
	</script> -->
	<?php 
	$page_id = get_the_ID();
	if($page_id!=63)
	{
		?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>  	
        <?php
	}
    ?>
    		 
	<script src="<?php echo esc_url(get_template_directory_uri());?>/js/lightbox.js"></script>
	<script src="<?php echo esc_url(get_template_directory_uri());?>/js/bootstrap.min.js"></script>
    <script src="<?php echo esc_url(get_template_directory_uri());?>/js/bootstrap-select.min.js"></script>
    <script src="<?php echo esc_url(get_template_directory_uri());?>/js/owl.carousel.min.js"></script>
	<script src="<?php echo esc_url(get_template_directory_uri());?>/js/my-script.js"></script>
	<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
	<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/additional-methods.min.js"></script>
	<!--<link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap-combined.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" media="screen"
href="http://tarruda.github.com/bootstrap-datetimepicker/assets/css/bootstrap-datetimepicker.min.css">-->
        
     
     <script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri());?>/js/bootstrap-datetimepicker.min.js"></script>

<!--<script type="text/javascript"
src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.pt-BR.js">
</script>-->
<script type="text/javascript">
var nowDate = new Date();
jQuery('#datetimepicker').datetimepicker({
format: 'dd/MM/yyyy',
startDate: nowDate,
});
</script>

<script>
jQuery(function() {
    jQuery('#btn1').bind('click', function(){
        var txtVal1 =  jQuery('#day').val();
		var txtVal2 =  jQuery('#month').val();
		var txtVal3 =  jQuery('#year').val();
		var date = txtVal3+"/"+txtVal2+"/"+txtVal1;
		if(date == "//")
		{
			date = "";
		}
        var data = isDate(date);
            if(data == 0)
			{
				var element = document.getElementById("day");
				element.classList.add("not-valid");
				var element = document.getElementById("month");
				element.classList.add("not-valid");
				var element = document.getElementById("year");
				element.classList.add("not-valid");
				//alert('Invalid date');
			}
    });
    
function isDate(txtDate)
{	//alert(txtDate);
    var currVal = txtDate;
    if(currVal == '')
        return false;
    
     var rxDatePattern = /^(\d{4})(\/|-)(\d{1,2})(\/|-)(\d{1,2})$/; //Declare Regex
     var dtArray = currVal.match(rxDatePattern); // is format OK?
    
     if (dtArray == null) 
         return 0;
    
    //Checks for mm/dd/yyyy format.
    dtMonth = dtArray[3];
    dtDay= dtArray[5];
    dtYear = dtArray[1];        
    
    if (dtMonth < 1 || dtMonth > 12) 
        return 0;
    else if (dtDay < 1 || dtDay> 31) 
        return false;
    else if ((dtMonth==4 || dtMonth==6 || dtMonth==9 || dtMonth==11) && dtDay ==31) 
        return 0;
    else if (dtMonth == 2) 
    {
        var isleap = (dtYear % 4 == 0 && (dtYear % 100 != 0 || dtYear % 400 == 0));
        if (dtDay> 29 || (dtDay ==29 && !isleap)) 
                return 0;
    }
	var d = new Date();
	var n = d.getFullYear();
	//alert(n);
	if(dtYear > n)
			return 0;
    return 1;
}

});
</script>

</body>
</html>
