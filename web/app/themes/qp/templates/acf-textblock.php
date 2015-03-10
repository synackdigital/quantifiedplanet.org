<?php

$content = get_sub_field('content');

?>

<section class="acf acf-textblock" style="color:<?php the_sub_field('color'); ?>;">
  <div class="layout layout-<?php the_sub_field('layout'); ?>">

    <?php if ($content) : ?>
      <div class="content <?php the_sub_field('size'); ?>">
        <?php echo $content; ?>
      </div>
    <?php endif; ?>

  </div>
</section>
