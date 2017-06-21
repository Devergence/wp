
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>
	<body class="homepage">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper">
					<div id="header" class="container">

						<!-- Logo -->
							<h1 id="logo"><a href="index.html">Strongly Typed</a></h1>
							<p>A responsive HTML5 site template. Manufactured by HTML5 UP.</p>

						<!-- Nav -->
							<nav id="nav">
							<?php 
									/**
										* Displays a navigation menu
										* @param array $args Arguments
										*/
										$args = array(
											'theme_location' => '',
											'menu' => '',
											'container' => 'ul',   //оборачивает меню в тег ul
											'container_class' => 'header_menu',  //обязательные классы для меню
											'container_id' => '',
											'menu_class' => 'header_menu',
											'menu_id' => '',
											'echo' => true,
											'fallback_cb' => 'wp_page_menu',
											'before' => '',
											'after' => '',
											'link_before' => '',
											'link_after' => '',
											'items_wrap' => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
											'depth' => 0,
											'walker' => ''
										);

										wp_nav_menu( $args );
 							?>
								<ul class = "header_menu">
									<li><a class="icon fa-home" href="index.html"><span>Introduction</span></a></li>
									<li>
										<a href="#" class="icon fa-bar-chart-o"><span>Dropdown</span></a>
										<ul>
											<li><a href="#">Lorem ipsum dolor</a></li>
											<li><a href="#">Magna phasellus</a></li>
											<li><a href="#">Etiam dolore nisl</a></li>
											<li>
												<a href="#">Phasellus consequat</a>
												<ul>
													<li><a href="#">Magna phasellus</a></li>
													<li><a href="#">Etiam dolore nisl</a></li>
													<li><a href="#">Phasellus consequat</a></li>
												</ul>
											</li>
											<li><a href="#">Veroeros feugiat</a></li>
										</ul>
									</li>
									<li><a class="icon fa-cog" href="left-sidebar.html"><span>Left Sidebar</span></a></li>
									<li><a class="icon fa-retweet" href="right-sidebar.html"><span>Right Sidebar</span></a></li>
									<li><a class="icon fa-sitemap" href="no-sidebar.html"><span>No Sidebar</span></a></li>
								</ul>
							</nav>

					</div>
				</div>