<?php get_header(); ?>
<div class="post_page">
		<?php
		while ( have_posts() ) :
			the_post();
			get_template_part( 'content-page', get_post_format() );	
		endwhile;
		?>
<div>
<?php get_footer(); ?>
