<?php get_header(); ?>
  <main id="main">
    <div class="container narrow">
      <article>
        <?php if(have_posts()): while(have_posts()): the_post(); ?>
          <h1><?php the_title(); ?></h1>
          <?php the_content(); ?>
        <?php endwhile; endif; ?>
      </article>
      <div class="code-list">
        <ul class="list-unstyled">
          <?php if(have_rows('condition_codes')): while(have_rows('condition_codes')): the_row(); ?>
            <li>
              <h3><?php the_sub_field('condition_code'); ?></h3>
              <?php the_sub_field('condition_code_description'); ?>
            </li>
          <?php endwhile; endif; ?>
        </ul>
        <h3>As Removed (AR)</h3>
        <?php the_field('as_removed_condition_code_description'); ?>
      </div>
    </div>
    <?php get_template_part('partials/testimonials', 'section'); ?>
    <div class="container">
      <article>
        <?php the_field('traceability_section_content', 11); ?>
      </article>
    </div>
  </main>
<?php get_footer(); ?>