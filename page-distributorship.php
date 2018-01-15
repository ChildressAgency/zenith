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
  <?php
    $affiliations = get_field('affiliation_logos');
    if($affiliations): ?>
      <section class="logos">
        <div class="container">
          <ul class="list-unstyled list-inline">
            <?php foreach($affiliations as $affiliation): ?>
              <li><img src="<?php echo $affiliation['url']; ?>" class="img-responsive center-block" alt="<?php echo $affiliation['alt']; ?>" /></li>
            <?php endforeach; ?>
          </ul>
        </div>
        <span class="shadow-left"></span>
        <span class="shadow-right"></span>
      </section>
  <?php endif; ?>
<?php get_footer(); ?>