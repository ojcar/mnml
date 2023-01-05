<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mnml
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php the_title( '<div><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></div>' );?>
	<time><?php mnml_posted_on(); ?></time>
</article><!-- #post-<?php the_ID(); ?> -->
