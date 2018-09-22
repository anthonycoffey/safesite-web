<?php get_template_part( 'template-parts/featured-image' ); ?>

<div class="main-container">
	<div class="main-grid">
		<main class="main-content">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content', 'case' ); ?>
				<?php the_post_navigation(); ?>
			<?php endwhile; ?>
		</main>
	</div>

