<?php
	/*
	Template Name: Features Single
	*/
	get_header();
?>

  <div class="breadcrumbs">
    <div class="inner">
      <div class="column">
        <a class="parent">Feature<span class="arrow-down"></span></a>
        <a class="current">Industry</a>
      </div>
    </div>
  </div>

	<header class="features-hero" role="banner">
		<div class="inner">
      <div class="headlines">
        <h1><?= get_the_title(); ?></h1>
        <h3>Overview</h3>
        <p>Log Hazards on the spot. Set and track a resolution timeframe.<br />
        Notify and atuomatically follow up responsible parties.
        </p>
        <div class="cta">
          <p>
            Proven to decrease in the average time to resolve a recorded hazard by
            <span class="statistic">62%</span>
          </p>
          <a class="button">Request a Demo</a>
        </div>
      </div>
      <div class="image">
        <img src="/wp-content/themes/FoundationPress/src/assets/images/features-hero.png"/>
      </div>
		</div><!-- .inner -->

    <div class="benefits-wrapper">
      <div class="benefits">
        <h3>Benefits</h3>
        <ul>
          <li>Drastically reduce reporting times, export filtered lists and reports with one button</li>
          <li>Improve the frequency and resolution time frame with on-the-spot reporting and an automated close-out workflow.</li>
          <li>Track all hazards across your entire business in one spot.</li>
        </ul>
      </div>
    </div>
	</header>

  <main class="main-content">
    <div class="inner">
      <div class="headlines">
       <h3>Featured Whitepapers</h3>
      </div>
      <div class="whitepaper">
        <figure style="
        background-image: url('/wp-content/themes/FoundationPress/src/assets/images/whitepaper_thumbnail1.png);">
          <figcaption><span><img src="/wp-content/themes/FoundationPress/src/assets/images/whitepaper.svg"/></span>WHITEPAPER</figcaption>
        </figure>
        <a href="#" class="title">
            <h4>Top Ten OSHA Cited Standards from 2017</h4>
            <span><img src="/wp-content/themes/FoundationPress/src/assets/images/article-icon.svg"/></span>
        </a>
      </div>
      <div class="whitepaper">
        <figure style="
        background-image: url('/wp-content/themes/FoundationPress/src/assets/images/whitepaper_thumbnail2.png);">
          <figcaption><span><img src="/wp-content/themes/FoundationPress/src/assets/images/whitepaper.svg"/></span>WHITEPAPER</figcaption>
        </figure>
        <a href="#" class="title">
            <h4>Top Ten OSHA Cited Standards from 2017</h4>
            <span><img src="/wp-content/themes/FoundationPress/src/assets/images/article-icon.svg"/></span>
        </a>
      </div>
      <div class="whitepaper">
        <figure style="
        background-image: url('/wp-content/themes/FoundationPress/src/assets/images/whitepaper_thumbnail3.png);">
          <figcaption><span><img src="/wp-content/themes/FoundationPress/src/assets/images/whitepaper.svg"/></span>WHITEPAPER</figcaption>
        </figure>
        <a href="#" class="title">
            <h4>Top Ten OSHA Cited Standards from 2017</h4>
            <span><img src="/wp-content/themes/FoundationPress/src/assets/images/article-icon.svg"/></span>
        </a>
      </div>
      <div class="whitepaper">
        <figure style="
        background-image: url('/wp-content/themes/FoundationPress/src/assets/images/whitepaper_thumbnail4.png);">
          <figcaption><span><img src="/wp-content/themes/FoundationPress/src/assets/images/whitepaper.svg"/></span>WHITEPAPER</figcaption>
        </figure>
        <a href="#" class="title">
            <h4>Top Ten OSHA Cited Standards from 2017</h4>
            <span><img src="/wp-content/themes/FoundationPress/src/assets/images/article-icon.svg"/></span>
        </a>
      </div>
    </div>
  </main>



<!--	<main class="main-content">-->
<!--		<div class="inner">-->
<!---->
<!--		</div>-->
<!--	</main>-->




<?php get_footer();