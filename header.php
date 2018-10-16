<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Hardinge
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">



	<?php if(is_front_page()) : ?>
		<title><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></title>
	<?php else: ?>
		<title><?php wp_title(''); ?> | <?php bloginfo('name'); ?></title>
	<?php endif; ?>	



    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="author" content="">

<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/template-assets/img/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/template-assets/img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_url'); ?>/template-assets/img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_url'); ?>/template-assets/img/apple-touch-icon-114x114.png">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="<?php bloginfo('template_url'); ?>/template-assets/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/template-assets/fonts/font-awesome/css/font-awesome.css">

<!-- Stylesheet
    ================================================== -->
<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
<link rel="stylesheet" type="text/css"  href="<?php bloginfo('template_url'); ?>/template-assets/css/template-style.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/template-assets/css/nivo-lightbox/nivo-lightbox.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/template-assets/css/nivo-lightbox/default.css">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


	<?php wp_head(); ?>



	<?php 
	//$post = get_post();
	//$page_bg_image_url = get_background_image();
	//echo background_image();
	 ?>
	<style type="text/css" id="custom-background-css-override">
    	body{ background-image: url('<?php background_image(); ?>'); }
	</style>

</head>





<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

<?php if(!is_front_page()) :?>
  <div class="intro">
    <div class="overlay">
      
        <div class="row" id="hardinge-page-header">
        	<?php if(!empty(header_image())) : ?>
	        	<img src="<?php header_image(); ?>">
	        	<?php //get_header_image(); ?>
        	<?php else : ?>
        		<img src="<?php bloginfo('template_url'); ?>/template-assets/img/header.jpg">
        	<?php endif; ?>
        </div>
    </div>
  </div>

  <?php if(is_active_sidebar('below_header')) : ?>
	<div class="below-header">
		<?php dynamic_sidebar('below_header'); ?>
	</div>
	<?php endif; ?>

<?php endif; ?>




<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="<?php bloginfo('template_url'); ?>/template-assets/#content"><?php esc_html_e( 'Skip to content', 'hardinge' ); ?></a>

	<header id="masthead" class="site-header">
		<!-- Navigation
		    ==========================================-->
		<nav id="menu" class="navbar navbar-default navbar-fixed-top">
		  <div class="container"> 
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
		      
					
		    

		      <a class="navbar-brand page-scroll" href="<?php bloginfo('wpurl'); ?>">

					<!--custom logo starts -->
					<?php if(has_custom_logo()) : ?>
					 <img id="hardinge_custom_logo" src="<?php 
					$custom_logo_id = get_theme_mod( 'custom_logo' );
					$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
					echo $image[0];
					 ?>">
					<?php else : ?>
					 <img id="hardinge_custom_logo" src="<?php bloginfo('template_url'); ?>/template-assets/img/index.png">
					<?php endif; ?>
					<!--Custom logo ends -->

		      		<?php bloginfo('name'); ?>
		      </a>
		      </div>
		    
		    <!-- Collect the nav links, forms, and other content for toggling -->
		    
			     <?php


				     if(has_nav_menu('menu-1')){
						wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
						'container_class' => 'collapse navbar-collapse',
						'container_id'	=> 'bs-example-navbar-collapse-1',
						'items_wrap' => '<ul class="nav navbar-nav navbar-right">%3$s</ul>',
							) );			     	
				     }

				?>
		    
		    
		    <!-- /.navbar-collapse --> 
		  </div>
		</nav>
	</header><!-- #masthead -->

	<div id="content" class="site-content">

<?php hardinge_custom_breadcrumbs(); ?>
