<?php
/*
Template Name: Events
*/
?>

<div class="container">
	<div class="future-events col-xs-12">
		<h2>Coming Events</h2>
		
		<?php
		    $myQuery_FutureEvents = new WP_Query( array( 'post_type' => 'event', 'posts_per_page' => -1, 'event_start_after'=>'today') );
		    if ($myQuery_FutureEvents->found_posts == 0 ) { ?>
		    	<strong>There are no planned events right now.</strong>
		    	<?php get_template_part('templates/subscribe-events'); ?>
		    <?php } else {
		        if ( $myQuery_FutureEvents->have_posts() ) : while ( $myQuery_FutureEvents->have_posts() ) : $myQuery_FutureEvents->the_post(); {
		        		get_template_part('templates/content-preview', 'event');
		    		} endwhile; // end of the loop. 
		    	endif;
		    }
			wp_reset_postdata();
		?>
	</div>
	<div class="col-xs-12">
		<h2>Calendar</h2>
		<?php echo do_shortcode( '[eo_fullcalendar headerCenter:"title"]' ); ?>	
		<p><?php echo get_post_meta($post->ID, 'cal_description', single); ?></p>
	</div>
	<div class="past-events col-xs-12">
		<h2>Past Events</h2>
		<?php 
			$myQuery_PastEvents = new WP_Query( array( 'post_type' => 'event', 'posts_per_page' => 5, 'event_end_before'=>'today', 'showpastevents'=>True, 'orderby'=>'eventstart', 'order'=>'DESC' ) );
			if ( $myQuery_PastEvents->have_posts() ) : while ( $myQuery_PastEvents->have_posts() ) : $myQuery_PastEvents->the_post(); {
		    		get_template_part('templates/content-preview', 'event');
		    	} endwhile; // end of the loop.
			endif;
		wp_reset_postdata(); 
		?>	
		<a href="past-events" class="more-past-events btn btn-default col-xs-12 btn-lg" title="More Past Events Veranstaltungen">More Past Events</a>
	</div>
	<div class="event-map col-xs-12">
		<?php echo do_shortcode( '[mapsmarker layer="1"]' ); ?>
	</div>
	<?php get_template_part('templates/shariff'); ?>
	<?php get_template_part('templates/printfriendly'); ?>
</div>

