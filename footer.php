<?php 
  if(!is_front_page() && !is_page('condition-codes') && !is_page('quality')){ 
    get_template_part('partials/testimonials', 'section'); 
  } 
?>
<?php if(!is_page('contact')): ?>
  <section id="contact">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <h1>GET IN TOUCH</h1>
          <div class="contact-info">
            <p><?php the_field('street_address', 'option'); ?><br /><?php the_field('city_state_zip', 'option'); ?></p>
            <p class="phone"><?php the_field('phone_number', 'option'); ?> <span>Voice</span><br /><?php the_field('fax_number', 'option'); ?> <span>FAX</span></p>
            <p><?php the_field('email', 'option'); ?></p>
            <p class="follow-us">Follow us on social media</p>
            <?php get_template_part('partials/social', 'section'); ?>
          </div>
        </div>
        <div class="col-sm-6">
          <?php echo do_shortcode('[contact-form-7 id="19" title="Contact form 1"]'); ?>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>
  <section id="google-map">
    <?php the_field('google_map_embed_code', 'option'); ?>
  </section>
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-sm-2">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" class="img-responsive center-block" alt="Zenith Aviation Logo" />
        </div>
        <div class="col-sm-5">
          <ul class="list-unstyled footer-nav">
            <li><a href="<?php echo home_url(); ?>">Home</a></li>
            <li><a href="<?php echo home_url('about'); ?>">About</a></li>
            <li><a href="<?php echo home_url('news-info'); ?>">News &amp; Info</a></li>
            <li><a href="<?php echo home_url('products-services'); ?>">Products &amp; Services</a></li>
            <li><a href="<?php echo home_url('quality'); ?>">Quality</a></li>
            <li><a href="<?php echo home_url('contact'); ?>">Contact</a></li>
          </ul>
        </div>
        <div class="col-sm-3">
          <div class="footer-contact-info">
            <p><?php the_field('phone_number', 'option'); ?> Voice<br /><?php the_field('fax_number', 'option'); ?> Fax<br /><?php the_field('email', 'option'); ?></p>
          </div>
        </div>
        <div class="col-sm-2">
          <?php get_template_part('partials/social', 'section'); ?>
        </div>
      </div>
      <div class="copyright">
        <p>&copy;<?php echo date('Y'); ?> Zenith Aviation</p>
        <p>website created by <a href="https://childressagency.com" target="_blank">The Childress Agency</a></p>
      </div>
    </div>
  </footer>
  <?php wp_footer(); ?>
</body>
</html>