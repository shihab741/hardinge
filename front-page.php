<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Hardinge
 */

get_header();
?>

<!-- Header -->
<header id="header">
  
  	
  <div class="intro">
  <div style="background: url( <?php echo get_theme_mod('banner_image', get_bloginfo('template_url').'/template-assets/img/intro-bg.jpg'); ?>) no-repeat center bottom;">

    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="intro-text">
            <h1><?php echo get_theme_mod('banner_heading', 'Hardinge theme for WordPress'); ?></h1>
            <p><?php echo get_theme_mod('banner_text', 'Developed by Shihab Ahmed'); ?></p>
            <a href="<?php echo get_theme_mod('btn_url', '#'); ?>" class="btn btn-custom btn-lg page-scroll"><?php echo get_theme_mod('btn_text', 'Read more'); ?></a> </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</header>
<!-- About Section -->
<div id="about">
  <div class="container">
    <div class="section-title text-center center">
      <h2><?php echo get_theme_mod('about_heading', 'About us'); ?></h2>
      <hr>
    </div>
    <div class="row">
      <div class="col-xs-12 col-md-6 text-center"> <img src="<?php echo get_theme_mod('about_image', get_bloginfo('template_url').'/template-assets/img/about.jpg'); ?>" class="img-responsive" alt=""> </div>


      <div class="col-xs-12 col-md-6">
        <div class="about-text">
      <?php if(is_active_sidebar('about_us_text')) : ?>
        <?php dynamic_sidebar('about_us_text'); ?>
      <?php else : ?>
          <h3>About the bridge</h3>
          <p>Hardinge Bridge is a steel railway bridge made up of prefabricated trusses and named after Lord hardinge, the Viceroy of India (1910-1916). The bridge crosses the lower ganges at Sara between Paksey and Bheramara stations on the broad gauge railway from khulna to parbatipur.</p>
          <p>The construction of the Hardinge Bridge was proposed and discussed for more than twenty years before it was finally sanctioned for construction in 1908. Proposals put forward by the then eastern bengal railway in 1889, were investigated by a committee and reported to be feasible. In 1902, Sir FJE Spring prepared a detailed project on the bridge.</p>
      <?php endif; ?>
      </div></div>
    </div>
  </div>
</div>
<!-- Services Section -->
<div id="services">
  <div class="container">
    <div class="col-md-10 col-md-offset-1 section-title text-center">
      <h2>Latest</h2>
    </div>
    <div class="row">

<?php query_posts('posts_per_page=3');
if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <div class="col-xs-12 col-sm-4 service"> 



  <?php if(has_post_thumbnail()) : ?>
    <?php hardinge_post_thumbnail(); ?>
  <?php else : ?> 
    <a href="<?php echo get_permalink(); ?>"><img src="<?php bloginfo('template_url'); ?>/template-assets/img/thumbnail-default.jpg" class="img-responsive" alt="Project Title"></a>
  <?php endif; ?> 


        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
       <p><?php the_excerpt(); ?></p>
      </div>



<?php endwhile; ?>
<?php wp_reset_query(); ?>

    </div>
  </div>
</div>





<?php
//get_sidebar();
get_footer();
