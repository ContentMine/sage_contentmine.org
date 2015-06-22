<?php if ( has_post_thumbnail() ) { ?>
	<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail', array( 'class' => 'aligncenter' )); ?></a>
<?php } else {  ?>
	<a href="<?php the_permalink(); ?>"><img src="<?php bloginfo( 'template_directory');?>/assets/images/thumb.png" class="aligncenter"></a>
<?php } ?>
