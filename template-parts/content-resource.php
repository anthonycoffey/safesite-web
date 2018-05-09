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

<article id="post-<?php the_ID(); ?>" class="<?php $allClasses = get_post_class(); foreach ($allClasses as $class) { echo $class . "  "; } ?> group box<?php echo ++$divId; ?> grid-item " >
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
	<div class="type">
		<span class="icon"></span>
		<h4>
			<?php   
				// Get terms for post
				$terms = get_the_terms( $post->ID , 'resource-type' );
				// Loop over each item since it's an array
				if ( $terms != null ){
				foreach( $terms as $term ) {
				// Print the name method from $term which is an OBJECT
				print $term->name ;
				// Get rid of the other data stored in the object, since it's not needed
				unset($term);
				} }
			?>
		</h4>
		<a class="link" href="<?php the_permalink(); ?>"><span class="icon-navigate_next"></span></a>	
	</div>
</article>
