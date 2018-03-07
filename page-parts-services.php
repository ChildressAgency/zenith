<?php get_header(); ?>
<?php if(get_field('hero_image')): ?>
  <main id="main" class="bg" style="background-image:url(<?php the_field('hero_image'); ?>); <?php the_field('hero_image_css'); ?>">
<?php else: ?>
  <main id="main" class="no-bg">
<?php endif; ?>
    <div class="container narrow">
      <h1 class="page-title">Products & Services</h1>
    </div>
  </main>

<?php if(get_field('commercial_section_background_image')): ?>
  <section id="commercial" class="parts-section bg" style="background-image:url(<?php the_field('commercial_section_background_image'); ?>); <?php the_field('commercial_section_background_image_css'); ?>">
<?php else: ?>
  <section id="commercial" class="parts-section no-bg">
<?php endif; ?>
    <div class="container">
      <h1>Commercial</h1>
      <?php the_field('commercial_section_content'); ?>
    </div>
  </section>

<?php if(get_field('government_section_background_image')): ?>
  <section id="government" class="parts-section bg" style="background-image:url(<?php the_field('government_section_background_image'); ?>); <?php the_field('government_section_background_image_css'); ?>">
<?php else: ?>
  <section id="government" class="parts-section no-bg">
<?php endif; ?>
    <div class="container">
      <h1>Government</h1>
      <?php the_field('government_section_content'); ?>
      <a href="#main" class="back-to-top">top <i class="fa fa-arrow-up"></i></a>
    </div>
  </section>

<?php if(get_field('exchange_pool_section_background_image')): ?>
  <section id="exchange-pool" class="parts-section bg" style="background-image:url(<?php the_field('exchange_pool_section_background_image'); ?>); <?php the_field('exchange_pool_section_background_image_css'); ?>">
<?php else: ?>
  <section id="exhange-pool" class="parts-section no-bg">
<?php endif; ?>
    <div class="container">
      <h1>Exchange Pool</h1>
      <?php the_field('exchange_pool_section_content'); ?>
    </div>
    <a href="#main" class="back-to-top">top <i class="fa fa-arrow-up"></i></a>
  </section>

<?php if(get_field('repairs_section_background_image')): ?>
  <section id="managed-repairs" class="parts-section bg" style="background-image:url(<?php the_field('repairs_section_background_image'); ?> <?php the_field('repairs_section_background_image_css'); ?>">
<?php else: ?>
  <section id="managed-repairs" class="parts-section no-bg">
<?php endif; ?>
    <div class="container">
      <?php the_field('repairs_section_content'); ?>
    </div>
    <a href="#main" class="back-to-top">top <i class="fa fa-arrow-up"></i></a>
  </section>

<?php if(get_field('consignments_section_background_image')): ?>
  <section id="consignments" class="parts-section bg" style="background-image:url(<?php the_field('consignments_section_background_image'); ?>); <?php the_field('consignments_section_background_image_css'); ?>">
<?php else: ?>
  <section id="consignments" class="parts-section no-bg">
<?php endif; ?>
    <div class="container">
      <h1>Consignments</h1>
      <?php the_field('consignments_section_content'); ?>
      <a href="#main" class="back-to-top">top <i class="fa fa-arrow-up"></i></a>
    </div>
  </section>

<?php if(get_field('tool_calibration_section_background_image')): ?>
  <section id="tool-calibration" class="parts-section bg" style="background-image:url(<?php the_field('tool_calibration_section_background_image'); ?>); <?php the_field('tool_calibration_section_background_image_css'); ?>">
<?php else: ?>
  <section id="tool-calibration" class="parts-section no-bg">
<?php endif; ?>
    <div class="container">
      <?php the_field('tool_calibration_section_content'); ?>
    </div>
  </section>

<?php if(get_field('aog_support_section_background_image')): ?>
  <section id="aog-support" class="parts-section bg" style="background-image:url(<?php the_field('aog_support_section_background_image'); ?>); <?php the_field('aog_support_section_background_image_css'); ?>">
<?php else: ?>
  <section id="aog-support" class="parts-section no-bg">
<?php endif; ?>
    <div class="container narrow">
      <h1>A.O.G. Support</h1>
      <?php the_field('aog_support_section_content'); ?>
    </div>
    <a href="#main" class="back-to-top">top <i class="fa fa-arrow-up"></i></a>
  </section>

<?php get_footer(); ?>