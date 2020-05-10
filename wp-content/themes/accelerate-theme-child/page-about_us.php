<?php
/*
Template Name: About Us
*/
/**
 * The template for displaying the homepage
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="home-page hero-content">
		<div class="main-content" role="main">
      <div class="hero-text">
			<?php while ( have_posts() ) : the_post(); ?>
      <?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
	</div><!-- #primary -->
</div>


<!--our services-->
<section>
<div class="about-us">
	<h2 class="site-content">Our Services</h2>
		<p class="service-description">We take pride in our clients and the content we create for them</br>
      Here's a brief overview of our offered services</p>

      <?php query_posts('post_type=services'); ?>

			<?php while ( have_posts() ) : the_post();
          $title = get_field("title");
          $description = get_field("description");
          $image_1 = get_field('image_1');
					$size = "thumbnail";
			?>

 </div>


<figure>
  <article>
			<div class="individual-service-descriptions">
        <div class="service-icon">
            <?php echo wp_get_attachment_image( $image_1, $size ); ?>
        </div>
        <div class="service-text">
            <h4><?php echo $title; ?></h4>
            <h5><?php echo $description; ?></h5>
        </div>
  </article>
</figure>
    <?php endwhile; ?>
    <?php wp_reset_query(); ?>
	</div>
</section>

<!-- Contact Us Button -->
	<section class="contact">
   <div class="left">
     <h4>Interested in working with us?</h4>
            <div class="contact-button">
            <a class="button" href="<?php echo site_url('/contact-us/') ?>">Contact Us</a>
 </div>
 </div>
</section>

<?php get_footer(); ?>
