<?php

$content = get_sub_field('content');
$headline = get_sub_field('headline');
$fade_background_class = (get_sub_field('fade_background')) ? 'fade-background' : '';

?>

<section class="acf acf-wysiwyg <?php echo $fade_background_class; ?>">

  <?php if ($headline) : ?>
    <h1 class="headline">
      <?php echo $headline; ?>
    </h1>
  <?php endif; ?>

  <div class="layout layout-<?php the_sub_field('layout'); ?>">

    <?php if ($content) : ?>
      <div class="content">
        <?php echo $content; ?>
      </div>
    <?php endif; ?>

  </div>
</section>
