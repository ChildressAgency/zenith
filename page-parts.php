<?php get_header(); ?>
  <main id="main" style="background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/images/airplane-shadow.jpg); background-repeat:no-repeat; background-size:cover;">
    <div class="container narrow">
      <h1 class="page-title">Products & Services</h1>
      <section id="government" class="parts-section">
        <h1>Government</h1>
        <?php the_field('government_section_content'); ?>
      </section>
      <section id="commercial" class="parts-section">
        <h1>Commercial</h1>
        <?php the_field('commercial_section_content'); ?>
      </section>
    </div>
  </main>
  <section id="consignments" class="parts-section">
    <div class="container">
      <h1>Consignments</h1>
      <?php the_field('consignments_section_content'); ?>
  </section>
  <section id="exchange-pool" class="parts-section">
    <div class="container">
      <h1>Exchange Pool</h1>
      <?php the_field('exchange_pool_section_content'); ?>
    </div>
  </section>
  <section id="managed-repairs" class="parts-section">
    <div class="container">
      <?php the_field('repairs_section_content'); ?>
    </div>
  </section>
  <section id="aog-support" class="parts-section">
    <div class="container narrow">
      <h1>A.O.G. Support</h1>
      <?php the_field('aog_support_section_content'); ?>
    </div>
  </section>

<?php get_footer(); ?>