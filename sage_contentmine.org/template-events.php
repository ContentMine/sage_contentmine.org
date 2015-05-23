<?php
/*
Template Name: Events
*/
?>

<?php get_template_part('templates/page', 'header'); ?>

<div class="entry-content container">
	<?php echo do_shortcode( '[eo_fullcalendar]' ); ?>
	<div>
		<p><?php echo get_post_meta($post->ID, 'cal_description', single); ?></p>
		<p>Subscribe to Events via <?php echo do_shortcode( '[eo_subscribe class="button" title="Subscribe via ical" type="ical"]iCal[/eo_subscribe], [eo_subscribe class="button" title="Subscribe via Google" type="google"]Google[/eo_subscribe] and [eo_subscribe class="button" title="Subscribe via WebCal" type="webcal"]Webcal[/eo_subscribe]' ); ?></p>
	</div>
	<div class="future-events row">
		<h2>Coming Events</h2>
		<?php
		    $myQuery_FutureEvents= new WP_Query( array( 'post_type' => 'event', 'posts_per_page' => -1, 'event_start_after'=>'today') );
		    if ( $myQuery_FutureEvents->have_posts() ) : while ( $myQuery_FutureEvents->have_posts() ) : $myQuery_FutureEvents->the_post(); { ?>
					<div class="preview-event">
					     <div class="thumbnail col-md-4">
					          <?php if ( has_post_thumbnail() ) { ?>
					               <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
					          <?php }; ?> 
					     </div>
					     <div class="preview-content col-md-8">
					        <h3 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
					        <?php $post->post_excerpt = substr($post->post_excerpt, 0, 200);
					        $date_format = get_option('date_format');
					        $time_format = get_option('time_format');
					        $format = $date_format; 
					        ?>
							<div class="row">
								<div class="event-date col-md-4"><i class="fa fa-calendar"></i><?php echo eo_get_the_start($format); ?></div>
								<div class="event-venue col-md-4"><i class="fa-map-marker fa"></i>
									<?php 
										// print event location
										if( eo_get_venue() ){ 
											$tax = get_taxonomy( 'event-venue' );
											$venue = eo_get_venue_address(); ?>
											<a href="<?php eo_venue_link(); ?>"><?php echo eo_venue_name(); ?></a> <?php
											// if city is filled in, print it out
											if (!empty($venue['city'])) {
												echo ', ' . $venue['city'];
											} 
										} 
									?>
								</div>
								<div class="event-type col-md-4"><i class="fa-info fa"></i><?php echo get_the_term_list( get_the_ID(),'event-category', '', ', ', '' ); ?></div>
					        </div>
						         	
					        <div class="preview-event">
					        	<?php echo $post->post_excerpt; ?>
					        </div>
					     </div>
					</div>
				<?php } endwhile; // end of the loop. 
			endif;
			wp_reset_postdata();
		?>
	</div>
	<div class="past-events row">
		<h2>Past Events</h2>
		<?php 
			$myQuery_PastEvents= new WP_Query( array( 'post_type' => 'event', 'posts_per_page' => -1, 'event_end_before'=>'today', 'showpastevents'=> True) );
			    if ( $myQuery_PastEvents->have_posts() ) : while ( $myQuery_PastEvents->have_posts() ) : $myQuery_PastEvents->the_post(); { ?>
					<div class="preview-event">
					     <div class="thumbnail col-md-4">
					          <?php if ( has_post_thumbnail() ) { ?>
					               <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
					          <?php }; ?> 
					     </div>
					     <div class="preview-content col-md-8">
					        <h3 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
					        <?php $post->post_excerpt = substr($post->post_excerpt, 0, 200);
					        $date_format = get_option('date_format');
					        $time_format = get_option('time_format');
					        $format = $date_format; 
					        ?>
							<div class="row">
								<div class="event-date col-md-4"><i class="fa fa-calendar"></i><?php echo eo_get_the_start($format); ?></div>
								<div class="event-venue col-md-4"><i class="fa-map-marker fa"></i>
									<?php 
										// print event location
										if( eo_get_venue() ){ 
											$tax = get_taxonomy( 'event-venue' );
											$venue = eo_get_venue_address(); ?>
											<a href="<?php eo_venue_link(); ?>"><?php echo eo_venue_name(); ?></a> <?php
											// if city is filled in, print it out
											if (!empty($venue['city'])) {
												echo ', ' . $venue['city'];
											} 
										} 
									?>
								</div>
								<div class="event-type col-md-4"><i class="fa-info fa"></i><?php echo get_the_term_list( get_the_ID(),'event-category', '', ', ', '' ); ?></div>
					        </div>
						         	
					        <div class="preview-event">
					        	<?php echo $post->post_excerpt; ?>
					        </div>
					     </div>
					</div>
					<?php } endwhile; // end of the loop. 
				endif;
			wp_reset_postdata(); 
		?>	
	</div>
	<?php get_template_part('templates/shariff'); ?>
	<?php get_template_part('templates/printfriendly'); ?>
</div>

