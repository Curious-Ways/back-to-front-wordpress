<?php
/**
 * The Header for our theme.
 *
 * @package Back to Front Wordpress
 */
?>

<!DOCTYPE html>

<html <?php language_attributes(); ?>>

  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico">
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>

    <div id="page" class="hfeed site">
      
      <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'backtofront' ); ?></a>

      <header id="masthead" class="site-header" role="banner">
        
        <div class="content-wrapper">
          <div class="content">

            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

            <p class="site-description"><?php bloginfo( 'description' ); ?></p>

            <nav id="site-navigation" class="main-navigation" role="navigation">
              
              <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'backtofront' ); ?></button>
              
              <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
            
            </nav>

          </div>
        </div>        
      
      </header>

      <main class="site-main" role="main">