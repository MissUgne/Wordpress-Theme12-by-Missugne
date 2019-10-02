<?php get_header(); 
/*
Template Name: Front Page
*/
?>

<section id="main_page">
	<article class="intro_text">
		<h1><?php echo get_bloginfo( 'name' ); ?></h1>
		<h3><?php echo get_bloginfo( 'description' ); ?></h3>
	</article>
</section>
			
<section class="facts">	
	<?php get_template_part( 'facts' ); ?>
</section>
			
<section id="blog" class="row">
	<?php get_template_part( 'frontblog' ); ?>
</section>
		
<section class="banner">
	<?php get_template_part( 'banner' ); ?>
</section>

<?php get_footer(); ?>