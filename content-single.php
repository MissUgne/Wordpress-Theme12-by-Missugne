<div class="container">
	<div class="post_image">
		<?php the_post_thumbnail('post-thumbnail'); ?>
	</div>

	<div class="post_title">
		<?php the_title(); ?>
	</div>
</div>

<div class="post_text">
	<?php the_content(); ?>
</div>