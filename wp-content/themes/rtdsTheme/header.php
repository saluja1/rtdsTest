<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
		<meta name="msapplication-TileColor" content="#da532c">
		<meta name="theme-color" content="#ffffff">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!-- Latest compiled and minified CSS -->

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" media="none">
	    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet" media="none">

		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>


		<div class="cover-menu">
			<div class="toggle-menu toggle">
				<div class="line line1"></div>
				<div class="line line2"></div>
				<div class="line line3"></div>
			</div>
			<div class="cover-inner">
				<?php wp_nav_menu(array('theme_location' => 'primary', 'container'=> false, 'menu_class'=> 'overlay-menus', 'menu_id'=> 'overlay-menus')); ?>
			</div>
		</div>


		<header class="brand-header">

			<div class="container-fluid">

				<div class="row align-items-center">

					<div class="col-md-2">
					<?php 
						$custom_logo_id = get_theme_mod( 'custom_logo' );
						$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
					?>
						<a class="brand-logo" href="<?php echo site_url(); ?>"> <img src="<?php echo $image[0]; ?> " alt="RTDS"> </a>
					</div>

					<div class="col-md-5">

						<nav class="brand-navigation">

							<?php wp_nav_menu(array('theme_location' => 'primary', 'container'=> false, 'menu_class'=> 'brand-menus', 'menu_id'=> 'brand-menus')); ?>
						</nav>
					</div>

					<div class="col-md-5">

						<nav class="brand-navigation rightMenu">

							<?php wp_nav_menu(array('theme_location' => 'right', 'container'=> false, 'menu_class'=> 'brand-menus', 'menu_id'=> 'brand-menus'  )); ?>
						</nav>
					</div>

				</div>
					<div class="mobileMenuIcon">
						<a class="hamburger-menu" href="#">
							<span></span>
							<span></span>
							<span></span>
						</a>
					</div>
			</div>
		</header>