<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="featured-hero" role="banner" data-interchange="[<?php the_post_thumbnail_url( 'small' ); ?>, small], [<?php the_post_thumbnail_url( 'medium' ); ?>, medium], [<?php the_post_thumbnail_url( 'large' ); ?>, large], [<?php the_post_thumbnail_url( 'xlarge' ); ?>, xlarge]">
		<header>
		<?php
			if ( is_single() ) {
				the_title( '<h1 class="entry-title">', '</h1>' );
			} else {
				the_category(', '); 
				the_title( '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark"><h3 class="entry-title">', '</h3></a>' );
			}
		?>
		</header>
				<?php the_content(); ?>
	</div>
</article>
