<?php get_header(); ?>
	<div class="main_content">
		<?php 
		if ( have_posts() ) { 
			while ( have_posts() ) {
				the_post();
				get_template_part( 'content' ); 
		} else {
			get_template_part( 'content-none' );
		}
		endwhile; 
		endif;
		?>		
	</div>
<?php get_footer(); ?>

