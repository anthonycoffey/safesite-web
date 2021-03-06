<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); 

global $post; 

if (    ( $post->post_type == 'resources' ) 
     && has_term( 'checklist', 'resource-type' )
) {
	echo'<div class="overview checklist">';
    get_template_part( 'template-parts/overview', 'checklist' );
    echo'</div>';
}elseif (    ( $post->post_type == 'resources' ) 
     && has_term( 'video', 'resource-type' )
) {
	echo'<div class="overview" checklist>"';
    echo 'viideo';
}elseif (    ( $post->post_type == 'resources' ) 
     && has_term( 'case-studies', 'resource-type' )
) {

		get_template_part( 'template-parts/heading', 'case' );

}

?>

<?php the_post_navigation(); ?>

</div>
<?php get_footer();
