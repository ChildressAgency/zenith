<?php get_header(); ?>
  <div id="teamModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="memberName">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
          <div class="row">
            <div class="col-sm-4">
              <img src="" id="memberImage" class="img-responsive center-block" alt="" />
            </div>
            <div class="col-sm-8">
              <h4 id="memberName"></h4>
              <p class="member-email"></p>
            </div>
          </div>
        </div>
        <div class="modal-body"></div>
      </div>
    </div>
  </div>

  <?php if(get_field('hero_image')): ?>
    <main id="main" class="bg" style="background-image:url(<?php the_field('hero_image'); ?>); <?php the_field('hero_image_css'); ?>">
  <?php else: ?>
    <main id="main" class="no-bg">
  <?php endif; ?>
    <div class="container">
      <h1 class="page-title text-center">Executive Team</h1>
      <div class="row">
        <?php if(have_rows('executive_team')): $i=0; while(have_rows('executive_team')): the_row(); ?>
          <?php if($i%3==0){ echo '<div class="clearfix"></div>'; } ?>
          <div class="col-sm-4">
            <div class="team-member">
              <img src="<?php the_sub_field('team_member_image'); ?>" class="img-responsive center-block" alt="<?php the_sub_field('team_member_name'); ?>" />
              <h4><?php the_sub_field('team_member_name'); ?><span><?php the_sub_field('team_member_title'); ?></span></h4>
              <p><?php the_sub_field('team_member_brief_description'); ?></p>
              <a href="#" class="read-more" data-toggle="modal" data-target="#teamModal" data-member_name="<?php the_sub_field('team_member_name'); ?>" data-member_title="<?php the_sub_field('team_member_title'); ?>" data-member_email="<?php the_sub_field('team_member_email'); ?>" data-member_bio="<?php the_sub_field('team_member_bio'); ?>" data-member_image="<?php the_sub_field('team_member_image'); ?>">Learn More</a>
            </div>
          </div>
        <?php $i++; endwhile; endif; ?>
      </div>
    </div>
  </main>
  <?php if(have_rows('departments')):
    if(get_field('background_image')): ?>
      <section id="departments" class="bg" style="background-image:url(<?php the_field('background_image'); ?>); <?php the_field('background_image_css'); ?>">
    <?php else: ?>
      <section id="departments" class="no-bg">
    <?php endif; ?>
      <div class="container narrow">
        <h2 class="text-center">Departments</h2>
        <ul>
          <?php while(have_rows('departments')): the_row(); ?>
            <li>
              <p><?php the_sub_field('department_title'); ?><br /><span><?php the_sub_field('department_email'); ?></span></p>
            </li>
          <?php endwhile; ?>
        </ul>
      </div>
    </section>
  <?php endif; ?>
<?php get_footer(); ?>