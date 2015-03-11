<?php

$content = get_sub_field('content');
$headline = get_sub_field('headline');
$fade_background_class = (get_sub_field('fade_background')) ? 'fade-background' : '';

?>

<section class="acf acf-textblock <?php echo $fade_background_class; ?>">

  <?php if ($headline) : ?>
    <h1 class="headline">
      <?php echo $headline; ?>
    </h1>
  <?php endif; ?>

  <div class="layout layout-<?php the_sub_field('layout'); ?>" style="color:<?php the_sub_field('color'); ?>;">

    <?php if ($content) : ?>
      <div class="content <?php the_sub_field('size'); ?>">
        <?php echo $content; ?>
      </div>
    <?php endif; ?>

  </div>
</section>
