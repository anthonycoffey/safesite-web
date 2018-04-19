<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>
<div class="featured-articles">
<div class="blue"> <img id="corner" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/demo/blue-corner-blog.svg" alt=" "><h1>Safety Blog</h1></div>

    <div class="orbit" role="region"  data-orbit data-options="animInFromLeft:fade-in; animInFromRight:fade-in; animOutToLeft:fade-out; animOutToRight:fade-out;" >


            <ul class="orbit-container" >
            <span class="gradient"></span>

<?php
$args = array( 'posts_per_page' => 5,
'category_name' => '_featured-article' );

$icecakes = get_posts( $args );
foreach ( $icecakes as $post ) : setup_postdata( $post ); ?>




              <li class="orbit-slide" >
                

              	<div class="featured-hero" role="banner" data-interchange="[<?php the_post_thumbnail_url( 'small' ); ?>, small], [<?php the_post_thumbnail_url( 'medium' ); ?>, medium], [<?php the_post_thumbnail_url( 'large' ); ?>, large], [<?php the_post_thumbnail_url( 'xlarge' ); ?>, xlarge]">
	</div>
				<div class="orbit-caption" > <div><span>Featured Article</span><h3><?php the_title(); ?></h3><span class="slider-number"></span></div><?php 
$categories = get_the_category();
$category = $categories[0];
$cat_ID = $category->cat_ID; 
// get next post link
$next_post = get_adjacent_post( true, '', false );
if( $next_post ) {
     echo '<p class="title-one">' . get_the_title($next_post->ID ) . '</p>';
} else {
    $first = new WP_Query( array(
        'post_status' => 'publish',
        'posts_per_page' => 1,
        'order' => 'ASC',
        'cat' => $cat_ID
    ));

    $first->the_post();
    echo '<p class="title-one">' . get_the_title() . '</p>';
    wp_reset_query();
};
?></div>

				</li>

<?php endforeach; 
wp_reset_postdata(); ?>
<div class="post-nav">
	<div>
		<p>Next</p>
		<p class="title-two"></p>
		<button class="orbit-next" aria-label="next"><span class="show-for-sr">Next Slide</span>&#9654;</button>
	</div>
</div>
			</ul>

	</div>
</div>
<div class="main-grid">
<div class="filters">
	<form action="<?php echo site_url() ?>/wp-admin/admin-ajax.php" method="POST" id="recent">
	<button>Most Viewed</button>
	<input type="hidden" name="action" value="recentfilter">
</form>
<form action="<?php echo site_url() ?>/wp-admin/admin-ajax.php" method="POST" id="filter" >
	<?php
		if( $terms = get_terms( 'category', 'orderby=name' ) ) : // to make it simple I use default categories
			echo '<select id="sel" name="categoryfilter"><option>Category</option>';
			foreach ( $terms as $term ) :
				echo '<option value="' . $term->term_id . '">' . $term->name . '</option>'; // ID of the category as the value of an option
			endforeach;
			echo '</select>';
		endif;
	?>
	
	<input type="hidden" name="action" value="myfilter">
</form>
</div>


	<main id="response" class="main-content">
	<?php if ( have_posts() ) : ?>
		<?php /* Start the Loop */ ?>
		<?php $divId = 0;?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/content-blog', get_post_format() ); ?>
		<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; // End have_posts() check. ?>	
		<div></div>
	<?php
global $wp_query; // you can remove this line if everything works for you
 
// don't display the button if there are not enough posts
if (  $wp_query->max_num_pages > 1 )
	echo '<div class="misha_loadmore"><span>Load more articles</span></div>'; // you can use <a> as well
?>
	</main>

</div>

<?php get_footer();
