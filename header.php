<?php
/**
 * Eovaltic WPST - header template 
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage eovaltic_wpst
 * @since 1.0.0
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="description" content="<?php bloginfo( 'description' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<?php if( is_singular() && pings_open( get_queried_object() )): ?>
			<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<?php endif; ?>
		<?php wp_head(); ?>
  </head>
    
  <body <?php body_class(); ?>>
    <header> 
      <div>
        <?php
          if ( has_custom_logo() ): 
              the_custom_logo();
          else: 
              echo '<a href="' . esc_url( home_url( '/' ) ) . '">' . get_bloginfo( 'name' ) . '</a>';
          endif;
        ?>
      </div>

      <!-- Start/Inicio main-nav -->
      <?php
          if( has_nav_menu( 'eovaltic_wpst_main_menu' )):
            wp_nav_menu( array(
              'theme_location' => 'eovaltic_wpst_main_menu',
              'container' => 'nav',
              'container_class' => 'main-nav'
          ));
          else: ?>
            <p> <?php _e( 'Crea y asigna tu menú a "Menú Principal" en el Administrador de WordPress.', 'eovaltic_wpst' );?> </p>
          <?php endif;
      ?>
      <!-- Ends/Fin main-nav -->

      <!-- searchform.php --> 
      <?php get_search_form(); ?>      
    </header>

    <!-- Start/Inicio main-banner -->
    <?php if ( is_front_page() ): ?>
      <section class="main-banner" style="background: url(<?php header_image(); ?>) center center / cover fixed;"> 
        <h1 class="main-banner__title"> <?php bloginfo( 'name' ); ?> </h1>
        <p class="main-banner__description"> <?php bloginfo( 'description' ); ?> </p>
      </section>
    <?php else: ?>
        <p>NO es el front page - Sin banner </p>
    <?php endif; ?>	  
    <!-- Ends/Fin main-banner -->
      
    <!-- Start/Inicio main -->
    <main class="main">