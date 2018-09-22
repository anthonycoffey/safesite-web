<?php
/* template for single careers */
get_header(); ?>

<div class="career">
  <main>
    <div class="row">
			<?php while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <header>
						<?php the_title( '<h1 class="entry-title">', '</h1>' );	?>
          </header>
					<?php the_content(); ?>
        </article>
			<?php endwhile; ?>
    </div>
  </main>
</div>
<?php get_footer();
