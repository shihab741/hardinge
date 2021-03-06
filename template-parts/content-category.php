<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Hardinge
 */

?>
<div class="hardinge-category-items">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>



	<div class="category-thumb">
		<?php if(has_post_thumbnail()) : ?>
			<a href="<?php echo get_permalink(); ?>"><?php //hardinge_post_thumbnail(); 
					the_post_thumbnail('medium');
			?></a>
		<?php else : ?>	
			<a href="<?php echo get_permalink(); ?>"><img src="<?php bloginfo('template_url'); ?>/template-assets/img/thumbnail-default.jpg"></a>
		<?php endif; ?>		
		</div>	

		<header class="entry-header">
			<?php
			if ( is_singular() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<h2><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;

			//if ( 'post' === get_post_type() ) :
				?>

			<?php //endif; ?>
		
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php the_excerpt(); ?>
			<?php
			 
			?>
		</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php //hardinge_entry_footer(); ?>
	</footer><!-- .entry-footer -->

</article><!-- #post-<?php the_ID(); ?> -->
</div>