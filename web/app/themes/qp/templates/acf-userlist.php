<?php

$title = get_sub_field('title');
$users = get_sub_field('content');

?>

<section class="acf acf-userlist">
  <div class="layout layout-<?php the_sub_field('layout'); ?>">

    <?php if (1===0 && $title) : ?>
      <h1 class="title"><?php echo $title; ?></h1>
    <?php endif; ?>

    <?php foreach ($users as $user) : ?>

      <?php $user = wp_parse_args( $user, array(
        'display_name'    => '',
        'user_decription' => '',
        'user_avatar'     => null
      )); ?>

      <div class="media">
        <div class="media-left">
          <?php echo $user['user_avatar']; ?>
        </div>
        <div class="media-body">
          <h4 class="media-heading"><?php echo $user['display_name']; ?></h4>
          <p><?php echo $user['user_description']; ?></p>
        </div>
      </div>

    <?php endforeach; ?>
  </div>
</section>
