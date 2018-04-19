<?php
/**
 * The template for displaying all pages.
 *
 *
 Template Name: Team
 *
 * @package WordPress
 * @subpackage Boilerplate
 * @since Boilerplate 1.0
 */

get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>
<span class="orange"></span>
<div class="main-container">
		 <span class="title">
			<h6 class="end">TEAM</h6>
			</hr>
			<h1 class="end">Meet The Brains Behind Safesite</h1>
		</span>
		<main class="team collapse">

<!-- 			<div class="team-slide">
				<?php
				    $loop = new WP_Query( array( 'posts_per_page' => '-1','post_type' => 'team', 'paged' => $paged ) );
				    if ( $loop->have_posts() ) :
				    	$i=0;
				        while ( $loop->have_posts() ) : $loop->the_post(); 

				        	?>
				            <div class="team <?php echo ($i==0)?'active':''; ?>">
				                <?php if ( has_post_thumbnail() ) { ?>
				                    <div class="image">
				                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
				                    </div>
				                <?php } ?>
				                <div class="title">
				                    <h2><?php echo get_the_title(); ?></h2>
				                </div>
				            </div>
				        <?php 
				         $i++;
				         endwhile;?>
				  
				        <?php 
				    endif;
				    wp_reset_postdata();
				?>
			</div> -->
				<?php
				    $loop = new WP_Query( array( 'posts_per_page' => '-1','post_type' => 'team', 'paged' => $paged ) );
				    if ( $loop->have_posts() ) :
				        while ( $loop->have_posts() ) : $loop->the_post(); ?>
				         <?php if ($loop->current_post == 0) echo '<div class="four">'; ?>
				            <div class="team-thumb">
				                <?php if ( has_post_thumbnail() ) { ?>
				                    <div class="image">
				                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
				                    </div>
				                <?php } ?>
				            </div>
				             <?php if ($loop->current_post == 3) echo '</div><div class="six">'; ?>

				        <?php 
				         $i++;
				         endwhile;?>
				  
				        <?php 
				    endif;
				    wp_reset_postdata();
				?>
				 </div>
		</main>
</div>
<?php get_footer();
