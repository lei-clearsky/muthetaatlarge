<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Mu Theta At Large
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
<link href='http://fonts.googleapis.com/css?family=Lora:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Sorts+Mill+Goudy' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700' rel='stylesheet' type='text/css'>

<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="<?php bloginfo( 'template_url' ); ?>/images/favicon.ico">
	<link rel="apple-touch-icon" href="<?php bloginfo( 'template_url' ); ?>/images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo( 'template_url' ); ?>/images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo( 'template_url' ); ?>/images/apple-touch-icon-114x114.png">
<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	<!-- Primary Page Layout
	================================================== -->

	<div class="container">
		<div class="sixteen columns">

			<nav class="nav" style="margin-top: 25px"> 
				
				<ul class="nav-list"> 
					<li><a href="<?php echo get_page_link(39); ?>">About</a></li> 
					<li><a href="<?php echo get_page_link(47); ?>">Awards</a></li> 
					<li><a href="<?php echo get_page_link(17); ?>">Patron Project</a></li> 
					<li><a href="<?php echo get_page_link(15); ?>">Donations</a></li> 
					<li></li> 			
					<li><a href="<?php echo get_page_link(6); ?>">Membership</a></li>  
					<li><a href="<?php echo get_page_link(24); ?>">Calendar</a></li>  
					<li><a href="<?php echo get_page_link(49); ?>">Officers</a></li>  
					<li><a href="<?php echo get_page_link(54); ?>">Contact Us</a></li>  					   
				</ul> 
			  
			</nav>
			<div class="logo"><a href="<?php echo get_page_link(4); ?>"><img src="<?php echo wp_get_attachment_url( 10 ); ?>"></img></a></div>
		
		</div>

