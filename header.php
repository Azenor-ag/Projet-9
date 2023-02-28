<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.0.3/swiper-bundle.css" >

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'foce' ); ?></a>

	<header id="masthead" class="site-header">
		<div  class="main-navigation">
               <a class="site-title" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></li>
</div>
<div id="mySidenav" class="sidenav burger">
  <img  src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?> " alt="logo Fleurs d'oranger & chats errants">
  <nav id="site-navigation">
        <ul>
            <li class="here"><a class="move" href="#story">Histoire</a></li>
            <li class="cat"><a class="move" href="#characters">Personnages</a></li>
            <li class="cat2"><a class="move" href="#place">Lieu</a></li>
            <li ><a class="move" href="#studio">Studio Koukaki</a></li>
            <p>Studio Koukaki</p>
        </ul>
  </nav>
</div>

<a href="#" id="chgt" class="openBtn"></a>

	</header><!-- #masthead -->

