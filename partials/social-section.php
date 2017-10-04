<?php
  $facebook = get_field('facebook', 'option');
  $twitter = get_field('twitter', 'option');
  $linkedin = get_field('linkedin', 'option');
?>
<div class="social">
  <?php if($linkedin): ?>
    <a href="<?php echo $linkedin; ?>" class="fa-stack">
      <i class="fa fa-stop fa-stack-2x"></i>
      <i class="fa fa-linkedin fa-stack-1x"></i>
    </a>
  <?php endif; if($facebook): ?>
    <a href="<?php echo $facebook; ?>" class="fa-stack">
      <i class="fa fa-stop fa-stack-2x"></i>
      <i class="fa fa-facebook-official fa-stack-1x"></i>
    </a>
  <?php endif; if($twitter): ?>
    <a href="<?php echo $twitter; ?>" class="fa-stack">
      <i class="fa fa-stop fa-stack-2x"></i>
      <i class="fa fa-twitter fa-stack-1x"></i>
    </a>
  <?php endif; ?>
</div>
