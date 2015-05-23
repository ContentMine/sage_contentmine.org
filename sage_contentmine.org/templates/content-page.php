<?php the_content(); ?>
<footer>
	<?php get_template_part('templates/shariff'); ?>
	<?php get_template_part('templates/printfriendly'); ?>
</footer>
<?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
