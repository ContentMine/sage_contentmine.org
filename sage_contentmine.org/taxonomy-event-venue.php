<?php
/*
Template for the event categories venues.
*/

?>  

<?php get_template_part('templates/page', 'header'); ?>

<div class="container">

	<?php if (!have_posts()) : ?>
	  <div class="alert alert-warning">
	    <?php _e('Sorry, no results were found.', 'sage'); ?>
	  </div>
	  <?php get_search_form(); ?>
	<?php endif; ?>

	<?php while (have_posts()) : the_post(); ?>
		<div class="preview-event">
	  		<?php get_template_part('templates/content', 'preview'); ?>
		</div>
	<?php endwhile; ?>

	<?php the_posts_navigation(); ?>
</div>

