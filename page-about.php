<?php /* Template Name: Two Column */ ?>

<?php get_header(); ?>
<section class="about">
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'content-about' );
			
		endwhile;
		?>
</section>
<?php get_footer(); ?>

	

		