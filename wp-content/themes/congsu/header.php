<?php
/**
 * The Theme Header
 * @package flex-theme
 */

?>

<!DOCTYPE html>
<!--[if lt IE 7]>  <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>     <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>     <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<meta name="format-detection" content="telephone=no">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<link rel="shortcut icon" href="<?php the_toption('favicon','image'); ?>" type="image/x-icon">
	<link rel="icon" href="<?php the_toption('favicon','image'); ?>" type="image/x-icon">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<title><?php wp_title( ); ?></title>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php do_action('before'); ?> 
	<?php
		if (get_toption('header_top') == 1 && get_toption('header_top_content') != ''):
	?>
		<div class="pl_header_top">
			<div class="container">
				<?php 
					the_toption('header_top_content');
				?>	
			</div>
		</div>
	<?php endif; ?>
	<header id="header" role="header">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-3 col-xs-8 left_header_bg">
					<div class="header-logo">
						<?php 
							if (get_toption('logo-on')== 1 && !empty(get_toption('logo-image'))):
						?>
							<a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home">
								<img class="pl-logo img-responsive" src="<?php 
									the_toption('logo-image','image'); 
								?>">
							</a>
						<?php else: ?>
							<h1 class="site-title-heading">
								<a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><?php bloginfo('name'); ?></a>
							</h1>
							<div class="site-description">
								<small>
									<?php bloginfo('description'); ?> 
								</small>
							</div>
						<?php 
							endif;
						?>
					</div>
				</div>
				<div class="col-md-7">
					<div class="header-right">
						<div class="header_info hidden-xs">
							<?php dynamic_sidebar('header'); ?>
						</div>
						<div class="navbar-header">
							<span class="navbar-toggle" >
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</span>
							
						</div>
						<div id="navbar" class="navbar collapse navbar-collapse">
							<nav  class="menu-top " role="navigation">
								<?php 
									flex_menu('primary','','main-menu nav navbar-nav');
									dynamic_sidebar('navbar'); 
								?> 
							</nav>
						</div>
					</div>
				</div>
				<div class="col-md-2">
					<div id="search">
						<form action="" method="get">
							<input class="pla_input" type="text" placeholder="Tìm kiếm">
							<span class="nva1"></span>
							<span class="nva2"></span>
						</form>
						<button><i class="fa fa-search" aria-hidden="true"></i></button>
					</div>
				</div>
			</div>
		</div>
	</header>