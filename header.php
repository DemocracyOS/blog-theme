<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <main id="main">
 *
 * @package democracyos
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	
	<header class="site-header site-header-secondary show-header">
		<div class="triangle"></div>
		<div class="container">
			<nav class="nav-left">
				<a class="current" href="<?php echo home_url() ?>">Blog</a>
				<a href="http://democracyos.org/#about">About</a>
				<a href="http://kickstarter.com" class="kickstarter">
				<img src="http://democracyos.github.com/website/img/logo-kickstarter.png"></a>
			</nav>
			<h1 class="logo">
				<a href="http://democracyos.org"><img src="http://democracyos.github.com/website/img/logo.png"><span>Democracy&#9679;OS</span></a>
			</h1>

			<nav class="nav-right">
				<a href="http://democracyos.org/#profiles">Profiles</a>
				<a href="http://democracyos.org/#faq">FAQ</a>
				<a href="http://democracyos.org/#contact">Contact</a>
				<a href="http://twitter.com/democracyos" target="_blank" class="twitter-header">
					<i class="flaticon social twitter"></i>
				</a>
			</nav>
		</div>
	</header>




	<div class="sub-header">
		
	</div>

	<div id="content" class="site-content container">
