<?php get_header(); ?>
  <section id="hp-hero">
    <div class="caption-wrapper">
      <div class="caption">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-large.png" class="img-responsive center-block hidden-xs" alt="Zenith Aviation Logo" />
        <?php the_field('hero_section_text'); ?>
      </div>
    </div>
    <a href="#hp-main" class="scrolldown hidden-xs">Learn More<span class="fa fa-angle-down"></span></a>
  </section>
  <main id="hp-main">
    <div class="container">
      <?php if(get_field('video')): ?>
        <div class="embed-responsive embed-responsive-16by9">
          <?php the_field('video'); ?>
        </div>
      <?php endif; ?>
    </div>
  </main>
  <?php get_template_part('partials/testimonials', 'section'); ?>
  <section class="center-nav">
    <div class="container">
      <ul class="list-unstyled list-inline img-links">
        <li>
          <a href="<?php the_field('center_nav_1_link'); ?>">
            <img src="<?php the_field('center_nav_1_image'); ?>" class="" alt="" />
            <h4><?php the_field('center_nav_1_title'); ?></h4>
          </a>
        </li>
        <li>
          <a href="<?php the_field('center_nav_2_link'); ?>">
            <img src="<?php the_field('center_nav_2_image'); ?>" class="" alt="" />
            <h4><?php the_field('center_nav_2_title'); ?></h4>
          </a>
        </li>
        <li>
          <a href="<?php the_field('center_nav_3_link'); ?>">
            <img src="<?php the_field('center_nav_3_image'); ?>" class="" alt="" />
            <h4><?php the_field('center_nav_3_title'); ?></h4>
          </a>
        </li>
        <li>
          <a href="<?php the_field('center_nav_4_link'); ?>">
            <img src="<?php the_field('center_nav_4_image'); ?>" class="" alt="" />
            <h4><?php the_field('center_nav_4_title'); ?></h4>
          </a>
        </li>
      </ul>
    </div>
  </section>
  <section id="years">
    <div class="container">
      <div class="row">
        <div class="col-sm-5 text-right">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/metal-thirty-five.png" class="" alt="35 years" />
        </div>
        <div class="col-sm-7">
          <h2>Years of expertise in the aviation business</h2>
        </div>
      </div>
    </div>
  </section>
<?php get_footer(); ?>