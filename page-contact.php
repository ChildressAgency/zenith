<?php get_header(); ?>
  <main id="main">
    <div class="container">
      <div class="aog-info">
        <h1 class="page-title">Contact</h1>
        <h1>A.O.G. Support 24/7 365</h1>
        <p>For Aircraft on ground support anytime anywhere</p>
        <p class="phone"><?php the_field('aog_support_phone'); ?></p>
        <p class="email"><?php the_field('aog_support_email'); ?></p>
      </div>
      <div class="row">
        <div class="col-sm-6">
          <?php echo do_shortcode('[contact-form-7 id="19" title="Contact form 1"]'); ?>
        </div>
        <div class="col-sm-6">
          <div class="corporate-info">
            <h2>Corporate Headquarters</h2>
            <p>Zenith Aviation, Inc.<br /><span><?php the_field('street_address', 'option'); ?> <?php the_field('city_state_zip', 'option'); ?></span></p>
            <p><?php the_field('phone_number', 'option'); ?> Voice<br /><?php the_field('fax_number', 'option'); ?> Fax</p>
            <p><?php the_field('email', 'option'); ?></p>
          </div>
          <?php if(have_rows('executive_staff')): ?>
            <div class="corporate-info">
              <h2>Executive Staff</h2>
              <ul>
                <?php while(have_rows('executive_staff')): the_row(); ?>
                  <li>
                    <p><?php the_sub_field('exe_staff_member_name'); ?><br /><span><?php the_sub_field('exe_staff_member_title'); ?><br /><?php the_sub_field('exe_staff_member_email'); ?></span></p>
                  </li>
                <?php endwhile; ?>
              </ul>
            </div>
          <?php endif; ?>
          <?php if(have_rows('departments')): ?>
            <div class="corporate-info">
              <h2>Departments</h2>
              <ul>
                <?php while(have_rows('departments')): the_row(); ?>
                  <li>
                    <p><?php the_sub_field('department_title'); ?><br/><span><?php the_sub_field('department_email'); ?></span></p>
                  </li>
                <?php endwhile; ?>
              </ul>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </main>
  <div id="helicopters" class="dual-image">
    <img src="<?php get_stylesheet_directory_uri(); ?>/images/helicopter-1.jpg" class="" alt="" />
    <img src="<?php get_stylesheet_directory_uri(); ?>/images/helicopter-2.jpg" class="" alt="" />
  </div>
<?php get_footer(); ?>