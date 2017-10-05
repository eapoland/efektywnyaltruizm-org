<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package efektywnyaltruizm-org
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="page-header border-bottom">
    <div class="container-fluid page-container">

      <nav class="page-header__nav">
        <?php
        the_custom_logo();
        if ( is_front_page() && is_home() ) : ?>
          <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
        <?php else : ?>
          <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
        <?php
        endif;
        ?>

        <input type="checkbox" id="menu-toggle" class="main-menu__input"/>
        <label for="menu-toggle" class="main-menu__label"></label>
        <div class="menu-overlay"></div>

        <?php
          wp_nav_menu( array(
            'theme_location' => 'menu-1',
            'menu_id'        => 'primary-menu',
            'menu_class'     => 'main-menu',
            'container'      => 'ul',
          ) );
        ?>
      </nav>
    </div>
	</header><!-- #masthead -->

	<main class="page-main">
