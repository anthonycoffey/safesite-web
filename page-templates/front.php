<?php
/*
Template Name: Front
*/
get_header(); ?>

<?php $hero = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>

<header class="front-hero" role="banner">
            <span class="overlay" style="background: url('<?php echo $hero['0'];?>') bottom center; background-size: cover;
            -webkit-background-size: cover;
            -moz-background-size: cover; 
            -o-background-size: cover;"></span>
            <span id="intro">
            <?php while ( have_posts() ) : the_post(); ?>
              <h1><?php echo get_the_excerpt();?></h1>
              <?php the_content(); ?>
            <?php endwhile; // end of the loop. ?>   
            <button class="button">Request a Demo</button>
            </span> 
                      <?php 

$image = get_field('hero_device');
$size = 'full'; // (thumbnail, medium, large, full or custom size)

if( $image ) {

  echo wp_get_attachment_image( $image, $size );

}

?>
</header>


<section class="logos">
  <span>Our partners include</span>
  <img id="" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/demo/logo-01.png" alt=" ">
  <img id="" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/demo/logo-02.png" alt=" ">
  <hr>
  <img id="" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/demo/logo-03.png" alt=" ">
  <img id="" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/demo/logo-04.png" alt=" ">
</section>


<section class="industries">
<div class="overlay"></div>
<div class="row">
<div class="intro">
  <h1>Industries</h1>
  <hr>
  <h2>See how Safesite is transforming safety managment in your industry.</h2>


    <?php
    wp_nav_menu( array( 
        'theme_location' => 'my-custom-menu', 
        'container_class' => 'links-title',
        'link_before' => '<h2>', 
        'link_after' => '</h2><div  class="icon-navigate_next"></div>' ) ); 
    ?>
        <?php
    wp_nav_menu( array( 
        'theme_location' => 'my-custom-menu', 
        'container_class' => 'links'   ) ); 
    ?>

</div>

<div class="image">
  <div class="overlay"></div>
</div>
</div>


</section>
<section id="recent">
  <h1>Recent Articles</h1>
  <h2>Industry-related news, insights and tips to keep you safe.</h2>
  <div class="posts">
<?php 
$args = array( 'posts_per_page' => '4' );
$recent_posts = new WP_Query($args);
while( $recent_posts->have_posts() ) :  
    $recent_posts->the_post() ?>
    <div> 
      <?php if ( has_post_thumbnail() ) : 
      $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
      echo '<span style="background: url('. $url.') bottom center; background-size: cover;
            -webkit-background-size: cover;
            -moz-background-size: cover; 
            -o-background-size: cover;"></span>';?>
  
      <?php endif ?>
      <a href="<?php echo get_permalink() ?>"><?php the_title() ?> <div  class="icon-navigate_next"></div></a> 
    </div>  
<?php endwhile; ?>
<?php wp_reset_postdata(); # reset post data so that other queries/loops work ?> 
</div>
</section>
<?php get_footer();
