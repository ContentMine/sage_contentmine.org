<?php
/*
 Template Name: Landing Page
 Template for the Landing page
*/
?>

<!-- JUMBOTRON -->
  
<div class="home-jumbotron container">
  <div class="col-xs-12 jumbotron-content text-center">
    <h2>The right to read is the right to mine!</h2>
    <div class="image-brand text-center">
      <img src="<?php bloginfo( 'template_directory');?>/assets/images/content-mine-502x502.png" >
    </div>
    <h3>The <span class="typo-brand">ContentMine</span> uses machines to liberate 100 000 000 facts from the scientific literature.</h3>
  </div>
  <div class="text-center col-xs-12">
    <a href="<?php echo home_url(); ?>/about-us" title="about us" class="btn btn-primary btn-lg text-center">About Us</a>
  </div>
</div>

<!-- FEATURED -->

<div class="wrapper-featured row">
  <div class="home-featured container">
    <div class="col-md-4 col-xs-12 content-mine text-center">
      <a href="<?php echo home_url(); ?>go-contentmine" title="Go Content Mine"><h2 class="btn btn-default btn-lg">Go ContentMine <i class="fa fa-arrow-circle-right"></i></h2></a>
    </div>
    <div class="col-md-4 col-xs-12 community text-center">
      <h3>Get Involved</h3>
      <a href="<?php echo home_url(); ?>/get-involved" title="Get Involved"><i class="fa fa-users"></i></a>
      <p class="community-text">Join a community!</p>
      <!-- <a href="<?php echo home_url(); ?>/community" title="Community"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span></a> -->
    </div>
    <div class="col-md-4 col-xs-12 events text-center">
      <h3>Events</h3>
      <a href="<?php echo home_url(); ?>/events" title="Events"><i class="fa fa-calendar"></i></a>
      <p class="events-text">Find our training and other events.</p>
    </div>
  </div>
</div>

<!-- BLOG PREVIEW -->

<div class="home-blog container">
  <div class="">
    <h3 class="text-left"><a href="<?php echo home_url() ?>/blog" title="News" class="btn btn-primary btn-lg">Blog</a></h3>
      <?php $myQuery_News = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 3) );
      while ( $myQuery_News->have_posts() ) : $myQuery_News->the_post(); { ?>
        <div class="preview-news col-xs-12 col-sm-6 col-md-4">
          <div class="box-thumbnail">
            <div class="thumbnail">
              <?php if ( has_post_thumbnail() ) { ?>
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail', array( 'class' => 'aligncenter' )); ?></a>
              <?php } else {  ?>
                <a href="<?php the_permalink(); ?>"><img src="<?php bloginfo( 'template_directory');?>/assets/images/thumb.png" ></a>
              <?php } ?>
            </div>
            <div class="preview-news-content">
              <h4 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
              <div class="entry-summary">
                <?php the_excerpt(); ?>
              </div>
            </div>
          </div>
        </div>
    <?php } endwhile; // end of the loop. ?>
  </div>
</div>
