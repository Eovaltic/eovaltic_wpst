<?php
/**
 * Eovaltic WPST - content-entries template
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage eovaltic_wpst
 * @since 1.0.0
 */
?>

<article>	
	<a href="<?php the_permalink(); ?>">
		<?php 
			the_title('<div> <h3>', '</h3> </div>'); 
		?>
	</a>
	
	<?php 
		if ( has_post_thumbnail() ) {
			the_post_thumbnail( 'full', array('class' => 'clase-de-imagen' ));
		}
	?>
	
	<?php the_excerpt();?>

	<?php the_category();?>

	<?php the_tags();?>

	<?php the_author();?>

	<?php the_author_posts_link();?>
</article>

<!-- Este es el post format que aparece en la lista del CPT categorias y en frontpage -->