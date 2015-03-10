<?php

$users = get_sub_field('content');

?>

<section class="acf acf-userlist">
  <div class="layout layout-<?php the_sub_field('layout'); ?>">

    <?php if ($users) : ?>
    <div class="row">

    <?php foreach ($users as $user) : ?>

      <?php $user = wp_parse_args( $user, array(
        'display_name'    => null,
        'user_decription' => '',
        'user_avatar'     => null
      )); ?>

        <div class="col-xs-6 col-sm-3">
          <div class="thumbnail">
            <?php echo get_avatar($user['ID'], 300); ?>
            <p class="caption">
              <span class="name"><?php echo $user['display_name']; ?></span>
              <span class="small"><?php echo $user['user_description']; ?></span>
            </p>
          </div>
        </div>

    <?php endforeach; ?>

  </div>
  <?php endif; ?>
  </div>
</section>
