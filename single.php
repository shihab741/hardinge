<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Hardinge
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">


<div id="hardinge-single">
  <div class="container">

  <div class="row">
  	<div class="col-md-8">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content-single', get_post_type() );

			//the_post_navigation(); ?>

<div class="hardinge-single-page-nav">
	<div class="hardinge-single-page-nav-prev">
		<?php previous_post_link(); ?> 
	</div>
	<div class="hardinge-single-page-nav-next">
		 <?php next_post_link(); ?>
	</div>
</div>

  


<?php
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</div>

		<div class="col-md-4 well">
			<?php get_sidebar(); ?>
		</div>

		</div></div></div>
		</main><!-- #main -->
	</div><!-- #primary -->



<?php

get_footer();
