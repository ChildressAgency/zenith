<?php get_header(); ?>
<main id="main"<?php if(get_field('background_image')){ echo ' style="background-image:url(' . get_field('background_image') . ');' . get_field('background_image_css') . '"'; } ?>>
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