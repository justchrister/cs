<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/style.css"> <!-- stylesheet for this page -->
  <link href="https://fonts.googleapis.com/css?family=Mansalva&display=swap" rel="stylesheet">



	<?php wp_head(); ?>
</head>
  <body class="<?php global $post;echo $post->post_name;?>">
		<?php include 'flipper.php'; ?>
		<?php __back_btn(); ?>
    <div class="logo">
      <?php the_custom_logo();?>
    </div>
    <div class="menu">
      <div class="duvet"></div>
      <a class="burger">
        <span class="one"></span>
        <span class="two"></span>
        <span class="tre"></span>
      </a>
      <nav>
        <ul>
          <li>
            <a href="<?php echo get_site_url();?>/om-oss">HÆ?</a>
          </li>
          <li>
            <a href="<?php echo get_site_url();?>/crew">CREW</a>
          </li>
          <li>
            <a href="<?php echo get_site_url();?>/tjenester">TJENESTER</a>
          </li>
        </ul>
      </nav>
    </div>
