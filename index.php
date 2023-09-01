<?php
/**
 * Eovaltic WPST - index template 
 *
 * Esta es la plantilla mas genérica de nuestro tema Manantial
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage eovaltic_wpst
 * @since 1.0.0
 */

get_header(); ?>	

<!-- Start/Inico THE LOOP -->
<?php 
  if (have_posts()): 
    while (have_posts()): the_post();
      get_template_part( 'template-parts/content' );
    endwhile; 
  else: 	
    get_template_part( 'template-parts/content-none' ); 
  endif; 
?> 
<!-- Ends/Fin THE LOOP -->

<?php get_sidebar(); ?>
  
<?php get_footer(); ?>	