<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mnml
 */

?>

<div id="post-<?php the_ID(); ?>">
	<?php the_title( '<div><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></div>' );?>
	<time><?php mnml_posted_timestamp(); ?></time>
</div><!-- #post-<?php the_ID(); ?> -->
