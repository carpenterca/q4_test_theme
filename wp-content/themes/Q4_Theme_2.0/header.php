<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title></title>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,200;1,400&display=swap" rel="stylesheet">
		<?php wp_head(); ?>
	</head>
	<?php // Cleans page title to use as class on body tag for each page ?>
	<?php include('./wp-content/themes/Q4_Theme_2.0/inc/clean-title.php'); ?>
	<body class="<?php echo $page_title; ?>-page">
		<div id="utility">
			<div class="flex-container">
				<?php // Site-wide search input field ?>
				<?php get_template_part('inc/search-input-field'); ?>
				<!-- All Social icons -->
				<?php get_template_part('inc/social-icons') ?>
			</div>
		</div>
		<!-- DESKTOP MENU -->
		<header id="main-nav-desktop">
			<div class="flex-container">
				<div class="logo-wrapper">
					<?php $main_logo = get_field('company_information_main_logo','option'); ?>
					<a href="<?php echo get_home_url() ?>"><img src="<?php echo $main_logo['url']; ?>" alt="Main Logo"></a>
				</div>
				<?php q4development_nav(); ?>
			</div>
		</header>
		<!-- MOBILE MENU -->
		<header id="main-nav-mobile">
			<div class="flex-container">
				<div class="logo-wrapper">
					<a href="<?php echo get_home_url() ?>"><img src="<?php echo get_template_directory_uri() ?>/icons/q4-logo.png" alt="Main Logo"></a>
				</div>
				<a class="mobile-toggle"><img src="<?php echo get_template_directory_uri() ?>/icons/hamburger-menu-icon.png" alt="Mobile Menu Icon"></a>
				<div class="search-and-menu-wrapper">
					<?php // Site-wide search input field for mobile ?>
					<?php get_template_part('inc/search-input-field-mobile'); ?>
					<?php q4development_nav(); ?>
				</div>
			</div>
		</header>
