<?php
/*
* Template Name: Foggy Memories
* Template Post Type: ind
*/


get_header(); 

?>

<header class="title">
	
	<?php
	    // query for the industry page
	    $your_query = new WP_Query( 'pagename=industries' );
	    // "loop" through query (even though it's just one page) 
	    while ( $your_query->have_posts() ) : $your_query->the_post();
	?>
		<h1 class="entry-title"><h1 class="entry-title"><?php the_title(); ?></h1>
	    <h2><?php echo the_excerpt(); ?></h2> 
	<?php
	    endwhile;
	    // reset post data (important!)
	    wp_reset_postdata();
	?>	
	</h1>
	
</header>

<div class="main-content">
	<div class="industries">
	<?php

    // The Arguments
    $args = array(
        'post_type' => 'industries',
		'numberposts' => 25,
		'order' => 'asc',
		'posts_per_page' => -1
    );  

    // The Query
    $the_query = new WP_Query( $args ); ?>

    <?php

    // If we have the posts...
    if ( $the_query->have_posts() ) : ?>

	<?php $divId = 0;?>

    <!-- Start the loop the loop --> 
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		<?php get_template_part( 'template-parts/content-industry', get_post_format() ); ?>
	<?php endwhile; ?>

	<?php else : ?>
		<?php get_template_part( 'template-parts/content', 'none' ); ?>

	<?php endif; // End have_posts() check. ?>	
    <?php wp_reset_postdata(); ?>
    </div>
</div>


<?php get_footer();
