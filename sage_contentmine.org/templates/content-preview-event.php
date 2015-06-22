<div class="preview-event col-md-12">
     <div class="thumbnail col-xs-12 col-md-4">
     	<?php get_template_part('templates/thumbnail'); ?>
     </div>
     <div class="preview-event-content col-md-8">
        <h3 class="entry-title col-xs-12"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
        <?php $post->post_excerpt = substr($post->post_excerpt, 0, 200);
        $date_format = get_option('date_format');
        $time_format = get_option('time_format');
        $format = $date_format; 
        ?>
		<div class="event-meta">
			<div class="event-date col-xs-12 col-md-4"><i class="fa fa-calendar"></i><?php echo eo_get_the_start($format); ?></div>
			<div class="event-venue col-xs-12 col-md-4"><i class="fa-map-marker fa"></i>
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
			<div class="event-type col-xs-12 col-md-4"><i class="fa-info fa"></i><?php echo get_the_term_list( get_the_ID(),'event-category', '', ', ', '' ); ?></div>
        </div>
	         	
        <div class="preview-event-excerpt col-xs-12">
        	<?php echo $post->post_excerpt; ?>
        </div>
     </div>
</div>
