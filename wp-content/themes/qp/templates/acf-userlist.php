<?php

$users = get_sub_field('content');
$headline = get_sub_field('headline');
$fade_background_class = (get_sub_field('fade_background')) ? 'fade-background' : '';

?>

<section class="acf acf-userlist <?php echo $fade_background_class; ?>">

  <?php if ($headline) : ?>
    <h1 class="headline">
      <?php echo $headline; ?>
    </h1>
  <?php endif; ?>

  <div class="layout layout-<?php the_sub_field('layout'); ?>">

    <?php if ($users) : foreach ($users as $key => $user) : ?>

    <?php $user = wp_parse_args( $user, array(
      'display_name'    => null,
      'user_decription' => '',
      'user_avatar'     => null
    )); ?>

    <?php if ($key%3 === 0) : ?>
    <div class="row">
    <?php endif; ?>

      <div class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-0">
        <div class="thumbnail">
          <?php echo get_avatar($user['ID'], 300); ?>
          <p class="caption">
            <span class="name"><?php echo $user['display_name']; ?></span>
            <span class="small"><?php echo $user['user_description']; ?></span>
          </p>
        </div>
      </div>

      <?php if ($key !== 0 && ($key+1)%3 === 0) : ?>
      </div>
      <?php endif; ?>

    <?php endforeach; endif; ?>

  </div>
</section>
