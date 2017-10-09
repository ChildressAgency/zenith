<?php get_header(); ?>
  <main id="main">
    <div class="container">
      <h1 class="page-title">Quality</h1>
      <h3 class="text-center">Quality Policy</h3>
      <div class="row">
        <div class="col-sm-5">
          <div class="quality-statement">
            <?php the_field('quality_statement_section'); ?>
          </div>
        </div>
        <div class="col-sm-7">
          <div class="quality-policy">
            <?php if(have_rows('quality_policy_items')): $i=1; while(have_rows('quality_policy_items')): the_row(); ?>
              <div class="media">
                <div class="media-left">
                  <h2><?php echo $i; ?>.</h2>
                </div>
                <div class="media-body">
                  <p><?php the_sub_field('quality_policy_item'); ?></p>
                </div>
              </div>
            <?php $i++; endwhile; endif; ?>
          </div>
        </div>
      </div>
    </div>
  </main>
  <section id="certs-docs">
    <div class="container">
      <div class="row">
        <div class="col-sm-7 col-sm-offset-5">
          <h1 class="page-title">Certifications & Documents</h1>
          <?php if(have_rows('documents')): while(have_rows('documents')): the_row(); 
            $document = get_sub_field('document'); ?>
            <div class="media document">
              <div class="media-left">
                <a href="<?php echo $document['url']; ?>" class=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon-document.png" class="media-object" alt="" /></a>
              </div>
              <div class="media-body">
                <h3 class="media-header"><?php echo $document['title']; ?></h3>
                <p><?php echo $document['caption']; ?></p>
              </div>
            </div>
          <?php endwhile; endif; ?>
        </div>
      </div>
    </div>
  </section>
  <?php get_template_part('partials/testimonials', 'section'); ?>
  <section id="ethics-policy" class="parts-section">
    <div class="container">
      <h1>Zenith Ethics Policy</h1>
      <?php the_field('ethics_policy_section_content'); ?>
    </div>
  </section>
<?php get_footer(); ?>