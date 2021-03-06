<?php
// If a featured image is set, insert into layout and use Interchange
// to select the optimal image size per named media query.
if ( has_post_thumbnail( $post->ID ) ) : ?>
  	<div class="featured-hero lazyload" data-sizes="auto" 
    role="banner" data-bgset="<?php the_post_thumbnail_url( 'small' ); ?> [--small] | <?php the_post_thumbnail_url( 'medium' ); ?> [--medium] |  <?php the_post_thumbnail_url( 'large' ); ?> [--large] |  <?php the_post_thumbnail_url( 'xlarge' ); ?> [--xlarge]">
	</div>
<?php endif;
