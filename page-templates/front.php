<?php
/*
Template Name: Front
*/
get_header(); ?>

<?php $hero = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>

<header class="front-hero" style="background: url('<?php echo $hero['0'];?>') bottom center; background-size: cover;
            -webkit-background-size: cover;
            -moz-background-size: cover; 
            -o-background-size: cover;" role="banner">
            <div class="logos">dsds</div>
<div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
  <div class="orbit-wrapper">
    <nav class="orbit-bullets">
    <button class="is-active" data-slide="0"><span class="show-for-sr">First slide details.</span><span class="show-for-sr">Current Slide</span></button>
    <button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
    <button data-slide="2"><span class="show-for-sr">Third slide details.</span></button>
    <button data-slide="3"><span class="show-for-sr">Fourth slide details.</span></button>
  </nav>
    <div class="orbit-controls">
       <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
    </div>
    <ul class="orbit-container">
      <li class="is-active orbit-slide">
      <h5>Reporting</h5>	
      <h1>Comprehensive Safety Management</h1>
      <p>Streamline safety tasks on-the-go with Safesite Field. Log safety hazards instantly and automatically notify responsible parties for resolution. Progress is tracked and logged the entire way.</p>
      <button>try demo</button>
      </li>
      <li class="orbit-slide">
        <figure class="orbit-figure">
          <img class="orbit-image" src="https://placehold.it/1200x600/888?text=Slide-2" alt="Space">
          <figcaption class="orbit-caption">Lets Rocket!</figcaption>
        </figure>
      </li>
      <li class="orbit-slide">
        <figure class="orbit-figure">
          <img class="orbit-image" src="https://placehold.it/1200x600/777?text=Slide-3" alt="Space">
          <figcaption class="orbit-caption">Encapsulating</figcaption>
        </figure>
      </li>
      <li class="orbit-slide">
        <figure class="orbit-figure">
          <img class="orbit-image" src="https://placehold.it/1200x600/666&text=Slide-4" alt="Space">
          <figcaption class="orbit-caption">Outta This World</figcaption>
        </figure>
      </li>
    </ul>
  </div>
</div>
</header>

<div class="section-divider">
	<hr />
</div>

<section class="benefits">
	<header>
		<h2>Unite your worksite on all fronts</h2>
	</header>

	<ul class="tabs"  data-tabs id="collapsing-tabs">
	  <li class="tabs-title is-active"><a href="#panel1c" aria-selected="true">Safesite Pro</a></li>
	  <li class="tabs-title"><a href="#panel2c">Safesite Lite</a></li>
	  <li class="tabs-title"><a href="#panel3c">Dashboard</a></li>
	</ul>

	<div class="tabs-content" data-tabs-content="collapsing-tabs">
	  <div class="tabs-panel is-active" id="panel1c">
	    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
	  </div>
	  <div class="tabs-panel" id="panel2c">
	    <p>Vivamus hendrerit arcu sed erat molestie vehicula. Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor. Ut in nulla enim. Phasellus molestie magna non est bibendum non venenatis nisl tempor. Suspendisse dictum feugiat nisl ut dapibus.</p>
	  </div>
	  <div class="tabs-panel" id="panel3c">
	    <img class="thumbnail" src="assets/img/generic/rectangle-3.jpg">
	  </div>
	</div>
</section>

<?php get_footer();
