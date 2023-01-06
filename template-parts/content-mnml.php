<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mnml
 */

?>

<?php the_title( '<div id="post-' . the_ID() . '"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></div>' );?>
<?php mnml_posted_timestamp(); ?>
