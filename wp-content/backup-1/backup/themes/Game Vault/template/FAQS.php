<?php
/* 
Template Name: FAQS
*/
?>

<!--*********** get header**********-->
<?php
get_header();
?>
<div class="blog-section"> 
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
			'order'        =>'DESC',
			'offset'		=> 0
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
    
 <!-- <div class="panel-group col-xs-12 col-md-6 faq-page" id="accordion0" role="tablist" aria-multiselectable="true">  
     <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading10">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion0" href="#collapse10" aria-expanded="false" aria-controls="collapse10">
          Does Game Vault take up a lot of space?
        </a>
      </h4>
    </div>
    <div id="collapse10" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading10">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  
      <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading11">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion0" href="#collapse11" aria-expanded="false" aria-controls="collapse11">
          What type of events can you attend?
        </a>
      </h4>
    </div>
    <div id="collapse11" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading11">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  
     <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading12">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion0" href="#collapse12" aria-expanded="false" aria-controls="collapse12">
          Do I need to provide power at the site?
        </a>
      </h4>
    </div>
    <div id="collapse12" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading12">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  
     <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading13">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion0" href="#collapse13" aria-expanded="false" aria-controls="collapse13">
          Can I book additional hours on the day of the event?
        </a>
      </h4>
    </div>
    <div id="collapse13" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading13">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  
     <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading14">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion0" href="#collapse14" aria-expanded="false" aria-controls="collapse14">
          Do parents need to supervise the party?
        </a>
      </h4>
    </div>
    <div id="collapse14" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading14">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  
     <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading15">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion0" href="#collapse15" aria-expanded="false" aria-controls="collapse15">
          Game Vault Disclaimer
        </a>
      </h4>
    </div>
    <div id="collapse15" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading15">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  
     <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading16">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion0" href="#collapse16" aria-expanded="false" aria-controls="collapse16">
          Is food or drink allowed in the trailer?
        </a>
      </h4>
    </div>
    <div id="collapse16" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading16">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  
      <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading17">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion0" href="#collapse17" aria-expanded="false" aria-controls="collapse17">
          Game Vault Policies
        </a>
      </h4>
    </div>
    <div id="collapse17" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading17">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  
      <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading18">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion0" href="#collapse18" aria-expanded="false" aria-controls="collapse18">
          What games can be played?
        </a>
      </h4>
    </div>
    <div id="collapse18" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading18">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>

    </div> --><!--faq-page Close--> 
   </div>    
  </div> <!--container-->
</div> 
<!--****** Get footer ******* -->
<?php 
get_footer();
?>