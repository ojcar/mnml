<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mnml
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
<?php wp_body_open(); ?>


    <div class=pad2y style=position:relative>
        <div class=only-print>
            <h2><?php bloginfo( 'name' ); ?></h2>
            <div style=margin-top:0;>https://www.twitter.com/@vega</div>
        </div>
        <nav class=header-wrap>
            <div class="header nu limiter no-print">
                <h2 style="line-height:1.6;font-size:1rem;margin:0 0 0.25em 0;"><?php bloginfo( 'name' ); ?></h2>
                <ul style=list-style:none;padding:0;margin:0;>
                    <li><a href=/>log</a></li>
                    <li><a href=/lecturas/>lecturas</a></li>
                    <li><a href=/pelis/>lo que vi</a></li>
                    <li><a href=/series/>series</a></li>
                </ul>
            </div>
        </nav>


