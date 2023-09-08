<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package selune
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<a href="<?php the_permalink(); ?>">
		<h4>
			<?php the_title(); ?>
			<svg width="37" height="24" viewBox="0 0 37 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="m22.696 2.18 8.358 8.278H0v3.079h31.054l-8.358 8.283 2.2 2.18L37 11.998 24.895 0l-2.199 2.18Z" fill="currentColor"></path></svg>
		</h4>
	</a>
</article><!-- #post-## -->
