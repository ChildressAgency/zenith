<?php get_header(); ?>
<main id="main">
  <div class="container">
    <?php if(have_posts()): while(have_posts()): the_post(); 
      if(!is_archive()): ?>
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
      <?php else: ?>
        <div class="row">
          <div class="col-sm-4" style="padding-top:40px;">
            <?php 
              if(has_post_thumbnail()){
                the_post_thumbnail('full', array('class' => 'img-responsive center-block'));
              }
              else{
                echo '<img src="' . get_stylesheet_directory_uri() . '/images/blog-placeholder.jpg" class="img-responsive center-block" alt="" />';
              }
            ?>
          </div>
          <div class="col-sm-8">
            <div class="blog-summary">
              <h4 class="blog-title"><?php the_title(); ?></h4>
              <h4 class="blog-subtitle"><?php the_field('post_subtitle'); ?></h4>
              <p class="blog-author-date">by: <?php the_author(); ?><br /><?php echo get_the_date('F j, Y'); ?></p>
              <?php the_excerpt(); ?>
              <a href="<?php the_permalink(); ?>" class="read-more">(see more)</a>
            </div>
          </div>
        </div>
      <?php endif; ?>
    <?php endwhile; endif; wp_pagenavi(); ?>
  </div>
</main>
<?php get_footer(); ?>