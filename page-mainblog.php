<?php /* Template Name: Blog */ ?>

<?php get_header(); ?>
<div class="">
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'content' );
			
		endwhile;
		?>
</div>
<?php get_footer(); ?>