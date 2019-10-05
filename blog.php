<?php /* Template Name: Blog */ ?>

<?php get_header(); ?>
<div class="main_blog">
<?php $the_query = new WP_Query( array('posts_per_page' => 1000,)); ?>
		
	<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

<div class="column">
<div class="blog_image"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('full', 'style=width:100%;height:auto'); ?></a>
</div>
<div class="title"><?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
</div>
<div class="column_text"><p> <?php the_excerpt(); ?></p>
</div>
</div>

 <?php endwhile; ?>
   <?php wp_reset_postdata(); ?>

 <?php else : ?>
   <p><?php __('No News'); ?></p>
 <?php endif; ?>
</div>
 <?php get_footer(); ?>
 
  