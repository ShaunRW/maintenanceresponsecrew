<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File:         template.php
* @Package:      GetSimple
* @Action:       Maintenance Responce Crew theme for GetSimple CMS
*
*****************************************************/
?>
<!DOCTYPE html>

<html lang=en>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1" /> 
		<title><?php get_page_clean_title(); ?> &mdash;  <?php get_site_name(); ?></title>

	   	<?php get_header(); ?>

	   	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/themes/smoothness/jquery-ui.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js"></script>

		<script src="<?php get_theme_url(); ?>/js/parallax.js"></script>
		<link href="<?php get_theme_url(); ?>/css/style.css" rel="stylesheet" type="text/css" media="screen" />
		<link href="<?php get_theme_url(); ?>/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="screen" />
	</head>
	<body>

		<div class="header section">
			<div class="column">
				<div class="split-2">
					<img src="<?php get_theme_url(); ?>/images/logo.png" alt="Logo" class="logo"/>
					<h1>Maintenance Response Crew</h1>
					<div class="tagline"><img src="<?php get_theme_url(); ?>/images/tagline.png" alt="Specialising in all your plumbing needs"></div>
				</div>
				<div class="split-2">
					<div class="contact">
						<img src="<?php get_theme_url(); ?>/images/emergency-24-7.png" alt="24/7 Emergency Service" class="emergency" />
						<div class="details">
							<a href="tel:0433335146"><img src="<?php get_theme_url(); ?>/images/header-phone.png" alt="Phone" class="phone" /></a>
							<a href="<?php get_site_url(); ?>/contact-us/"><img src="<?php get_theme_url(); ?>/images/general-enquiry.png" alt="Email" class="enquiry"/></a>
						</div>
					</div>
				</div>
			</div>
			<div class="navigation">
				<div class="column-left">
					<ul class="top-level"><li><span><i class="fa fa-bars"></i></span></li></ul>
					<ul class="items"><?php get_navigation(return_page_slug()); ?></ul>
				</div>
			</div>
		</div>

		<div class="parallax-container" data-parallax="scroll" data-speed="0.5" data-image-src="<?php get_theme_url(); ?>/images/brisbane.jpg"></div>
		<div class="section main-banner"><img src="<?php get_theme_url(); ?>/images/brisbane.jpg" alt="Banner"></div>

		<div class="section">
			<div class="column">
				<?php get_page_content(); ?>
			</div>
		</div>

		<div class="parallax-container" data-parallax="scroll" data-speed="0.1" data-image-src="<?php get_theme_url(); ?>/images/tap.jpg"></div>
		<div class="section main-banner"><img src="<?php get_theme_url(); ?>/images/tap.jpg" alt="Banner"></div>

		<div class="section">
			<div class="column">
				<p>Maintenance Response Crew PTY LTD - ABN: 30 846 902 928 - ACN: 601 751 484<p>
			</div>
		</div>

	</body>
</html>