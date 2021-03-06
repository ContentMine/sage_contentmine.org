<div class="container">

	<?php if (!have_posts()) : ?>
	  <div class="alert alert-warning">
	    <?php _e('Sorry, no results were found.', 'sage'); ?>
	  </div>
	  <?php get_search_form(); ?>
	<?php endif; ?>

	<?php while (have_posts()) : the_post(); ?>
	  <?php get_template_part('templates/content', 'preview'); ?>
	<?php endwhile; ?>

	<div class="btn btn-default nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div><div class="btn btn-default nav-next alignright"><?php previous_posts_link( 'Newer Posts' ); ?></div>
</div>
