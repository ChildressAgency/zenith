<?php get_header(); ?>
    <?php 
      //get static blog page content field
      $blog_page = get_page_by_path('news-info');
      $blog_page_id = $blog_page->ID; ?>
<?php if(get_field('hero_image', $blog_page_id)): ?>
  <main id="main" class="bg" style="background-image:url(<?php the_field('hero_image', $blog_page_id); ?>); <?php the_field('hero_image_css', $blog_page_id); ?>">
<?php else: ?>
  <main id="main" class="no-bg">
<?php endif; ?>
        <div class="container narrow">
          <article>
            <?php the_field('intro_content', $blog_page_id); ?>
          </article>
        </div>
  </main>

<?php if(get_field('latest_news_section_background_image')): ?>
  <section id="latestNews" class="bg" style="background-image:url(<?php the_field('latest_news_section_background_image'); ?>); <?php the_field('latest_news_section_background_image_css'); ?>">
<?php else: ?>
  <section id="latestNews" class="no-bg">
<?php endif; ?>
    <div class="container narrow">
      <h1>Latest News</h1>
      <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <div class="row">
          <div class="col-sm-4">
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
      <?php endwhile; endif; wp_pagenavi(); ?>
    </div>
  </section>

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


<?php if(get_field('archives_section_background_image')): ?>
  <section id="archives" class="bg" style="background-image:url(<?php the_field('archives_section_background_image'); ?>); <?php the_field('archives_section_background_image_css'); ?>">
<?php else: ?>
  <section id="archives" class="no-bg">
<?php endif; ?>
    <div class="container narrow">
      <div class="archive-nav">
        <h3 style="text-align:center;">Archives</h3>
        <div class="row">
          <div class="archive-year">
            <ul class="list-unstyled list-inline">
              <?php wp_get_archives(array('type' => 'yearly')); ?>
            </ul>
          </div>
          <?php
          /*
            global $wpdb;
            $year_prev = null;
            $months = $wpdb->get_results("
              SELECT DISTINCT MONTH(post_date) as month, YEAR(post_date) as year
              FROM $wpdb->posts
              WHERE post_status = 'publish'
                AND post_type = 'post'
              GROUP BY month, year
              ORDER BY year DESC, month ASC");

            if($months){
              $i=0;
              foreach($months as $month){
                $year_current = $month->year;
                if(($year_current != $year_prev) && ($year_prev != null)){
                  echo '</div></div></div>';                 
                }
                if($year_current != $year_prev){
                  if($i%3==0){ echo '<div class="clearfix"></div>'; }
                  echo '<div class="col-sm-4"><div class="archive-year"><h4>' . $month->year . '</h4><div class="row">' ;
                }

                echo '<div class="col-xs-4"><a href="' . home_url() . '/' . $month->year . '/' . date("m", mktime(0,0,0,$month->month,1,$month->year)) . '">' . date_i18n("M", mktime(0,0,0,$month->month,1,$month->year)) . '</a></div>';

                //if($year_current != $year_prev){
                //}

                $year_prev = $year_current;
                $i++;
              }
            }*/
             ?>
        </div>
      </div>
    </div>
  </section>

<?php if(get_field('career_opportunity_section_background_image')): ?>
  <section id="jobPostings" class="bg" style="background-image:url(<?php the_field('career_opportunity_section_background_image'); ?>); <?php the_field('career_opportunity_section_background_images_css'); ?>">
<?php else: ?>
  <section id="jobPostings" class="no-bg">
<?php endif; ?>
    <div class="container narrow">
      <article>
        <h1 class="page-title">Career Opportunities</h1>
        <?php the_field('job_posting_intro_content', $blog_page_id); ?>
      </article>
      <?php
        $job_listings = new WP_Query(array(
          'post_type' => 'job_listing',
          'post_status' => 'publish',
          'posts_per_page' => -1,
          'meta_query' => array(
            array(
              'key' => 'active',
              'compare' => '==',
              'value' => '1'
            )
          )
        ));

        if($job_listings->have_posts()): while($job_listings->have_posts()): $job_listings->the_post(); ?>
          <div class="job-listing">
            <h3><?php the_title(); ?></h3>
            <?php the_field('job_short_description'); ?>
            <a href="<?php the_field('job_posting_link'); ?>" class="btn-main">See Posting Here</a>
          </div>
      <?php endwhile; endif; wp_reset_postdata(); ?>
    </div>
  </section>

<?php if(get_field('articles_of_interest_section_background_image')): ?>
  <section id="articlesOfInterest" class="bg" style="background-image:url(<?php the_field('articles_of_interest_section_background_image'); ?>">
<?php else: ?>
  <section id="articlesOfInterest" class="no-bg">
<?php endif; ?>
    <div class="container">
      <article>
        <?php the_field('articles_of_interest_content', $blog_page_id); ?>
      </article>
    </div>
  </section>
<?php get_footer(); ?>