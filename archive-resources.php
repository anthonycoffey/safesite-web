<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>
<?php

$categories = get_categories(); ?>
<div id="resource-menu">
	<h1>Resources</h1>
	<ul id="category-menu" action="<?php echo site_url() ?>/wp-admin/admin-ajax.php" >
		<li class="current" data-slug="all">All</li>
		<?php
			if( $terms = get_terms( 'resource-type', 'orderby=name' ) ) : // to make it simple I use default categories

				foreach ( $terms as $term ) :
					echo '<li  data-slug="' . $term->name . '">' . $term->name . '</li>'; // ID of the category as the value of an option
				endforeach;

			endif;
		?>
	</ul>
</div>
<div id="loading-animation" style="display: none;"><img src="<?php echo admin_url ( 'images/loading-publish.gif' ); ?>"/></div>

	<main id="category-post-content" class="main-content">
		<div class="grid-sizer"></div>
		<div class="gutter-sizer"></div>
		<?php

        // The Arguments
        $args = array(
            'post_type' => 'resources',
			'numberposts' => 25,
			'posts_per_page' => 7,
			'paged' => $paged
        );  

        // The Query
        $the_query = new WP_Query( $args ); ?>

        <?php

        // If we have the posts...
        if ( $the_query->have_posts() ) : ?>

		<?php $divId = 0;?>

        <!-- Start the loop the loop --> 
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<?php get_template_part( 'template-parts/content-resource', get_post_format() ); ?>
		<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; // End have_posts() check. ?>	
        <?php wp_reset_postdata(); ?>




		<div></div>
	<?php

	// don't display the button if there are not enough posts
	if (  $wp_query->max_num_pages > 1 )
		echo '<div class="misha_loadmore"><span>Load more articles</span></div>'; // you can use <a> as well
	?> 
	</main>


<?php get_footer();
