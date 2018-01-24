<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the wordpress construct of pages
 * and that other 'pages' on your wordpress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Boilerplate
 * @since Boilerplate 1.0
 */

get_header(); ?>

<!-- 
<div id="feature-artists-nav">
	<h2>We match clients with artists for the creation of original illustrated artwork - Contact us</h2>
</div> -->

<div class="popup">
    <a class="close" href="#">&times;</a>
    <div class="content">
		<?php while ( have_posts() ) : the_post(); ?>

		<h3><?php the_field('box_title'); ?></h3>

		<p><?php the_field('box_description'); ?></p>

		<?php endwhile; // end of the loop. ?>
    </div>
</div>dsds


<?php get_sidebar(); ?>
<?php get_footer(); ?>