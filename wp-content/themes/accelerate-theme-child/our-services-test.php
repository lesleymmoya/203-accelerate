<?php
/*
Template Name: Our Services
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
			<?php while ( have_posts() ) : the_post();
  $hero_image_text = get_field("hero_image_text");
?>
<?php echo $hero_image_text; ?>
      <?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
	</div><!-- #primary -->

<!--FEATURED WORK-->
<section class="our-services">
	<div class="site-content">

		<div class="our-services-descriptions">
			<!-- the loop -->

			<?php while ( have_posts() ) : the_post();
          $our_services = get_field("our_services");
          $content_strategy = get_field("content_strategy");
          $influencer_mapping = get_field("influencer_mapping");
          $social_media_strategy = get_field("social_media_strategy");
          $design_and_development = get_field("design_and_development");
          $image_1 = get_field('image_1');
          $image_2 = get_field('image_2');
          $image_3 = get_field('image_3');
          $image_4 = get_field('image_4');
					$size = "thumbnail";
			?>
<?php the_content(); ?>

      <div class= "our-services">
        <h2>Our Services: <?php echo $our_services; ?></h2>
</div>
			<div class="individual-service-descriptions">
          <h4>Content Strategy: <?php echo $content_strategy; ?></h4>
          <h4>Influencer Mapping: <?php echo $influencer_mapping; ?></h4>
          <h4>Social Media Strategy: <?php echo $social_media_strategy; ?></h4>
          <h4>Design and Development: <?php echo $design_and_development; ?></h4>
      </div>
      <figure>
          <div class="our-services-images">
            <?php if($image_1) {
              echo wp_get_attachment_image( $image_1, $size );
            } ?>
            <?php if($image_2) {
              echo wp_get_attachment_image( $image_2, $size );
            } ?>
            <?php if($image_3) {
              echo wp_get_attachment_image( $image_3, $size );
            } ?>
            <?php if($image_4) {
              echo wp_get_attachment_image( $image_4, $size );
            } ?>
            </div>
				</figure>

		 <?php endwhile; ?>
	 	<?php wp_reset_query(); ?>
  </div>

</section>

<!-- Contact Us Button -->
	<section class="contact">
   <div class="left">
     <h4>Interested in working with us?</h4>

				<?php while ( have_posts() ) : the_post(); ?>
	         <?php the_content(); ?>
            			<div class="contact-button">
            <a class="button" href="<?php echo site_url('/contact-us/') ?>">Contact Us</a>
				<?php endwhile; ?>
   <?php wp_reset_query(); ?>
 </div>
 </div>
</section>

<?php get_footer(); ?>
