<?php

$content = get_sub_field('content');

?>

<section class="acf acf-wysiwyg">
  <div class="layout layout-<?php the_sub_field('layout'); ?>">

    <?php if ($content) : ?>
      <div class="content">
        <?php echo $content; ?>
      </div>
    <?php endif; ?>

  </div>
</section>
