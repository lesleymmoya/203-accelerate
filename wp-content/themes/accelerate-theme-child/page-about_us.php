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
			<?php while ( have_posts() ) : the_post();
  $hero_image_text = get_field("hero_image_text");
?>
<h2><?php echo $hero_image_text; ?></h2>
      <?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
	</div><!-- #primary -->
</div>

<!--our services-->
<section class="about-us">
	<div class="site-content">

		<div class="service-description">
			<!-- the loop -->

			<?php while ( have_posts() ) : the_post();
          $title = get_field("title");
          $description = get_field("description");
          $contact_text = get_field("contact_text");
          $image_1 = get_field('image_1');
					$size = "thumbnail";
			?>
      <?php the_content(); ?>
   </div>
 </div>

 <div class= "our-services">
   <h2>Our Services <?php echo $title; ?></h2>
   <h3><?php echo $description; ?></h3>
 </div>

<figure>
  <article>
			<div class="individual-service-descriptions">
        <div class="content-strategy-icon">
            <?php if($image_1) {
            echo wp_get_attachment_image( $image_1, $size );
            } ?>
        </div>
        <div class="content-strategy-text">
            <h4>Content Strategy <?php echo $title; ?></h4>
            <h5><?php echo $description; ?></h5>
        </div>

        <div class="influencer-mapping-text">
            <h4>Influencer Mapping <?php echo $title; ?></h4>
       </div>
          <div class="influencer-mapping-icon" >
            <?php if($image_1) {
              echo wp_get_attachment_image( $image_1, $size );
            } ?>
        </div>

          <div class="social-media-strategy-icon">
            <?php if($image_1) {
              echo wp_get_attachment_image( $image_1, $size );
            } ?>
        </div>
          <div class="social-media-strategy-text">
            <h4>Social Media Strategy <?php echo $title; ?></h4>
        </div>

          <div class="design-and-development-text">
          <h4>Design and Development <?php echo $title; ?></h4>
        </div>
        <div class="design-and-development-icon">
          <?php if($image_1) {
            echo wp_get_attachment_image( $image_1, $size );
          } ?>
      </div>
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
