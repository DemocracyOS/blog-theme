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
<?php  $url = "http://democracyos.github.io/website/" ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	
	<header class="site-header site-header-secondary show-header">
		<div class="bg-grey">
			<div class="container">
				<h1 class="logo">
					<a href="<?php echo $url ?>"><img src="img/logo.png"><span>Democracy●OS</span></a>
				</h1>
				<nav>
					<div class="nav-left">
						<a href="http://blog.democracyos.org">Blog</a>
						<a href="<?php echo $url ?>#about">About</a>
						<a target="_blank" href="http://kickstarter.com" class="kickstarter"><img src="http://democracyos.github.io/website/img/logo-kickstarter.png"></a>
					</div>
					<div class="nav-right">
						<a href="<?php echo $url ?>#profiles" class="who-we-are">who we are</a>
						<a href="<?php echo $url ?>#faq">FAQ</a>
						<a href="<?php echo $url ?>#contact">join us</a>
						<a target="_blank" href="http://twitter.com/democracyos" class="twitter-header"><i class="flaticon social twitter"></i></a>
					</div>
				</nav>
			</div>
		</div>
		<div class="clearfix triangle-container">
			<div class="triangle"></div>
		</div>
	</header>




	<div class="sub-header">
		
	</div>

	<div id="content" class="site-content container">
