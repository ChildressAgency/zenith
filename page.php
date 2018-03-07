<?php get_header(); ?>
<?php if(get_field('hero_image')): ?>
  <div class="hero" style="background-image:url('<?php the_field('hero_image'); ?>'); <?php the_field('hero_image_css'); ?>"></div>
<?php endif; ?>
<?php if(get_field('background_image')): ?>
  <main id="main" class="bg" style="background-image:url(<?php the_field('background_image'); ?>); <?php the_field('background_image_css'); ?>">
<?php else: ?>
  <main id="main" class="no-bg">
<?php endif; ?>
  <div class="container">
    <article>
      <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
      <?php endwhile; endif; ?>
    </article>
  </div>
</main>
<?php get_footer(); ?>