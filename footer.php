<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Hardinge
 */

?>

	</div><!-- #content -->


	<footer id="colophon" class="site-footer">
		<div class="site-info">
			
			<div id="footer">
			  <div class="container text-center">
			    <div class="social">
			      <ul>
			        <li><a href="<?php echo get_theme_mod('footer_facebook', '#'); ?>"><i class="fa fa-facebook"></i></a></li>
			        <li><a href="<?php echo get_theme_mod('footer_twitter', '#'); ?>"><i class="fa fa-twitter"></i></a></li>
			        <li><a href="<?php echo get_theme_mod('footer_google_plus', '#'); ?>"><i class="fa fa-google-plus"></i></a></li>
			        <li><a href="<?php echo get_theme_mod('footer_pinterest', '#'); ?>"><i class="fa fa-pinterest"></i></a></li>
			        <li><a href="<?php echo get_theme_mod('footer_youtube', '#'); ?>"><i class="fa fa-youtube"></i></a></li>
			      </ul>
			    </div>
			    <div class="hardinge-footer">

			    	<?php
			    	if(has_nav_menu('footer_menu')){
					  wp_nav_menu( array(
					      'theme_location' => 'footer_menu',
					      'container_class'   => 'footer_menu'
					    )
					  );
					}
					?>
			      <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. Hardinge theme for WordPress developed by: <a href="http://shihab.fromreadingtable.com" target="_blank" title="Click here to visit Shihab's personal site"> Shihab Ahmed</a> </p>
			    </div>
			  </div>
			</div>
			<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/template-assets/js/jquery.1.11.1.js"></script> 
			<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/template-assets/js/bootstrap.js"></script> 
			<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/template-assets/js/SmoothScroll.js"></script> 
			<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/template-assets/js/nivo-lightbox.js"></script> 
			<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/template-assets/js/jquery.isotope.js"></script> 
			<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/template-assets/js/jqBootstrapValidation.js"></script> 
			<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/template-assets/js/contact_me.js"></script> 
			<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/template-assets/js/main.js"></script>


		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
