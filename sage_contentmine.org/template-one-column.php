<?php
/**
 * Template Name: One Column
 */
?>

<div class="container">
	<div class="col-xs-12">
	  <?php while (have_posts()) : the_post(); ?>
	    <article <?php post_class(); ?>>
	      <div class="entry-content">
	        <?php the_content(); ?>
	      </div>

	      <footer>
	        <?php get_template_part('templates/shariff'); ?>
	        <?php get_template_part('templates/printfriendly'); ?>
	      </footer>
	    </article>
	  <?php endwhile; ?>
	  <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
	</div> 
</div>


