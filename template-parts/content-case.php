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

	<header class="overview">
		<div class="title">
						<?php the_terms( $post->ID, 'Resources', ' ', ' / ' ); ?>
			<?php
				if ( is_single() ) {
					the_title( '<h1 class="entry-title">', '</h1>' );
				} else {
					the_category(', '); 
					the_title( '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark"><h3 class="entry-title">', '</h3></a>' );
				}
			?>
		</div>
		<div>
			<h3>overview</h3>
			<h1><?php the_field('overview_description'); ?></h1>
			<?php if( get_field('file_upload') ): ?>

				<a href="<?php the_field('file_upload'); ?>" >Download File</a>

			<?php endif; ?>
		</div>
		<div class="logo">
		<?php 

$image = get_field('logo_image');
$size = 'full'; // (thumbnail, medium, large, full or custom size)

if( $image ) {

	echo wp_get_attachment_image( $image, $size );

}

?>
</div>
		<div class="quick-facts">
			<h3>overview</h3>
			<h1><?php the_field('overview_description'); ?></h1>
			<?php if( get_field('file_upload') ): ?>

				<a href="<?php the_field('file_upload'); ?>" >Download File</a>

			<?php endif; ?>
		</div>
	</header>
	<?php the_content(); ?>
</article>
