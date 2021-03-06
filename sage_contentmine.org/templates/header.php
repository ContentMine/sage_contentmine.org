<?php use Roots\Sage\Nav\NavWalker; ?>

<header class="banner navbar navbar-default navbar-static-top" role="banner">
  <div class="container-fluid wrapper-header-first">
    <div class="container header-first">
      <div class="navbar-header col-sm-6 col-xs-12 col-lg-4">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only"><?= __('Toggle navigation', 'sage'); ?></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a href="<?= esc_url(home_url('/')); ?>" alt="ContentMine"><h1 class="navbar-brand"><?php bloginfo('name'); ?></h1></a>
      </div>
      <div class="social col-sm-6 col-xs-12 col-lg-2">
        <div class="social-icons">
          <a href="https://twitter.com/TheContentMine"><i class="fa fa-twitter"></i></a>
          <a href="http://github.com/ContentMine"><i class="fa fa-github"></i></a>
          <a href="<?php echo home_url(); ?>/rss-feeds" title="RSS Feed Blog"><i class="fa fa-rss-square"></i></a>
        </div>
      </div>
      <nav class="collapse navbar-collapse col-xs-12 col-lg-6" role="navigation">
        <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new NavWalker(), 'menu_class' => 'nav navbar-nav']);
        endif;
        ?>
      </nav>
    </div>
  </div>
  <div class="wrapper-header-second">
    <div class="container header-second">
      <div id="header-search" class="col-xs-12 col-sm-4 searchbox-row skip-navigation header-searchform" >
        <div class="sr-only skip-link">
          <a href="main">Jump to the content</a>
        </div>
        <?php 
          if(!is_404()) {
            get_template_part('templates/searchform');
          } ?>
      </div>
      <div class="breadcrumbs col-xs-12 col-sm-8">
        <?php if(!is_front_page()): ?>
          <?php if(function_exists('bcn_display')) {
            bcn_display();
          }?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</header>
