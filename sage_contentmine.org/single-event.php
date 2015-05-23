<?php
/*
 The template for displaying a single event
The template was taken from

 */
?>

<div class="container">
	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class(); ?>>
			<header class="row">
				<h1 class="entry-title"><?php the_title(); ?></h1>
				<div class="entry-meta eventorganiser-event-meta">
					<!-- Choose a different date format depending on whether we want to include time -->
					<?php if( eo_is_all_day() ){
						$date_format = 'j F Y'; 
					}else{
						$date_format = 'j F Y ' . get_option('time_format'); 
					} ?>
					<hr>

					<!-- Is event recurring or a single event -->
					<?php if( eo_reoccurs() ):?>
						<!-- Event reoccurs - is there a next occurrence? -->
						<?php $next =   eo_get_next_occurrence($date_format);?>

						<?php if($next): ?>
							<!-- If the event is occurring again in the future, display the date -->
							<?php printf('<p>'.__('This event is running from %1$s until %2$s. It is next occurring on %3$s','eventorganiser').'.</p>', eo_get_schedule_start('j F Y'), eo_get_schedule_last('j F Y'), $next);?>
					
						<?php else: ?>
							<!-- Otherwise the event has finished (no more occurrences) -->
							<?php printf('<p>'.__('This event finished on %s','eventorganiser').'.</p>', eo_get_schedule_last('d F Y',''));?>
						<?php endif; ?>
					<?php endif; ?>
				</div>

				<div class="eo-event-meta col-md-6">
					<!-- Event details -->
					<h4><?php _e('Event Details', 'eventorganiser') ;?></h4>
					<ul>
						<?php if( !eo_reoccurs() ){ ?>
							<!-- Single event -->
							<li><strong><?php _e('Start', 'eventorganiser') ;?>:</strong> <?php eo_the_start($date_format); ?> </li>
							<li><strong><?php _e('End', 'eventorganiser') ;?>:</strong> <?php echo eo_get_the_end($date_format); ?> </li>
							<?php
						 } ?>

						 <!-- print event location -->
						<?php if( eo_get_venue() ){ 
							$tax = get_taxonomy( 'event-venue' );
							$venue = eo_get_venue_address(); ?>
							<li><strong><?php echo esc_html( $tax->labels->singular_name ) ?>:</strong> <a href="<?php eo_venue_link(); ?>"><?php echo eo_venue_name(); ?></a>
							<?php 
								// if city is filled in, print it out
								if (!empty($venue['city'])) {
								echo ', ' . $venue['city']; ?>
							<?php } 
						} ?>

						<!-- print event type -->
						<?php if( get_the_terms(get_the_ID(),'event-category') ){ ?>
							<li><strong><?php _e('Event-Type','eventorganiser'); ?>:</strong> <?php echo get_the_term_list( get_the_ID(),'event-category', '', ', ', '' ); ?></li>
						<?php } ?>

						<!-- GitHub -->
						<?php 
							$github = get_post_meta($post->ID, 'ev_github_repo', single); 
							if ($github) { ?>
								<li><strong>GitHub:</strong> <?php echo 'In the <a href="' . $github . '" title="GitHub">GitHub repository</a> you get more information about the workshop.'; ?></li>
							<?php }
						?>

						<!-- registration -->
						<?php 
							$eventbrite = get_post_meta($post->ID, 'ev_eventbrite_event', single); 
							if ($eventbrite) { ?>
								<li><strong>Registration:</strong> <?php echo '<a href="' . $eventbrite . '" title="Eventbrite">Eventbrite</a>'; ?></li>
							<?php }
						?>

						<!-- etherpad -->
						<?php 
							$etherpad = get_post_meta($post->ID, 'ev_etherpad', single); 
							if ($etherpad) { ?>
								<li><strong>Etherpad:</strong> <?php echo 'On the workshop and also be<a href="' . $eventbrite . '" title="Eventbrite">Eventbrite</a>'; ?></li>
							<?php }
						?>

						<!-- documentation -->
						<?php 
							$postBefore = get_post_meta($post->ID, 'ev_invitation_post', single); 
							$docurls = get_post_meta($post->ID, 'ev_docurls', single); 
							$postAfter = get_post_meta($post->ID, 'ev_documentation_post', single); 
							if ($postBefore) { ?>
								<li><strong>Invitation:</strong> <?php echo '<a href="' . $postBefore . '" title="Eventbrite">Invitation Post</a>'; ?></li>
							<?php }
							if ($docurls) { ?>
								<li><strong>Documentation:</strong> <?php echo '<a href="' . $docurls . '" title="Documentation Page">Documentation</a>'; ?></li>
							<?php }
							if ($postAfter) { ?>
								<li><strong>Post Documentation:</strong> <?php echo '<a href="' . $postAfter . '" title="Post Documentation">Post Documentation</a>'; ?></li>
							<?php }
						?>

						<?php if( eo_reoccurs() ){ 			
							//Event reoccurs - display dates. 
							$upcoming = new WP_Query(array(
								'post_type'=>'event',
								'event_start_after' => 'today',
								'posts_per_page' => -1,
								'event_series' => get_the_ID(),
								'group_events_by'=>'occurrence'//Don't group by series
							));
					
							if( $upcoming->have_posts() ): ?>
								<li><strong><?php _e('Upcoming Dates','eventorganiser'); ?>:</strong>
									<ul id="eo-upcoming-dates">
										<?php while( $upcoming->have_posts() ): $upcoming->the_post(); ?>
											<li> <?php eo_the_start($date_format) ?></li>
										<?php endwhile; ?>
									</ul>
								</li>
								<?php 
									wp_reset_postdata(); 
									//With the ID 'eo-upcoming-dates', JS will hide all but the next 5 dates, with options to show more.
									wp_enqueue_script('eo_front');
							 endif;
							} ?>
					</ul>
					<div class="entry-content">
					<h4>Description</h4>
						<?php the_content(); ?>
					</div>
				</div>


				<!-- Does the event have a venue? -->
				<?php 
					$mapsmarker = get_post_meta($post->ID, 'ev_maps_marker_shortcode', single);
					if( eo_get_venue() or  $mapsmarker) { ?>
						<!-- Display map -->
						<div class="eo-event-venue-map col-md-6">
							<?php 
							$mapsmarker = get_post_meta($post->ID, 'ev_maps_marker_shortcode', single);
							if($mapsmarker){
								$mapsmarker = substr($mapsmarker, 0, -1) . '' . ']';
								echo do_shortcode($mapsmarker);
							}else{
								echo eo_get_venue_map(eo_get_venue(),array('width'=>'100%'));
							} ?>
						</div>
					<?php } ?>
			</header>
			<div class="event-footer row">
				<?php get_template_part('templates/shariff'); ?>
				<?php get_template_part('templates/printfriendly'); ?>
			</div>
			<?php get_template_part('templates/comments'); ?>
		</article>
	<?php endwhile; ?>
</div>

