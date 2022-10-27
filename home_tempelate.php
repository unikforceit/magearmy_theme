<?php /* Template Name: Home Templete */ ?>

<?php get_header(); ?>
<!-- <div class="hero-banner">
	<img src="<?php echo get_template_directory_uri();?>/images/template_photo_3.jpg">
</div> -->
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
	the_content();
	endwhile; else: ?>
		<p>Sorry, no posts matched your criteria.</p>
	<?php endif; ?>



<?php get_footer(); ?>