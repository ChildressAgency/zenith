<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="">

  <meta http-equiv="cache-control" content="public">
  <meta http-equiv="cache-control" content="private">

  <title>Zenith Aviation</title>

  <?php wp_head(); ?>
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
  <nav id="header-nav">
    <div class="container-fluid">
      <div class="navbar-header">
        <a href="<?php echo home_url(); ?>" class="header-logo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" class="img-responsive" alt="Zenith Aviation Logo" /></a>
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="expanded"
          aria-controls="navbar">
          <span class="sr-only">Toggle Navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="quick-links hidden-xs hidden-sm">
        <a href="<?php the_field('header_aog_support_link', 'option'); ?>" class="btn-main">AOG Support</a>
        <a href="<?php the_field('header_careers_link', 'option'); ?>" class="btn-main">Careers</a>
        <?php get_template_part('partials/social', 'section'); ?>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li<?php if(is_page('about')){ echo ' class="active"'; } ?>><a href="<?php echo home_url('about'); ?>">About</a></li>
          <li<?php if(is_page('products-services')){ echo ' class="active"'; } ?>><a href="<?php echo home_url('products-services'); ?>">Products &amp; Services</a></li>
          <li<?php if(is_page('quality')){ echo ' class="active"'; } ?>><a href="<?php echo home_url('quality'); ?>">Quality</a></li>
          <li<?php if(is_home()){ echo ' class="active"'; } ?>><a href="<?php echo home_url('news-info'); ?>">News &amp; Info</a></li>
          <li<?php if(is_page('contact')){ echo ' class="active"'; } ?>><a href="<?php echo home_url('contact'); ?>">Contact</a></li>
          <li class="visible-xs-block visible-sm-block">
            <div class="quick-links">
              <a href="<?php the_field('header_aog_support_link', 'option'); ?>" class="btn-main">AOG Support</a>
              <a href="<?php the_field('header_careers_link', 'option'); ?>" class="btn-main">Careers</a>
              <?php get_template_part('partials/social', 'section'); ?>
            </div>            
          </li>
        </ul>
      </div>
    </div>
  </nav>
