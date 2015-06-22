<div class="container">
	<div class="col-xs-12  col-lg-8 entry-content">
		<?php the_content(); ?>

		<footer>
			<?php get_template_part('templates/shariff'); ?>
			<?php get_template_part('templates/printfriendly'); ?>
		</footer>

		<?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
	</div>

	<div class="sidebar-page col-xs-12 col-sm-6 col-lg-4">
		<?php
		if (is_page()) {
		    $children = wp_list_pages( array(
		        'child_of' => get_the_ID(), // Only pages that are children of the current page
		        'depth' => 1 ,   // Only show one level of hierarchy
		        'sort_order' => 'asc',
		        'title_li' => '',
		        'echo' => '0',
		        'post_status'  => 'publish' 
		    )); 
		    if($children) { ?>
		        <div class="sidebar-children">
		        <h3>Pages</h3>
		            <ul><?php echo $children; ?></ul>
		        </div>
		    <?php } 
		} ?>
		<?php get_template_part('templates/sidebar', 'twitter'); ?>
	</div>
	
</div>
