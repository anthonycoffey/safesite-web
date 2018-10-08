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

if ($divId == 0) :
    echo  "<div class='group-one'>"; 
	 // close div if it's not the first
elseif ($divId == 2) :
	echo  "<div class='quote'>"; 
    echo  "</div>";
    echo  "<div class='group-two'>"; 
	 // close div if it's not the first
elseif ($divId == 6) :
    echo  "<div class='group-three'>"; 
	 // close div if it's not the first
elseif ($divId == 6) :
    echo  "<div class='quote'>"; 
    echo  "</div>"; // close div if it's not the first
endif;

?>

<article id="post-<?php the_ID(); ?>" class="<?php $allClasses = get_post_class(); foreach ($allClasses as $class) { echo $class . "  "; } ?> group industry-<?php echo ++$divId; ?>" >
	<div class="featured-hero lazyload" data-sizes="auto" 
    role="banner" data-bgset="<?php the_post_thumbnail_url( 'small' ); ?> [--small] | <?php the_post_thumbnail_url( 'medium' ); ?> [--medium] |  <?php the_post_thumbnail_url( 'large' ); ?> [--large] |  <?php the_post_thumbnail_url( 'xlarge' ); ?> [--xlarge]">
	</div>

	<header>
	<?php
		if ( is_single() ) {
			the_title( '<h1 class="entry-title">', '</h1>' );
		} else {
			
			the_title('<h3>','</h3>');
		}
	?>
	</header>

	<a class="link" href="<?php the_permalink(); ?>"><span class="icon-navigate_next"></span></a>	


</article>
<?php         
	if ($divId == 2 or $divId == 10) :
    echo "</div>";
	elseif ($divId == 6 ) :
	echo "</div>";
    echo  "<div class='number'>"; 
    echo  "</div>";
	endif
	?>
