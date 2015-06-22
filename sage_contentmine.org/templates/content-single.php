<div class="col-xs-12 col-lg-8">
  <?php while (have_posts()) : the_post(); ?>
    <article <?php post_class(); ?>>
      <header>
        <h1 class="entry-title"><?php the_title(); ?></h1>
        <?php get_template_part('templates/entry-meta'); ?>
      </header>
      <div class="entry-content">
        <?php the_content(); ?>
      </div>

      <footer>
        <?php get_template_part('templates/shariff'); ?>
        <?php get_template_part('templates/printfriendly'); ?>
        <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
      </footer>
      <?php comments_template('/templates/comments.php'); ?>
    </article>
  <?php endwhile; ?>
  <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
</div> 

<div class="sidebar-single col-xs-12 col-sm-6 col-lg-4">
  <?php
    $post_objects = get_field('related_objects');

    if( $post_objects ): ?>
      <h3>Related</h3>
      <div>
        <ul>
          <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
            <?php setup_postdata($post); ?>
            <li>
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </li>
          <?php endforeach; ?>
        </ul>
        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
      </div>
    <?php endif;
  ?>

  <?php get_template_part('templates/sidebar', 'twitter'); ?>
</div>

