<?php
  while (have_posts()) : the_post();

    if (get_field('title_visibility') !== 'hidden')
      get_template_part('templates/page', 'header');

    if (get_the_content())
      get_template_part('templates/content', 'page');

    if (have_rows('page_sections')) :
      while (have_rows('page_sections')) : the_row();
        switch (get_row_layout()) :
          case 'textblock' :
            get_template_part('templates/acf', 'textblock');
            break;
          case 'wysiwyg' :
            get_template_part('templates/acf', 'wysiwyg');
            break;
          endswitch;
      endwhile;
    endif;

  endwhile;
?>
