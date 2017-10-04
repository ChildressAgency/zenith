<?php get_header(); ?>
  <main id="main">
    <?php 
      //get static blog page content field
      $blog_page = get_page_by_path('news-information');
      $blog_page_id = $blog_page->ID;
      $news_info = new WP_Query(array('page_id' => $blog_page_id));
      if($news_info->have_posts()): ?>
        <div class="container narrow">
          <article>
            <?php while($news_info->have_posts()): $news_info->the_post(); ?>
              <?php the_content(); ?>
            <?php endwhile; ?>
          </article>
        </div>
    <?php endif; wp_reset_postdata(); ?>
  </main>
  <section id="latestNews">
    <div class="container narrow">
      <h1>Latest News</h1>
      <div class="row">
        <div class="col-sm-4">
          <img src="images/blog-placeholder.jpg" class="img-responsive center-block" alt="" />
        </div>
        <div class="col-sm-8">
          <div class="blog-summary">
            <h4 class="blog-title">EXIT STRATEGY - the consignment dilemma</h4>
            <h4 class="blog-subtitle">Hold, Sell or Consign</h4>
            <p class="blog-author-date">by: Donald Capwell<br />October 9, 2003</p>
            <p>As an airline or corporate operator, you have a few options to deal with excess parts after retiring or selling an aircraft...</p>
            <a href="#" class="read-more">(see more)</a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <img src="images/blog-placeholder.jpg" class="img-responsive center-block" alt="" />
        </div>
        <div class="col-sm-8">
          <div class="blog-summary">
            <h4 class="blog-title">EXIT STRATEGY - the consignment dilemma</h4>
            <h4 class="blog-subtitle">Hold, Sell or Consign</h4>
            <p class="blog-author-date">by: Donald Capwell<br />October 9, 2003</p>
            <p>As an airline or corporate operator, you have a few options to deal with excess parts after retiring or selling
              an aircraft...</p>
            <a href="#" class="read-more">(see more)</a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <img src="images/blog-placeholder.jpg" class="img-responsive center-block" alt="" />
        </div>
        <div class="col-sm-8">
          <div class="blog-summary">
            <h4 class="blog-title">EXIT STRATEGY - the consignment dilemma</h4>
            <h4 class="blog-subtitle">Hold, Sell or Consign</h4>
            <p class="blog-author-date">by: Donald Capwell<br />October 9, 2003</p>
            <p>As an airline or corporate operator, you have a few options to deal with excess parts after retiring or selling
              an aircraft...</p>
            <a href="#" class="read-more">(see more)</a>
          </div>
        </div>
      </div>
      <div class="wp-pagenavi">
        <span class="pages">Page 1 of 8</span>
        <a href="#" class="first">&lt; First</a>
        <a href="#" class="previouspostslink" rel="prev"><<</a>
        <a href="#" class="page smaller">1</a>
        <span class="current">2</span>
        <a href="#" class="page larger">3</a>
        <a href="#" class="page larger">4</a>
        <a href="#" class="page larger">5</a>
        <span class="extend">...</span>
        <a href="#" class="nextpostslink" rel="next">>></a>
        <a href="#" class="last">Last &gt;</a>
      </div>
      <div class="archive-nav">
        <h3 style="text-align:center;">Archives</h3>
        <div class="row">
          <div class="col-sm-4">
            <div class="archive-year">
              <h4><a href="#">2017</a></h4>
              <ul>
                <li><a href="#">Jan</a></li>
                <li><a href="#">Feb</a></li>
                <li><a href="#">Mar</a></li>
                <li><a href="#">Apr</a></li>
                <li><a href="#">May</a></li>
                <li><a href="#">Jun</a></li>
                <li><a href="#">Jul</a></li>
                <li><a href="#">Aug</a></li>
                <li><a href="#">Sep</a></li>
                <li><a href="#">Oct</a></li>
                <li><a href="#">Nov</a></li>
                <li><a href="#">Dec</a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="archive-year">
              <h4><a href="#">2016</a></h4>
              <ul>
                <li><a href="#">Jan</a></li>
                <li><a href="#">Feb</a></li>
                <li><a href="#">Mar</a></li>
                <li><a href="#">Apr</a></li>
                <li><a href="#">May</a></li>
                <li><a href="#">Jun</a></li>
                <li><a href="#">Jul</a></li>
                <li><a href="#">Aug</a></li>
                <li><a href="#">Sep</a></li>
                <li><a href="#">Oct</a></li>
                <li><a href="#">Nov</a></li>
                <li><a href="#">Dec</a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="archive-year">
              <h4><a href="#">2015</a></h4>
              <ul>
                <li><a href="#">Jan</a></li>
                <li><a href="#">Feb</a></li>
                <li><a href="#">Mar</a></li>
                <li><a href="#">Apr</a></li>
                <li><a href="#">May</a></li>
                <li><a href="#">Jun</a></li>
                <li><a href="#">Jul</a></li>
                <li><a href="#">Aug</a></li>
                <li><a href="#">Sep</a></li>
                <li><a href="#">Oct</a></li>
                <li><a href="#">Nov</a></li>
                <li><a href="#">Dec</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="jobPostings">
    <div class="container narrow">
      <article>
        <h1 class="page-title">Job Postings</h1>
        <p>Thank you for your interest in Zenith Aviation! Please review each position below. If you feel you are a well-qualified candidate for one of these openings, please forward your resume with cover letter (stating the position you are interested in), as well as salary requirements to:</p>
        <p class="text-center"><a href="mailto:#">JOBS@ZENITHAVIATION.COM</a></p>
      </article>
      <div class="job-listing">
        <h3>Part Time Quality Assurance / Inventory Control Specialists</h3>
        <p>Several positions are open to fill a QA / IC Specialist role ASAP. Full Time and Part Time (permanent) positions are available. We offer a flexible work schedule in a casual environment for Part Time workers (15-20 hours per month). Normal work hours are 9am - 5:30pm, and we will work around your availability within these hours.</p>
        <a href="#" class="btn-main">See Advertisement Here</a>
      </div>
      <div class="job-listing">
        <h3>Part Time Quality Assurance / Inventory Control Specialists</h3>
        <p>Several positions are open to fill a QA / IC Specialist role ASAP. Full Time and Part Time (permanent) positions
          are available. We offer a flexible work schedule in a casual environment for Part Time workers (15-20 hours per
          month). Normal work hours are 9am - 5:30pm, and we will work around your availability within these hours.</p>
        <a href="#" class="btn-main">See Advertisement Here</a>
      </div>
    </div>
  </section>
<?php get_footer(); ?>