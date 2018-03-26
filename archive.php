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
              $post_image_url = get_stylesheet_directory_uri() . '/images/blog-placeholder.jpg';
              if(has_post_thumbnail()){
                the_post_thumbnail('full', array('class' => 'img-responsive center-block'));
                $post_image_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
              }
              else{
                echo '<img src="' . $post_image_url . '" class="img-responsive center-block" alt="" />';
              }
            ?>
          </div>
          <div class="col-sm-8">
            <div class="blog-summary">
              <h4 class="blog-title"><?php the_title(); ?></h4>
              <h4 class="blog-subtitle"><?php the_field('post_subtitle'); ?></h4>
              <p class="blog-author-date">by: <?php the_author(); ?><br /><?php echo get_the_date('F j, Y'); ?></p>
              <?php the_excerpt(); ?>
              <a href="#" class="read-more" data-toggle="modal" data-target="#blogModal" data-blog_image="<?php echo $post_image_url; ?>" data-blog_title="<?php echo get_the_title(); ?>" data-blog_subtitle="<?php the_field('post_subtitle'); ?>" data-blog_date="<?php echo get_the_date('F j, Y'); ?>" data-blog_content="<?php echo esc_html(apply_filters('the_content', get_the_content())); ?>">(see more)</a>
            </div>
          </div>
        </div>
      <?php endif; ?>
    <?php endwhile; endif; wp_pagenavi(); ?>

      <div id="blogModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="blogTitle">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">X</span>
              </button>
              <div class="row">
                <div class="col-sm-4">
                  <img src="" id="blogImage" class="img-responsive center-block" alt="" />
                </div>
                <div class="col-sm-8">
                  <h4 id="blogTitle"></h4>
                  <h4 id="blogSubtitle"></h4>
                  <p id="blogDate"></p>
                </div>
              </div>
            </div>
            <div class="modal-body"></div>
          </div>
        </div>
      </div>

  </div>
</main>
<?php get_footer(); ?>