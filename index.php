<!DOCTYPE html>
<html>
  <head>
    <title> VI VIL SAMARBEIDE! - Citrus Studio</title> <!-- Set the title of the page, this shows up in google etc. as well -->



    <link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('template_directory'); ?>/media/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('template_directory'); ?>/media/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_directory'); ?>/media/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('template_directory'); ?>/media/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_directory'); ?>/media/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_directory'); ?>/media/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_directory'); ?>/media/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('template_directory'); ?>/media/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_directory'); ?>/media/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?php bloginfo('template_directory'); ?>/media/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_directory'); ?>/media/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo('template_directory'); ?>/media/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_directory'); ?>/media/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php bloginfo('template_directory'); ?>/media/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#00f">
    <meta name="msapplication-TileImage" content="<?php bloginfo('template_directory'); ?>/media/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#00f">

    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/style.css"> <!-- stylesheet for this page -->

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="msapplication-TileColor" content="#00f">
    <meta name="theme-color" content="#00f">
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@christerwaters" />
    <meta name="twitter:creator" content="@christerwaters" />
    <meta property="og:url" content="https://wtrs.dev" />
    <meta property="og:title" content="Christer Waters - WTRS.dev - Freelance Designer & Developer" />
    <meta property="og:description" content="I build human-friendly websites, always optimized for search-engines and any device. I also create artworks in the form of still and moving imagry (video and photo)." />


  </head>
  <body>
    <div class="loader">
      <img src="<?php bloginfo('template_directory'); ?>/media/focus.png">
      <div class="citrus-loader" id="floater-1">
        <img src="<?php bloginfo('template_directory'); ?>/media/primary.png">
      </div>
    </div>
    <div class="h-p-header">
      <div class="text">
        <div class="line01">vi ønsker å redefinere</div>
        <div class="line02">forholdet mellom kreative</div>
        <div class="line03">aktører. vi ønsker ikke </div>
        <div class="line04">å konkurrere, men </div>
        <div class="line05">å samarbeide.</div>
      </div>
    </div>
    <div class="menu">
      <div class="menu-inner">
        <a href="<?php echo get_site_url();?>">
          <img class="emblem" src="<?php bloginfo('template_directory'); ?>/media/focus.png">
        </a>
        <a href="<?php echo get_site_url();?>">
          <div class="logotype">CITRUS <span class="hide-xs">STUDIO</span></div>
        </a>
        <div class="mi" id="one">
          <a href="<?php echo get_site_url();?>/hæ?">Hæ?</a>
        </div>
        <div class="mi" id="two">
          <a href="<?php echo get_site_url();?>/team">Team</a>
        </div>
        <div class="mi" id="three">
          <a href="<?php echo get_site_url();?>/kontakt">
            <button class="btn">
              Kontakt <span class="hide-xs">Oss</span>
            </button>
          </a>
        </div>
        <div class="logo">
          <span>
            CITRUS STUDIO
          </span>
        </div>
      </div>
    </div>
    <div class="site-wrap">
      <div class="site">
        <div class="start-collab-btn">
          <a href="<?php echo get_site_url();?>/kontakt">
            <button class="btn center">
              Kontakt Oss
            </button>
          </a>
          <img src="<?php bloginfo('template_directory'); ?>/media/match.png" class="psst">
        </div>
        <!-- Get everything right before </body> tag -->
      <?php
       include 'core/loop_users.php';
      ?>
      <?php
        include 'core/loop_pages.php';
      ?>
      <!-- Get everything right before </body> tag -->
    <?php
     include 'core/loop_portfolio.php';
    ?>
    <!-- Get all the pages -->
      </div>
    </div>
<?php
  include 'core/get_bottom.php';
?>
