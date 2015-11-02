<?php use Roots\Sage\Nav; ?>

<header class="banner navbar navbar-default navbar-static-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <?php if (has_nav_menu('primary_navigation')) : ?>
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only"><?= __('Toggle navigation', 'sage'); ?></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <?php endif; ?>
      <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>">
        <svg version="1.1" id="qplogo" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
   viewBox="0 0 371.2 52.4" enable-background="new 0 0 371.2 52.4" xml:space="preserve">
          <g id="words">
            <path fill="#000000" d="M52.4,28.5c0,7.1-4,10.6-10.2,10.6c-6.1,0-10.1-3.5-10.1-10.4V15.1h4.2v13.4c0,4.4,2.3,6.8,6,6.8
              c3.7,0,5.9-2.2,5.9-6.6V15.1h4.2V28.5z"/>
            <path fill="#000000" d="M79.2,38.8h-4.4l-2.4-5.7H61.2l-2.4,5.7h-4.3L64.9,15h3.8L79.2,38.8z M66.8,19.9l-4.1,9.5h8.1L66.8,19.9z"
              />
            <path fill="#000000" d="M99.7,15.1h4.1v23.6h-3.5L87.3,22v16.8h-4.1V15.1h3.8l12.7,16.3V15.1z"/>
            <path fill="#000000" d="M119.9,38.8h-4.2V19h-7.5v-3.8h19.2V19h-7.5V38.8z"/>
            <path fill="#000000" d="M136.1,15.1v23.6H132V15.1H136.1z"/>
            <path fill="#000000" d="M160,18.9h-13.4v6.4h11.9v3.8h-11.9v9.6h-4.2V15.1H160V18.9z"/>
            <path fill="#000000" d="M169,15.1v23.6h-4.2V15.1H169z"/>
            <path fill="#000000" d="M192.8,18.8h-13.4V25h11.8v3.7h-11.8v6.3H193v3.7h-17.7V15.1h17.5V18.8z"/>
            <path fill="#000000" d="M206.7,38.8h-8.8V15.1h8.8c7.4,0,12.6,5.1,12.6,11.8C219.3,33.6,214.1,38.8,206.7,38.8z M206.7,18.9H202V35
              h4.7c5,0,8.2-3.3,8.2-8C214.9,22.3,211.7,18.9,206.7,18.9z"/>
            <path fill="#000000" d="M243.2,31.2h-4.7v7.6h-4.2V15.1h9.3c5.5,0,9,3.1,9,7.9C252.7,28.4,248.4,31.2,243.2,31.2z M243.4,18.9h-4.8
              v8.5h4.8c3.1,0,5.1-1.7,5.1-4.3C248.5,20.4,246.5,18.9,243.4,18.9z"/>
            <path fill="#000000" d="M256.9,15.1h4.2V35h12.4v3.8h-16.6V15.1z"/>
            <path fill="#000000" d="M300.4,38.8h-4.4l-2.4-5.7h-11.2l-2.4,5.7h-4.3L286.2,15h3.8L300.4,38.8z M288.1,19.9l-4.1,9.5h8.1
              L288.1,19.9z"/>
            <path fill="#000000" d="M321,15.1h4.1v23.6h-3.5l-13-16.8v16.8h-4.1V15.1h3.8L321,31.5V15.1z"/>
            <path fill="#000000" d="M348.7,18.8h-13.4V25h11.8v3.7h-11.8v6.3h13.5v3.7h-17.7V15.1h17.5V18.8z"/>
            <path fill="#000000" d="M363.8,38.8h-4.2V19h-7.5v-3.8h19.2V19h-7.5V38.8z"/>
          </g>
          <g id="symbol">
            <path stroke="#000000" stroke-width="0.1" stroke-miterlimit="10" d="M13.2,39.3C5.9,39.3,0,33.5,0,26.2s5.9-13.1,13.1-13.1
              S26.3,19,26.3,26.2S20.4,39.3,13.2,39.3z M22.3,26.2c0-5.1-4.1-9.2-9.2-9.2c-5.1,0-9.2,4.1-9.2,9.2s4.1,9.2,9.2,9.2
              C18.2,35.4,22.3,31.3,22.3,26.2z"/>
            <rect x="11.2" y="0" width="4" height="52.4"/>
            <rect x="18.4" y="22" transform="matrix(0.707 -0.7072 0.7072 0.707 -16.84 23.9045)" width="4" height="20.6"/>
          </g>
        </svg>
      </a>
    </div>

    <nav class="collapse navbar-collapse navbar-right" role="navigation">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new Nav\SageNavWalker(), 'menu_class' => 'nav navbar-nav']);
      endif;
      ?>
    </nav>
  </div>
</header>
