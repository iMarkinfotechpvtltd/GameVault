<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->


    <!-- Bootstrap -->
    <link rel="icon" href="<?php echo esc_url(get_template_directory_uri());?>/images/fav.png" type="image/x-icon">
    <link href="<?php echo esc_url(get_template_directory_uri());?>/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo esc_url(get_template_directory_uri());?>/css/lightbox.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri());?>/css/bootstrap-datepicker.min.css">
	 
    <link href="<?php echo esc_url(get_template_directory_uri());?>/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="<?php echo esc_url(get_template_directory_uri());?>/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo esc_url(get_template_directory_uri());?>/css/style.css" rel="stylesheet"> 

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<?php wp_head(); ?>
</head>

<body>

<div class="navbar navbar-default navigation">
  <div class="container">
   <div class="nav-wrap">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
    
	  <?php
		$logo_image=get_post_meta(14,"header_logo",true);
		$thumb = wp_get_attachment_image_src($logo_image, 'logo' );
	  ?>
      <a class="navbar-brand logo" href="<?php echo site_url(); ?>"><img src="<?php echo $url = $thumb['0'];?>" alt="..." /></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
	  
		<?php

				$defaults = array(
				'theme_location'  => '',
				'menu'            => 'header_menu',
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

    </div><!-- /.navbar-collapse -->
    
      <div class="contact-info">
        <p><?php the_field('header_phone_number_text',14); ?></p>
        <h2><?php the_field('header_phone_number',14); ?></h2> 
      </div>
     </div>
  </div><!-- /.container-fluid -->
</div> <!--navigation close-->