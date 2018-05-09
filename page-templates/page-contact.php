<?php
/*
Template Name: Contact
*/
get_header(); ?>

<?php $hero = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>

<header class="hero" style="background: url('<?php echo $hero['0'];?>') bottom center; background-size: cover;
            -webkit-background-size: cover;
            -moz-background-size: cover; 
            -o-background-size: cover;" role="banner">
        <div class="info">
        	<div class="title">
	        	<?php
					if ( is_single() ) {
						the_title( '<h1 class="entry-title">', '</h1>' );
					} else {
						the_category(', '); 
						the_title( '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark"><h3 class="entry-title">', '</h3></a>' );
					}
				?>
				<h2><?php the_field('tagline'); ?></h2>
			</div>
			<div class="contact">
				<h2>Get in touch</h2>
				<p class="bold">Find Us</p>
				<p><?php the_field('address'); ?></p>
				<p class="bold">Call Us</p>
				<p><?php the_field('phone_number'); ?></p>
				<p class="bold">Email</p>
				<p><?php the_field('email'); ?></p>
				<hr>
				<h2 class="connect">Connect</h2>
				<a href="<?php the_field('email'); ?>"><span class="icon-facebook"></span>
				</a>
				<a href="<?php the_field('email'); ?>"><span class="icon-twitter"></span>
				</a>
				<a href="<?php the_field('email'); ?>"><span class="icon-linkedin2"></span>
				</a>
				<a href="<?php the_field('email'); ?>"><span class="icon-google-plus"></span>
			</a>			

			</div>
		</div>
</header>
<?php 

$location = get_field('map');

if( !empty($location) ):
?>
<div class="acf-map">
	<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
</div>
<?php endif; ?>

<?php echo do_shortcode( '[contact-form-7 id="536" title="Send us a Message!" html_name="my-form"]' ); ?>

<?php get_footer();
