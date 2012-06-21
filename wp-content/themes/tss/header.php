<?php
/**
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	global $page, $paged;
	$title = wp_title('',false);
	echo $title;
	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="icon" href="/favicon.ico" type="image/x-ico"/>
<?php
	wp_enqueue_script('jq');
	wp_enqueue_script('tss-script');
	wp_enqueue_script('tss-easing');

	wp_head();
?>
</head>

<body <?php body_class(); ?>>

<div id="nav-bar" class="min-contain">
	<div class="contain">
		<div id="logo">
			<a href="<?php bloginfo('url');?>"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="The Sandwich Spot" /></a>
		</div>
		<div class="nav-sep">|</div>
		<a href="locations-menus"><div class="nav-box <?php if(is_page('locations-menus')) echo 'active-nav'; ?>">
			<div class="nav-text">
				<div class="nt-top">Locations/Menus</div>
				<div class="nt-bot">Find A Killer Sando</div>
			</div>
			<div class="nav-slide">
			</div>
		</div></a>
		<div class="nav-sep">|</div>
		<a href="about-the-spot"><div class="nav-box <?php if(is_page('about-the-spot')) echo 'active-nav'; ?>">
			<div class="nav-text">
				<div class="nt-top">About The Spot</div>
				<div class="nt-bot">The Epic History</div>
			</div>
			<div class="nav-slide">
			</div>
		</div></a>
		<div class="nav-sep">|</div>
		<a href="locations-for-sale"><div class="nav-box <?php if(is_page('locations-for-sale')) echo 'active-nav'; ?>">
			<div class="nav-text">
				<div class="nt-top">Locations For Sale</div>
				<div class="nt-bot">Get Your Spot</div>
			</div>
			<div class="nav-slide">
			</div>
		</div></a>
		<div class="nav-sep">|</div>
		<a href="photo-gallery"><div class="nav-box <?php if(is_page('photo-gallery')) echo 'active-nav'; ?>">
			<div class="nav-text">
				<div class="nt-top">Photo Gallery</div>
				<div class="nt-bot">Tasty Images</div>
			</div>
			<div class="nav-slide">
			</div>
		</div></a>
		<div class="nav-sep">|</div>
		<a href="own-a-spot"><div class="nav-box <?php if(is_page('own-a-spot')) echo 'active-nav'; ?>">
			<div class="nav-text">
				<div class="nt-top">Own A Spot</div>
				<div class="nt-bot">Join the Family</div>
			</div>
			<div class="nav-slide">
			</div>
		</div></a>
		<div class="nav-sep">|</div>
		<a href="contact-us"><div class="nav-box <?php if(is_page('contact-us')) echo 'active-nav'; ?>">
			<div class="nav-text">
				<div class="nt-top">Contact Us</div>
				<div class="nt-bot">Let's Be Friends</div>
			</div>
			<div class="nav-slide">
			</div>
		</div></a>
		<div class="nav-sep">|</div>
	
	</div>
</div>
