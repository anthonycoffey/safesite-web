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
<h1 class="entry-title"><?php
    printf( __( 'Resource Archive: %s', 'twentyten' ), '<span>' . single_cat_title( '', false ) . '</span>' );
?></h1>
</div>
<div id="loading-animation" style="display: none;"><img src="<?php echo admin_url ( 'images/loading-publish.gif' ); ?>"/></div>

	<main id="category-post-content" class="main-content">
		<div class="grid-sizer"></div>
		<div class="gutter-sizer"></div>
		<?php
  


		if ( is_tax('resource-type','whitepaper' ) ) {
			$args=array(
	    		'post_type' => 'resources',
			    'taxonomy'  => 'resource-type',
			    'term'      => 'whitepaper',
			    'orderby'   => 'date',
			    'order'     => 'DESC'
			);

		}elseif	(is_tax('resource-type','video' ) ) {
			$args=array(
	    		'post_type' => 'resources',
			    'taxonomy'  => 'resource-type',
			    'term'      => 'video',
			    'orderby'   => 'date',
			    'order'     => 'DESC'
			);
		}elseif	( is_tax('resource-type','case-study' ) ) {
			$args=array(
	    		'post_type' => 'resources',
			    'taxonomy'  => 'resource-type',
			    'term'      => 'case-study',
			    'orderby'   => 'date',
			    'order'     => 'DESC'
			);
		}elseif	( is_tax('resource-type','checklist' ) ) {
			$args=array(
	    		'post_type' => 'resources',
			    'taxonomy'  => 'resource-type',
			    'term'      => 'checklist',
			    'orderby'   => 'date',
			    'order'     => 'DESC'
			);
		};

        // The Query
        $the_query = new WP_Query( $args ); ?>

        <?php

        // If we have the posts...
        if ( $the_query->have_posts() ) : ?>

		<?php $divId = 0;?>

        <!-- Start the loop the loop --> 
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<?php get_template_part( 'template-parts/content-result', get_post_format() ); ?>
		<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; // End have_posts() check. ?>	
        <?php wp_reset_postdata(); ?>




		<div></div>
	<?php
	global $wp_query; // you can remove this line if everything works for you
	 
	// don't display the button if there are not enough posts
	if (  $wp_query->max_num_pages > 1 )
		echo '<div class="misha_loadmore"><span>Load more articles</span></div>'; // you can use <a> as well
	?> 
	</main>


<?php get_footer();
