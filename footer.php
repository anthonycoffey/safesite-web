<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
?>

<div class="footer-container">
<!-- 	<div class="pre-footer">
		<div class="info">
			<p>Discover why Safesite is the world’s fastest growing </br>safety software via our free one-on-one product demo.</p>
		</div>
		<button class="button">Request a Demo</button>
	</div> -->
	<footer class="footer-nav">
		<div class="icon-logo"><img id="" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/demo/safesite-icon-01.svg" alt=" "></div>
		<div class="contact">
			<p>Contact</p>
			<p>+1 888-363-2831 
			info@safesitehq.com <br class="break" /> 1370 Harrison Street, San Francisco, CA 94103</p>
			<span class="icon-social-twitter">

			</span>
			<span class="icon-social-facebook">

			</span>
			<span class="icon-social-linkedin">

			</span>
		</div>

		<div class="footer-menu">
			<h2>Discover why Safesite is the world’s fastest growing  safety software via our free one-on-one product demo.</h2>
			  <button class="button">Request a Demo</button>
		</div>
	</footer>

</div> 
<div class="post-footer"></div>
<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
	</div><!-- Close off-canvas content -->
<?php endif; ?>

<?php wp_footer(); ?>

</body>
</html>   
