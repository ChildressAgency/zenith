<?php get_header(); ?>
  <main id="main"<?php if(get_field('background_image')){ echo ' style="background-image:url(' . get_field('background_image') . ');' . get_field('background_image_css') . '"'; } ?>>
    <div class="container narrow">
      <h1 class="page-title">Products & Services</h1>
      <section id="commercial" class="parts-section">
        <h1>Commercial</h1>
        <?php the_field('commercial_section_content'); ?>
      </section>
      <section id="government" class="parts-section">
        <h1>Government</h1>
        <?php the_field('government_section_content'); ?>
        <a href="#main" class="back-to-top">top <i class="fa fa-arrow-up"></i></a>
      </section>
    </div>
  </main>
  <section id="exchange-pool" class="parts-section">
    <div class="container">
      <h1>Exchange Pool</h1>
      <?php the_field('exchange_pool_section_content'); ?>
    </div>
    <a href="#main" class="back-to-top">top <i class="fa fa-arrow-up"></i></a>
  </section>
  <section id="managed-repairs" class="parts-section">
    <div class="container">
      <?php the_field('repairs_section_content'); ?>
    </div>
    <a href="#main" class="back-to-top">top <i class="fa fa-arrow-up"></i></a>
  </section>
  <section id="consignments" class="parts-section">
    <div class="container">
      <h1>Consignments</h1>
      <?php the_field('consignments_section_content'); ?>
      <a href="#main" class="back-to-top">top <i class="fa fa-arrow-up"></i></a>
    </div>
  </section>
  <section id="tool-calibration" class="parts-section">
    <div class="container">
      <?php the_field('tool_calibration_section_content'); ?>
    </div>
  </section>
  <section id="aog-support" class="parts-section">
    <div class="container narrow">
      <h1>A.O.G. Support</h1>
      <?php the_field('aog_support_section_content'); ?>
    </div>
    <a href="#main" class="back-to-top">top <i class="fa fa-arrow-up"></i></a>
  </section>

<?php get_footer(); ?>