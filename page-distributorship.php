<?php get_header(); ?>
  <main id="main">
    <div class="container narrow">
      <article>
        <?php if(have_posts()): while(have_posts()): the_post(); ?>
          <h1 class="page-title"><?php the_title(); ?></h1>
          <?php the_content(); ?>
        <?php endwhile; endif; ?>
      </article>
    </div>
  </main>
  <?php 
    $partners = get_field('partner_logos');
    if($partners): ?>
      <section class="logos">
        <div class="container">
          <ul class="list-unstyled list-inline">
            <?php foreach($partners as $partner): ?>
              <li><img src="<?php echo $partner['url']; ?>" class="img-responsive center-block" alt="<?php echo $partner['alt']; ?>" /></li>
            <?php endforeach; ?>
          </ul>
        </div>
        <span class="shadow-left"></span>
        <span class="shadow-right"></span>
      </section>
  <?php endif; ?>
  <div class="title-section">
    <h1 class="page-title">Affiliations</h1>
  </div>
  <section class="logos">
    <div class="container">
      <div class="row">
        <div class="col-sm-5">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/afra-logo.png" class="img-responsive center-block" alt="AFRA Logo" />
        </div>
        <div class="col-sm-7">
          <div class="row">
            <div class="col-sm-6">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/raa-logo.png" class="img-responsive center-block" alt="RAA Logo" />
            </div>
            <div class="col-sm-6">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/nbaa-logo.png" class="img-responsive center-block" alt="NBAA Logo" />
            </div>
          </div>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/naval-aviation-logo.png" class="img-responsive center-block" alt="Naval Aviation Logo" />
        </div>
      </div>
    </div>
    <span class="shadow-left"></span>
    <span class="shadow-right"></span>
  </section>
<?php get_footer(); ?>