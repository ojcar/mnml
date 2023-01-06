<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mnml
 */

?>

<div id="post-<?php the_ID(); ?>"><a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark"><?php the_title(); ?></a></div>
<?php mnml_posted_timestamp(); ?>
