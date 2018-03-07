<?php if(have_rows('testimonials', 'option')): 
  if(get_field('background_image', 'option')): ?>
    <section id="testimonials" class="bg" style="background-image:url(<?php the_field('background_image', 'option'); ?>); <?php the_field('background_image_css', 'option'); ?>">
  <?php else: ?>
    <section id="testimonials" class="no-bg">
  <?php endif; ?>
    <div class="container">
      <div id="testimonial-slider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
          <?php $i=0; while(have_rows('testimonials', 'option')): the_row(); ?>
            <div class="item<?php if($i==0){ echo ' active'; } ?>">
              <?php the_sub_field('testimonial'); ?>
              <div class="testimonial-author">
                <p><?php the_sub_field('testimonial_author'); ?><?php echo get_sub_field('testimonial_author_title') ? '<br />' . get_sub_field('testimonial_author_title') : ''; ?><?php echo get_sub_field('testimonial_author_company') ? '<br />' . get_sub_field('testimonial_author_company') : ''; ?></p>
              </div>
            </div>
          <?php $i++; endwhile; ?>
        </div>
        <a href="#testimonial-slider" class="left carousel-control hidden-xs hidden-sm" role="button" data-slide="prev">
          <span class="fa fa-angle-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a href="#testimonial-slider" class="right carousel-control hidden-xs hidden-sm" role="button" data-slide="next">
          <span class="fa fa-angle-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </section>
<?php endif; ?>