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
        <a href="<?php echo esc_url(home_url('parts-services/#aog-support')); ?>" class="btn-main">AOG Support</a>
        <a href="<?php echo esc_url(home_url('careers/#jobPostings')); ?>" class="btn-main">Careers</a>
        <?php get_template_part('partials/social', 'section'); ?>
      </div>

      <?php
        //mobile menu item 
        $mm = '<li class="visible-xs-block visible-sm-block"><div class="quick-links">';
        $mm .= '<a href="' . esc_url(home_url('parts-services/#aog-support')) . '" class="btn-main">AOG Support</a>';
        $mm .= '<a href="' . esc_url(home_url('careers/#jobPostings')) . '" class="btn-main">Careers</a>';
        $mm .= '<div class="social">';

        $facebook = get_field('facebook', 'option');
        $twitter = get_field('twitter', 'option');
        $linkedin = get_field('linkedin', 'option');
        if($linkedin){
          $mm .= '<a href="' . $linkedin . '" class="fa-stack"><i class="fa fa-stop fa-stack-2x"></i><i class="fa fa-linkedin fa-stack-1x"></i></a>';
        }
        if($facebook){
          $mm .= '<a href="' . $facebook . '" class="fa-stack"><i class="fa fa-stop fa-stack-2x"></i><i class="fa fa-facebook-official fa-stack-1x"></i></a>';
        }
        if($twitter){
          $mm .= '<a href="' . $twitter . '" class="fa-stack"><i class="fa fa-stop fa-stack-2x"></i><i class="fa fa-twitter fa-stack-1x"></i></a>';
        }

        $mm .= '</div></div></li>';
              
        $header_nav_args = array(
          'theme_location' => 'header-nav',
          'container' => 'div',
          'container_class' => 'navbar-collapse collapse',
          'container_id' => 'navbar',
          'menu' => '',
          'menu_class' => 'nav navbar-nav',
          'menu_id' => '',
          'echo' => true,
          'fallback_cb' => 'zenith_fallback_header_menu',
          'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s' . $mm . '</ul>',
          'depth' => 2,
          'walker' => new wp_bootstrap_navwalker()
        );
        wp_nav_menu($header_nav_args);

        function zenith_fallback_header_menu(){ 
          //mobile menu item 
          $mm = '<li class="visible-xs-block visible-sm-block"><div class="quick-links">';
          $mm .= '<a href="' . esc_url(home_url('parts-services/#aog-support')) . '" class="btn-main">AOG Support</a>';
          $mm .= '<a href="' . esc_url(home_url('careers/#jobPostings')) . '" class="btn-main">Careers</a>';
          $mm .= '<div class="social">';

          $facebook = get_field('facebook', 'option');
          $twitter = get_field('twitter', 'option');
          $linkedin = get_field('linkedin', 'option');
          if($linkedin){
            $mm .= '<a href="' . $linkedin . '" class="fa-stack"><i class="fa fa-stop fa-stack-2x"></i><i class="fa fa-linkedin fa-stack-1x"></i></a>';
          }
          if($facebook){
            $mm .= '<a href="' . $facebook . '" class="fa-stack"><i class="fa fa-stop fa-stack-2x"></i><i class="fa fa-facebook-official fa-stack-1x"></i></a>';
          }
          if($twitter){
            $mm .= '<a href="' . $twitter . '" class="fa-stack"><i class="fa fa-stop fa-stack-2x"></i><i class="fa fa-twitter fa-stack-1x"></i></a>';
          }

          $mm .= '</div></div></li>';
          ?>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About <i class="fa fa-caret-down"></i></a>
                <ul class="dropdown-menu">
                  <li<?php if(is_page('history')){ echo ' class="active"'; } ?>><a href="<?php echo home_url('history'); ?>">History</a></li>
                  <li<?php if(is_page('executive-team')){ echo ' class="active"'; } ?>><a href="<?php echo home_url('executive-team'); ?>">Executive Team</a></li>
                  <li<?php if(is_page('facility')){ echo ' class="active"'; } ?>><a href="<?php echo home_url('facility'); ?>">Facility</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Products &amp; Services <i class="fa fa-caret-down"></i></a>
                <ul class="dropdown-menu">
                  <li<?php if(is_page('parts-services')){ echo ' class="active"'; } ?>><a href="<?php echo home_url('parts-services'); ?>">Parts &amp; Services</a></li>
                  <li<?php if(is_page('distributorships')){ echo ' class="active"'; } ?>><a href="<?php echo home_url('distributorships'); ?>">Distributorships</a></li>
                  <li<?php if(is_page('condition-codes')){ echo ' class="active"'; } ?>><a href="<?php echo home_url('condition-codes'); ?>">Condition Codes</a></li>
                </ul>
              </li>
              <li<?php if(is_page('quality')){ echo ' class="active"'; } ?>><a href="<?php echo home_url('quality'); ?>">Quality</a></li>
              <li<?php if(is_home()){ echo ' class="active"'; } ?>><a href="<?php echo home_url('news-info'); ?>">News &amp; Info</a></li>
              <li<?php if(is_page('contact')){ echo ' class="active"'; } ?>><a href="<?php echo home_url('contact'); ?>">Contact</a></li>
              <?php echo $mm; ?>
            </ul>
          </div>
      <?php  } ?>
    </div>
  </nav>
