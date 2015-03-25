<?php

namespace Roots\Sage;

$featured_image = get_post(get_post_thumbnail_id());
$caption = $featured_image->post_excerpt;

?>

<div class="hero">
  <?php the_post_thumbnail('full'); ?>
  <?php if ($caption) : ?>
  <span class="caption"><?php echo $caption; ?></span>
  <?php endif; ?>
</div>
