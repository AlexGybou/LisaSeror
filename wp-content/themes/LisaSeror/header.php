<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
	<link href="//www.google-analytics.com" rel="dns-prefetch">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri().'/css/style.css'; ?>"  >
	<link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/style.css"/>
	<link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/css/menu.css"/>
	<link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/css/home.css"/>
	<link href="<?php bloginfo( 'template_directory' ); ?>/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<!--	<link rel="stylesheet" href="style.css">-->
	

	<!--	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>-->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>




	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php bloginfo('description'); ?>">

	<?php wp_head(); ?>
	

</head>
<body <?php body_class(); ?>>
<?php if (!is_page('home') ):?>
	<div id="wrapper" class="">
		<div class="overlay" style="display: none;"></div>
		<nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
			<ul class="nav sidebar-nav">
				<a href="<?php echo get_home_url() ; ?>"><img id="logo-menu" src="<?php bloginfo('template_directory')?>/img/logo_LS.PNG"  width="200px" height="200px"></a>
				<?php if ( is_super_admin() ):?>
					<li>
						<a href="<?php echo get_dashboard_url(); ?>"><i class="fa fa-tachometer"></i> Tableau de bord</a>
					</li>
				<?php endif; ?>
			</ul>
			<div class="menu-principal-container"><?php wp_nav_menu(array('theme_location' => 'principal')); ?></div>


			<share-button></share-button>
			<div class="menu-langue-container"><?php wp_nav_menu(array('theme_location' => 'langues')); ?></div>
		</nav>
		<div id="page-content-wrapper">
		<!--	<?php /*if (is_page('reperage') || is_page('edition') ) : */?>
				<a href="<?php /*echo get_home_url() ; */?>"><img id="logsvg" src="<?php /*bloginfo('template_directory')*/?>/img/logoblanc.svg"  width="200px" height="70px"></a>
				<button  class="link-menu white" data-toggle="offcanvas"><span class="txt-menu"><?php /*echo get_the_title() */?></span><i class="icon-menu fa fa-bars"></i></button>
			<?php /*elseif ( !is_archive() ) : */?>
				<a href="<?php /*echo get_home_url() ; */?>"><img id="logsvg" src="<?php /*bloginfo('template_directory')*/?>/img/Logo.svg"  width="200px" height="70px"></a>
				<button  class="link-menu" data-toggle="offcanvas"><span class="txt-menu"><?php /*echo get_the_title() */?></span><i class="icon-menu fa fa-bars"></i></button>
			<?php /*else:*/?>
				<a href="<?php /*echo get_home_url() ; */?>"><img id="logsvg" src="<?php /*bloginfo('template_directory')*/?>/img/Logo.svg"  width="200px" height="70px"></a>
				<button  class="link-menu" data-toggle="offcanvas"><span class="txt-menu"><?php /*single_term_title()*/?></span><i class="icon-menu fa fa-bars"></i></button>
			--><?php /*endif; */?>
			<button  class="link-menu" data-toggle="offcanvas"><i class="icon-menu fa fa-bars"></i><span class="txt-menu"><?php echo get_the_title() ?></span></button>

		</div>


	</div>
<?php endif; ?>

	<!-- wrapper -->
	<div class="wrapper">

		<!-- header -->
		<header class="header clear" role="banner">

			<!-- logo -->
			<div class="logo">
				<a href="<?php echo home_url(); ?>">
					<!--svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script-->

				</a>
			</div>
			<!-- /logo -->

			<!-- nav -->


			<!--<nav class="nav" role="navigation">
				<?php /*html5blank_nav(); */?>
			</nav>-->

			<!-- /nav -->

		</header>

		<!-- /header -->
