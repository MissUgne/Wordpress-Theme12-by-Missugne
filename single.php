<?php get_header(); ?>
<div class="post_page">
		<?php
		while ( have_posts() ) :
			the_post();
			get_template_part( 'content-single', get_post_format() );			
		endwhile; 
		?>
</div>
	<div class="previous"><?php previous_post_link(); ?></div>
	<div class="next"><?php next_post_link(); ?></div>

<?php get_footer(); ?>