<div class="row post-preview">
	<article <?php post_class(); ?>>
		<div class="col-xs-12 col-md-4 box-thumbnail">
			<div class="thumbnail">
				<?php get_template_part('templates/thumbnail'); ?>
			</div>
		</div>
	    <header class="entry-content col-md-8 col-xs-12">
			<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	    	<?php the_excerpt(); ?>
	    </header>
	</article>
</div>
