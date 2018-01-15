<?php get_header(); ?>
    <?php 
      //get static blog page content field
      $blog_page = get_page_by_path('news-info');
      $blog_page_id = $blog_page->ID; ?>
  <main id="main"<?php if(get_field('hero_image', $blog_page_id)){ echo ' style="background-image:url(' . get_field('hero_image', $blog_page_id) . '");'; } ?>>
        <div class="container narrow">
          <article>
            <?php the_field('intro_content', $blog_page_id); ?>
          </article>
        </div>
  </main>
  <section id="latestNews">
    <div class="container narrow">
      <h1>Latest News</h1>
      <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <div class="row">
          <div class="col-sm-4">
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
      <?php endwhile; endif; wp_pagenavi(); ?>
    </div>
  </section>
  <section id="jobPostings">
    <div class="container narrow">
      <article>
        <h1 class="page-title">Job Postings</h1>
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
  <section id="articlesOfInterest">
    <div class="container">
      <article>
        <?php the_field('articles_of_interest_content', $blog_page_id); ?>
      </article>
    </div>
  </section>
  <section id="archives">
      <div class="archive-nav">
        <h3 style="text-align:center;">Archives</h3>
        <div class="row">
          <?php
            global $wpdb;
            $year_prev = null;
            $months = $wpdb->get_results("
              SELECT DISTINCT MONTH(post_date) as month, YEAR(post_date) as year
              FROM $wpdb->posts
              WHERE post_status = 'publish'
                AND post_type = 'post'
              GROUP BY month, year
              ORDER BY post_date DESC");

            if($months){
              $i=0;
              foreach($months as $month){
                $year_current = $month->year;
                if($year_current != $year_prev){
                  if($i%3==0){ echo '<div class="clearfix"></div>'; }
                  echo '<div class="col-sm-4"><div class="archive-year"><h4>' . $month->year . '</h4><ul>' ;
                }

                echo '<li><a href="' . home_url() . '/' . $month->year . '/' . date("m", mktime(0,0,0,$month->month,1,$month->year)) . '">' . date_i18n("M", mktime(0,0,0,$month->month,1,$month->year)) . '</a></li>';

                if($year_current != $year_prev){
                  echo '</ul></div></div>';
                }

                $year_prev = $year_current;
                $i++;
              }
            } ?>
        </div>
      </div>
  </section>
<?php get_footer(); ?>