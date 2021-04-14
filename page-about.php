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
<section class="home-page">
	<div id="about-content">
		<h3 class="about-header">Accelerate is a strategy and marketing agency located in the heart of NYC. Our goal is to build businesses by making our clients visible and making their customers smile.</h3>
	</div>
</section><!-- #primary -->

<!-- OUR SERVICES -->
<section class="our-services">
	<div class="services-header">
		<h4 class="services-header">OUR SERVICES</h4>
			<p class="services-tagline">We take pride in our clients and the content we create for them. Here’s a brief overview of our offered services.</p>
	</div>
</section>

<section class="individual-services">
		<?php query_posts('posts_per_page=4&post_type=our_services'); ?>
			<?php while ( have_posts() ): the_post();
				$image = get_field('image');
				$size = 'medium';
				$description = get_field('description');
			?>
	
	<article class="individual-service">
		<figure class="our-services-images">
			<?php if($image) { ?> <img src="<?php echo $image; ?>" /> 			<?php } ?>
		</figure>
		
				<aside class="about-sidebar">
					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<h6><?php the_content(); ?></h6>
					<p><?php echo $description; ?></p>
				</aside>
		</article>
			<?php endwhile; //end of the loop ?>
			<?php wp_reset_query(); //resets the altered query back to the original ?>
    
</section>

<section>
    <div class="interested">
	  <div class="get-interested">
      	<span class="line"></span>
      </div>
			<div id="interested">
      	  	  <h4>Interested in working with us?</h4>
	  		</div>
			<div id="interested-button">
		  	  <a class="button" href="<?php echo site_url('/contact/') ?>">Contact Us</a>
	  		</div>
	</div>
</section>

<?php get_footer(); ?>
