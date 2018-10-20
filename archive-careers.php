<?php
	/**
	 * The template for Career archive
	 *
	 * @package FoundationPress
	 * @since FoundationPress 1.0.0
	 */
	get_header();
  $headline = "";
  $subheadline = "";
	/* get custom field data*/
	if(have_rows('hero_section', 'option')):
    while(have_rows('hero_section', 'option')): the_row();
	    $headline = get_sub_field('headline');
	    $subheadline = get_sub_field('subheadline');
      if(have_rows('perks_benefits')):
        while(have_rows('perks_benefits')): the_row();
          $perks_copy = get_sub_field('copy');
          $perks = [];
          if(have_rows('list')):
            while(have_rows('list')): the_row();
              $perks[] = get_sub_field('perk');
            endwhile;
          endif;
        endwhile;
      endif;
	  endwhile;
  endif;
?>
<div class="careers">
  <div class="hero-section careers-archive">
    <div class="inner">
      <h1><?= $subheadline ?></h1>
      <span class="hero-hr"></span>
      <h4><?= $headline ?></h4>
    </div>
    <div class="perks-benefits">
      <div>
        <a href="#"><span>Perks/Benefits</span></a>
        <div class="hero-drilldown">
          <a href="#"><span class="icon-navigate_next"></span></a>
        </div>
      </div>
      <div class="panel">
        <p><?= $perks_copy ?></p>
        <ul>
          <?php foreach($perks as $perk): ?>
            <li><?= $perk ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </div>
  <?php

    if(have_rows('our_story_section', 'option')):
      while(have_rows('our_story_section', 'option')): the_row();
        $our_story_headline = get_sub_field('headline');
        $our_story_html = get_sub_field('copy');
        if(have_rows('quote')):
          while(have_rows('quote')): the_row();
            $quote = get_sub_field('copy');
            $author = get_sub_field('author');
          endwhile;
        endif;
      endwhile;
    endif;
//    var_dump($our_story_html, $our_story_headline);
  ?>
	<main>
    <div class="our-story">
      <h3><?= $our_story_headline ?></h3>
      <?= $our_story_html ?>
      <div class="quote">
        <div class="quote-icon">
          <p><img src="/wp-content/themes/FoundationPress/src/assets/images/demo/left-quote-mark.svg"/></p>
        </div>
        <img class="quote-img" src="/wp-content/themes/FoundationPress/src/assets/images/demo/construction-worker-REPLACE.png"/>
        <p class="quote-copy">
          <?= $quote ?>
          <span>- <?= $author ?></span>
        </p>
      </div>
    </div>
    <div class="open-positions">
      <div class="headline"><h3>Open Positions</h3></div>
      <div class="body-left">
	      <?php
		      $args = ['post_type' => 'careers','tax_query' => [ ['taxonomy' => 'career-category','field' => 'slug','terms' => 'sales'] ]];
		      $sales = get_posts($args);
	      ?>
        <h4 class="career-category">Sales</h4>
        <ul class="careers-list">
          <?php foreach ($sales as $job):
            $link = get_the_permalink($job->ID);
            $title = get_the_title($job->ID);
          ?>
            <li>
              <div class="career-drilldown">
                <a class="text-link" href="<?= $link ?>"><?= $title ?></a>
                <a class="icon-link" href="<?= $link ?>"><span class="icon-navigate_next"></a>
              </div>
            </li>
          <?php endforeach; ?>
        </ul>
	      <?php
		      $args = ['post_type' => 'careers','tax_query' => [ ['taxonomy' => 'career-category','field' => 'slug','terms' => 'customer-experience'] ]];
		      $custom_experience = get_posts($args);
	      ?>
        <h4 class="career-category">Customer Experience</h4>
        <ul class="careers-list">
	        <?php foreach ($custom_experience as $job):
		        $link = get_the_permalink($job->ID);
		        $title = get_the_title($job->ID);
		        ?>
            <li>
              <div class="career-drilldown">
                <a class="text-link" href="<?= $link ?>"><?= $title ?></a>
                <a class="icon-link" href="<?= $link ?>"><span class="icon-navigate_next"></a>
              </div>
            </li>
	        <?php endforeach; ?>
        </ul>
      </div>
      <div class="body-right">
	      <?php
		      $args = ['post_type' => 'careers','tax_query' => [ ['taxonomy' => 'career-category','field' => 'slug','terms' => 'engineering'] ]];
		      $engineering = get_posts($args);
	      ?>
        <h4 class="career-category">Engineering</h4>
        <ul class="careers-list">
	        <?php foreach ($engineering as $job):
		        $link = get_the_permalink($job->ID);
		        $title = get_the_title($job->ID);
		        ?>
            <li>
              <div class="career-drilldown">
                <a class="text-link" href="<?= $link ?>"><?= $title ?></a>
                <a class="icon-link" href="<?= $link ?>"><span class="icon-navigate_next"></a>
              </div>
            </li>
	        <?php endforeach; ?>
        </ul>
	      <?php
		      $args = ['post_type' => 'careers','tax_query' => [ ['taxonomy' => 'career-category','field' => 'slug','terms' => 'general'] ]];
		      $general = get_posts($args);
	      ?>
        <h4 class="career-category">General</h4>
        <ul class="careers-list">
	        <?php foreach ($general as $job):
		        $link = get_the_permalink($job->ID);
		        $title = get_the_title($job->ID);
		        ?>
            <li>
              <div class="career-drilldown">
                <a class="text-link" href="<?= $link ?>"><?= $title ?></a>
                <a class="icon-link" href="<?= $link ?>"><span class="icon-navigate_next"></a>
              </div>
            </li>
	        <?php endforeach; ?>
        </ul>
      </div>

    </div>

	</main>
</div>
<?php get_footer();

