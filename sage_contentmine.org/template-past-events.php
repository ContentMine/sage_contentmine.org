<?php
/*
Template Name: Past Events
*/
?>

<div class="container">
	<?php 

	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	$posts_per_page = 10;
	$myQuery_PastEvents= new WP_Query( array( 'post_type' => 'event', 'posts_per_page' => $posts_per_page, 'event_end_before'=>'today', 'orderby' => 'eventstart', 'order' => 'DESC', 'paged' => $paged) );
	$num_posts = $myQuery_PastEvents->found_posts; 
	$last_page = $myQuery_PastEvents->max_num_pages;
	if ( $myQuery_PastEvents->have_posts() ) : while ( $myQuery_PastEvents->have_posts() ) : $myQuery_PastEvents->the_post(); {
			get_template_part('templates/content-preview', 'event');
	   	} endwhile; // end of the loop. 
	endif;
	if ($last_page > 1) :  ?>
		<nav class="post-nav">
			<?php 
			if ($paged > 1 ) {
				      echo get_previous_posts_link( '<button class="nav-previous alignleft btn btn-default">Newer Events</button>' ); // display newer posts link
			}
			
			if($paged < $last_page) {
				echo get_next_posts_link( '<button class="nav-next alignright btn btn-default">Older Events</button>', $myQuery_PastEvents->max_num_pages ); // display older posts link
			} ?>
		</nav>
	<?php endif;
	get_template_part('templates/shariff');
	get_template_part('templates/printfriendly'); 
	wp_reset_postdata();
	?>	
</div>