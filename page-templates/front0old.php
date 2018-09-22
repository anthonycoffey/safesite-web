<?php
/*
Template Name: Front-old
*/
get_header(); ?>

<?php $hero = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>

<header class="front-hero" style="background: url('<?php echo $hero['0'];?>') bottom center; background-size: cover;
            -webkit-background-size: cover;
            -moz-background-size: cover; 
            -o-background-size: cover;" role="banner">
</header>
<div id="map" style="position: relative; overflow: hidden;"></div>
<div class="orbit hero-slide" role="region" aria-label="Favorite Space Pictures" data-auto-play="false" data-options="animInFromLeft:fade-in; animInFromRight:fade-in; animOutToLeft:fade-out; animOutToRight:fade-out;" data-orbit>
  <div class="orbit-wrapper">
    <nav class="orbit-bullets">
    <button class="is-active" data-slide="0"><span class="show-for-sr">First slide details.</span><span class="show-for-sr">Current Slide</span></button>
    <button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
    <button data-slide="2"><span class="show-for-sr">Third slide details.</span></button>
    <button data-slide="3"><span class="show-for-sr">Fourth slide details.</span></button>
  </nav>
  
    <div class="orbit-controls">
       <button class="orbit-next"><span class="show-for-sr">Next Slide</span><span class="icon-navigate_next"></span></button>
    </div>
    <ul class="orbit-container">
      <li class="is-active orbit-slide">
      <h5>Reporting</h5>  
      <hr>
      <h1>Comprehensive Safety Management</h1>
      <p>Streamline safety tasks on-the-go with Safesite Field. Log safety hazards instantly and automatically notify responsible parties for resolution. Progress is tracked and logged the entire way.</p>
      <span class="count">1</span>
      <button class="button">try demo</button>
      </li>
      <li class="orbit-slide">
 <h5>Reporting</h5> 
  <hr>
      <h1>Comprehensive Safety Management</h1>
      <p>Streamline safety tasks on-the-go with Safesite Field. Log safety hazards instantly and automatically notify responsible parties for resolution. Progress is tracked and logged the entire way.</p>
      <span class="count">2</span>
      <button class="button">try demo</button>
      </li>
      <li class="orbit-slide">
 <h5>Reporting</h5> 
  <hr>
      <h1>Comprehensive Safety Management</h1>
      <p>Streamline safety tasks on-the-go with Safesite Field. Log safety hazards instantly and automatically notify responsible parties for resolution. Progress is tracked and logged the entire way.</p>
      <span class="count">4</span>
      <button class="button">try demo</button>
      </li>
      <li class="orbit-slide">
 <h5>Reporting</h5> 
  <hr>
      <h1>Comprehensive Safety Management</h1>
      <p>Streamline safety tasks on-the-go with Safesite Field. Log safety hazards instantly and automatically notify responsible parties for resolution. Progress is tracked and logged the entire way.</p>
      <span class="count">4</span>
      <button class="button">try demo</button>
      </li>
    </ul>
  </div>
</div>

<div class="logos">
  <img id="" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/demo/logo-01.png" alt=" ">
  <img id="" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/demo/logo-02.png" alt=" ">
  <img id="" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/demo/logo-03.png" alt=" ">
  <img id="" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/demo/logo-04.png" alt=" ">
</div>

<section class="benefits">

	<header>
		<h1>Unite your worksite on all fronts</h1>
	</header>
  <div class="tab-wrap">
  	<ul class="tabs"  data-tabs id="collapsing-tabs">
  	  <li class="tabs-title is-active"><a href="#panel1c" aria-selected="true"><span class="show-for-medium-up">Safesite</span> Pro</a></li>
  	  <li class="tabs-title"><a href="#panel2c"><span class="show-for-medium-up">Safesite</span> Lite</a></li>
  	  <li class="tabs-title"><a href="#panel3c">Dashboard</a></li>
  	</ul>
  </div>
	<div class="tabs-content" data-tabs-content="collapsing-tabs">

	  <div class="tabs-panel is-active" id="panel1c">
      <div class="info">
  	    <h1>Safesite <span>Pro</span></h1>
        <hr>
        <h4>For safety professionals</h4>
        <p>The complete version of our Safesite software. Built to track, analyze, and report your operation’s unique safety information, encourage team coordination, and cut down on redundant paperwork.
        </br>
        </br>
        <b>Includes the full comprehensive suite of safety tasks that our application offers.</b></p>
        <button class="button" data-open="exampleModal1" >Watch Video</button>
        <div class="reveal" id="exampleModal1" data-reveal>
          <div class="flex-video">
            <iframe width="420" height="315" src="//www.youtube.com/embed/aiBt44rrslw" frameborder="0" allowfullscreen></iframe>
          </div>
            <button class="close-button" data-close aria-label="Close modal" type="button">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
      </div>
      <img id="tab-main-img" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/demo/hand-w-phone.png" alt=" ">
    <section class="key-features end">
    <span class="blue-back"></span>
    <img id="tab-secondary-img" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/demo/site-inspector-01.png" alt=" ">
    <h3>Key Features</h3>
        <?php
        wp_nav_menu( array( 
            'theme_location' => 'key_features_menu', 
            'container_class' => 'links' ) ); 
        ?>

    </section>

	  </div>
	  <div class="tabs-panel" id="panel2c">
	    <p>Vivamus hendrerit arcu sed erat molestie vehicula. Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor. Ut in nulla enim. Phasellus molestie magna non est bibendum non venenatis nisl tempor. Suspendisse dictum feugiat nisl ut dapibus.</p>
	  </div>
	  <div class="tabs-panel" id="panel3c">
	    <img class="thumbnail" src="assets/img/generic/rectangle-3.jpg">
	  </div>
	</div>
</section>
<section class="industries">
<div class="intro">
  <h1>Industries</h1>
  <hr>
  <h4>See how Safesite is transforming safety managment in your industry.</h4>
</div>
<div class="tractor"></div>
<div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
  <div class="orbit-wrapper">
    <div class="orbit-controls">
       <button class="orbit-next"><span class="show-for-sr">Next Slide</span><span class="icon-navigate_next"><span class="icon-navigate_next"></span></span></button>
    </div>
    <ul class="orbit-container">
      <li class="is-active orbit-slide">
    <img id="" style="-webkit-filter: invert(100%);" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/demo/logo-03.png" alt=" "
      <h1>Comprehensive Safety Management</h1>
      <p>Streamline safety tasks on-the-go with Safesite Field. Log safety hazards instantly and automatically notify responsible parties for resolution. Progress is tracked and logged the entire way.</p>
      <button>try demo</button>
      </li>
      <li class="orbit-slide">
      <h5>Reporting</h5> 
      <h1>Comprehensive Safety Management</h1>
      <p>Streamline safety tasks on-the-go with Safesite Field. Log safety hazards instantly and automatically notify responsible parties for resolution. Progress is tracked and logged the entire way.</p>
      <button>try demo</button>
      </li>
      <li class="orbit-slide">
      <h5>Reporting</h5> 
      <h1>Comprehensive Safety Management</h1>
      <p>Streamline safety tasks on-the-go with Safesite Field. Log safety hazards instantly and automatically notify responsible parties for resolution. Progress is tracked and logged the entire way.</p>
      <button>try demo</button>
      </li>
      <li class="orbit-slide">
      <h5>Reporting</h5> 
      <h1>Comprehensive Safety Management</h1>
      <p>Streamline safety tasks on-the-go with Safesite Field. Log safety hazards instantly and automatically notify responsible parties for resolution. Progress is tracked and logged the entire way.</p>
      <button>try demo</button>
      </li>
    </ul>
    <nav class="orbit-bullets">
      <button class="is-active" data-slide="0"><span>Energy</span><span ></span></button>
      <button data-slide="1"><span >Mining</span><span ></span></button>
      <button data-slide="2"><span >Utilities</span><span ></span></button>
      <button data-slide="3"><span >Construction</span><span ></span></button>
    </nav>



  </div>
</div>
</section>

<?php get_footer();
