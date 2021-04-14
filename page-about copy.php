<?php
/*
 * Template Name: About Page
 *
 * Default 'About Page' template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>
<div id="primary" class="home-page hero-content">
	<div class="main-content" role="main">
		<h3 class="about-header">
		      Accelerate is a strategy and marketing agency located in the heart of NYC. Our goal is to build businesses by making our clients visible and making their customers smile.
		</h3>
	</div>
</div>
<!-- OUR SERVICES -->
<section class="our-services">
	<div class="site-content clearfix">
		<h4 class="services-header">OUR SERVICES</h4>
			<p class="services-tagline">We take pride in our clients and the content we create for them. Here’s a brief overview of our offered services.</p>
	  </div>
</section>
<section class="individual-services">
	<div class="site-content">
		<ul>
			<?php query_posts('posts_per_page=4&post_type=our_services'); ?>
			<?php while (have_posts() ): the_post();
				$image = get_field('image');
				$size = 'medium';
				$description = get_field('description');
			?>
				<div class="full-width">
					<figure class="our-services-images">
						<?php if($image) { ?> <img src="<?php echo $image; ?>" /> <?php } ?>
					</figure>
					<h3 class="individual-service"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<p><?php echo $description; ?></p>
				</div>
			<?php endwhile; ?>
		<?php wp_reset_query(); ?>
	</ul>
  </div>
</section>
<section>
  <div class="interested">
    <div>
      <span class="line"></span>
    </div>
		<div id="interested">
      <h4>Interested in working with us?</h4>
	  </div>
		<div id="interested-button">
		  <a class="button" href="<?php echo site_url('/contact/') ?>">Contact Us</a>
	  </div>
</section>

<?php get_footer(); ?>
