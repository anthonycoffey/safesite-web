<?php if ( has_post_thumbnail( $post->ID ) ) : ?>
  	<div class="featured-hero lazyload case-study" data-sizes="auto" 
    role="banner" data-bgset="<?php the_post_thumbnail_url( 'small' ); ?> [--small] | <?php the_post_thumbnail_url( 'medium' ); ?> [--medium] |  <?php the_post_thumbnail_url( 'large' ); ?> [--large] |  <?php the_post_thumbnail_url( 'xlarge' ); ?> [--xlarge]">
	</div>
<?php endif;?>
	<div class="title">
				<?php

					$terms = get_the_terms( $post->ID , 'resource-type' );

					foreach ( $terms as $term ) {
						echo '<h5>';
						echo $term->name;
						echo '</h5>';
					}

				?>
				<hr>
				<?php
					if ( is_single() ) {
						the_title( '<h1 class="entry-title">', '</h1>' );
					} else {
						the_category(', '); 
						the_title( '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark"><h3 class="entry-title">', '</h3></a>' );
					};
				?>
	</div>

	<header class="overview">

				<div>
					<h3>Overview</h3>
					<p><?php the_field('overview_description'); ?></p>
					<?php if( get_field('file_upload') ): ?>

						<a href="<?php the_field('file_upload'); ?>" >Download File</a>

					<?php endif; ?>
				</div>
		<div class="logo">
			<img src="http://via.placeholder.com/350x150">
			<?php 

				$image = get_field('logo_image');
				$size = 'full'; // (thumbnail, medium, large, full or custom size)

					if( $image ) {

						echo wp_get_attachment_image( $image, $size );

					}

			?>
		</div>
		<div class="quick-facts">
			<h3>Quick facts</h3>
			<div>
				<span>Industry</span>
				<span><?php the_field('industry'); ?></span>
			</div>
			<div>
				<span>Website</span>
				<a href="<?php the_field('website'); ?>"><?php the_field('website'); ?></a>
			</div>
			<div>
				<span>Founded</span>
				<span><?php the_field('founded'); ?></span>
			</div>
			<div>
				<span>Employees</span>
				<span><?php the_field('employees'); ?></span>
			</div>			
		</div>
	</header>
	<?php get_template_part( 'template-parts/quick-numbers', get_post_format() ); ?>
