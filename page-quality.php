<?php get_header(); ?>
<?php if(get_field('hero_image')): ?>
  <main id="main" class="bg" style="background-image:url(<?php the_field('hero_image'); ?>); <?php the_field('hero_image_css'); ?>">
<?php else: ?>
  <main id="main" class="no-bg">
<?php endif; ?>
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
    <a href="#main" class="back-to-top">top <i class="fa fa-arrow-up"></i></a>
  </section>

<?php if(get_field('condition_codes_section_background_image')): ?>
  <section id="condition-codes" class="bg" style="background-image:url(<?php the_field('condition_codes_section_background_image'); ?>); <?php the_field('condition_codes_section_background_image_css'); ?>">
<?php else: ?>
  <section id="condition-codes" class="no-bg">
<?php endif; ?>
    <div class="container narrow">
      <article>
        <!--<h1>Condition Codes</h1>-->
        <?php the_field('condition_codes_intro', 81); ?>
      </article>
      <div class="code-list">
        <ul class="list-unstyled">
          <?php if(have_rows('condition_codes', 81)): while(have_rows('condition_codes', 81)): the_row(); ?>
            <li>
              <h3><?php the_sub_field('condition_code'); ?></h3>
              <?php the_sub_field('condition_code_description'); ?>
            </li>
          <?php endwhile; endif; ?>
        </ul>
        <h3>As Removed (AR)</h3>
        <?php the_field('as_removed_condition_code_description', 81); ?>
      </div>
    </div>
    <a href="#main" class="back-to-top">top <i class="fa fa-arrow-up"></i></a>
  </section>

<?php if(get_field('traceability_section_background_image')): ?>
  <section id="traceability" class="bg" style="background-image:url(<?php the_field('traceability_section_background_image'); ?>); <?php the_field('traceability_section_background_image_css'); ?>">
<?php else: ?>
  <section id="traceability" class="no-bg">
<?php endif; ?>
    <div class="container narrow">
      <article>
        <?php the_field('traceability_section_content'); ?>
      </article>
    </div>
    <a href="#main" class="back-to-top">top <i class="fa fa-arrow-up"></i></a>
  </section>

<?php if(get_field('ethics_policy_section_background_image')): ?>
  <section id="ethics-policy" class="parts-section bg" style="background-image:url(<?php the_field('ethics_policy_section_background_image'); ?> <?php the_field('ethics_policy_background_image_css'); ?>">
<?php else: ?>
  <section id="ethics-policy" class="parts-section no-bg">
<?php endif; ?>
    <div class="container narrow">
      <h1>Zenith Ethics Policy</h1>
      <?php the_field('ethics_policy_section_content'); ?>
      <p class="text-center">
        <a href="<?php the_field('ethics_manual'); ?>" class="btn-main">Ethics Manual</a>
      </p>
    </div>
    <a href="#main" class="back-to-top">top <i class="fa fa-arrow-up"></i></a>
  </section>
  <?php get_template_part('partials/testimonials', 'section'); ?>
<?php get_footer(); ?>