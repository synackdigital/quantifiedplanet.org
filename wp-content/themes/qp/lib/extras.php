<?php

namespace Roots\Sage\Extras;

use Roots\Sage\Config;

/**
 * Add <body> classes
 */
function body_class($classes) {
  // Add page slug if it doesn't exist
  if (is_single() || is_page() && !is_front_page()) {
    if (!in_array(basename(get_permalink()), $classes)) {
      $classes[] = basename(get_permalink());
    }
  }

  // Add class if sidebar is active
  if (Config\display_sidebar()) {
    $classes[] = 'sidebar-primary';
  }

  // Add class if post-thumbnail is present
  if(current_theme_supports('post-thumbnails') && has_post_thumbnail()) {
    $classes[] = "has-featured-image";
  }

  return $classes;
}
add_filter('body_class', __NAMESPACE__ . '\\body_class');

/**
 * Clean up the_excerpt()
 */
function excerpt_more() {
  return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'sage') . '</a>';
}
add_filter('excerpt_more', __NAMESPACE__ . '\\excerpt_more');

/**
 * Insert custom colors in the ACF color picker
 */
function acf_admin_head() {
  ?>
  <script>
    (function($){
      acf.add_action('ready append', function() {
        acf.get_fields({ type : 'color_picker'}).each(function() {
          $(this).iris({
            palettes: ['#36bfae', '#2ca2dc', '#fabd0c', '#2e2e2e', '#6f6d6e', '#e4e4e4'],
            change: function(event, ui) {
              $(this).parents('.wp-picker-container').find('.wp-color-result').css('background-color', ui.color.toString());
            }
          });
        });
      });
    })(jQuery);
  </script>
  <?php
}

add_action('acf/input/admin_head', __NAMESPACE__ . '\\acf_admin_head');

/**
 * Disable the default editor for pages
 */
function remove_editor() {
  remove_post_type_support('page', 'editor');
}
add_action('admin_init', __NAMESPACE__ . '\\remove_editor');

/**
 * Allow SVG uploads
 */
function svg_mime_type($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', __NAMESPACE__ . '\\svg_mime_type');

function fix_svg_thumb_display() {
  echo '<style> td.media-icon img[src$=".svg"], img[src$=".svg"].attachment-post-thumbnail { width: 100% !important; height: auto !important; } </style>';
}
add_action('admin_head', __NAMESPACE__ . '\\fix_svg_thumb_display');

/**
 * Function for returning a user avatar url
 */
function get_avatar_url($get_avatar){
  preg_match("/src='(.*?)'/i", $get_avatar, $matches);
  return $matches[1];
}
