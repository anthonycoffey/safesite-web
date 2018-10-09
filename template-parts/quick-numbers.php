<div class="quick-numbers" data-equalizer-watch>

	<h4>Featured Case Study</h4>
	<?php 
		$image = get_field('logo_image');
		$size = 'full'; // (thumbnail, medium, large, full or custom size)

		if( $image ) {

			echo wp_get_attachment_image( $image, $size );

		}
	?>
	<?php if( get_field('numbers_one') ): ?>
	<div>
		<h1 class="numbers"><?php the_field('numbers_one'); ?></h1>
		<h3><?php the_field('numbers_info_one'); ?></h3>
	</div>
	<?php 
		endif;
		if( get_field('numbers_two') ): 
	?>
	<div>
		<h1 class="numbers"><?php the_field('numbers_two'); ?></h1>
		<h3><?php the_field('numbers_info_two'); ?></h3>
	</div>
	<?php 
		endif;
		if( get_field('numbers_three') ): 
	?>
	<div>
		<h1 class="numbers"><?php the_field('numbers_three'); ?></h1>
		<h3><?php the_field('numbers_info_three'); ?></h3>
	</div>	
	<?php endif; ?>
	<a class="button" href="<?php the_permalink(); ?>">See how they did it</a>

</div>