<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
global $divId;
?>

<article id="post-<?php the_ID(); ?>" class="<?php $allClasses = get_post_class(); foreach ($allClasses as $class) { echo $class . " "; } ?> group box<?php echo ++$divId; ?>" >
	<div class="featured-hero" role="banner" data-interchange="[<?php the_post_thumbnail_url( 'small' ); ?>, small], [<?php the_post_thumbnail_url( 'medium' ); ?>, medium], [<?php the_post_thumbnail_url( 'large' ); ?>, large], [<?php the_post_thumbnail_url( 'xlarge' ); ?>, xlarge]">
		<span class="gradient"></span>
		<div class="overlay"> <a href="<?php the_permalink(); ?>"><button class="button">Read Post</button></a></div>
		<header>
		<?php
			if ( is_single() ) {
				the_title( '<h1 class="entry-title">', '</h1>' );
			} else {
				the_category(', '); 
				the_title('<h3>','</h3>');
			}
		?>
		</header>
	</div>
</article>
