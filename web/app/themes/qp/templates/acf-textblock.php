<?php
  switch (get_sub_field('layout')) :
    case 'left':
    default:
      $colClasses = 'col-xs-12 col-sm-10 col-md-8 col-lg-6';
    break;
    case 'center':
      $colClasses = 'col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3';
    break;
    case 'right':
      $colClasses = 'col-xs-12 col-sm-10 col-sm-offset-2 col-md-8 col-md-offset-4 col-lg-6 col-lg-offset-6';
    break;
  endswitch;
?>

<div class="acf-textblock row">
  <div class="<?php echo $colClasses.' '.get_sub_field('size'); ?>" style="color:<?php the_sub_field('color'); ?>">
    <?php the_sub_field('text'); ?>
  </div>
</div>
