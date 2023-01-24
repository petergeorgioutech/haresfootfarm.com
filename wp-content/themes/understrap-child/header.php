<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$global_logo				= get_field('global_logo', 'option');
$global_logo_white			= get_field('global_logo_white', 'option');
$bootstrap_version 			= get_theme_mod( 'understrap_bootstrap_version', 'bootstrap4' );
$navbar_type       			= get_theme_mod( 'understrap_navbar_type', 'collapse' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-FSHZZZX8WD"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'G-FSHZZZX8WD');
	</script>
	<!-- Place somewhere in the <head> of your document -->
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />


	


	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >
<?php do_action( 'wp_body_open' ); ?>

<header id="main-header" class="top-header">
	<div class="container">
		<nav class="social-icons">
			<ul>
				<li><a href="tel:12345678"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
				<li><a href="mailto:test@test.com"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
			</ul>
		</nav>
		<a class="brand-logo img-fluid" href="/"><img src="<?=$global_logo?>"></a>
		<button class="nav-trigger"><span></span><span></span><span></span><span></span></button>
		
	</div>
	<nav class="main-menu">
		<ul>
			<li><a href="/">Home</a></li>
			<li><a href="/about">About us</a></li>
			<li><a href="/availability">Availability</a></li>
			<li><a href="/contact-us">Contact us</a></li>
		</ul>
	</nav>
</header>
