<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="<?php echo esc_url(get_template_directory_uri()); ?>/img/favicon.ico" sizes="32x32">
    <title>en_Taku</title>
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/common.css" />
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/style.css" />
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/sp.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap"
      rel="stylesheet"
    />
  </head>
  <body class="close">
    <header>
      <a href="<?php echo esc_url(home_url('/')); ?>"><div class="logo header"></div></a>
      <ul class="main-nav">
        <li class="pc"><a href="<?php echo esc_url(get_template_directory_uri()); ?>/company">Company</a></li>
        <li class="slash pc"></li>
        <li class="pc"><a href="<?php echo esc_url(get_template_directory_uri()); ?>/liver">Livers</a></li>
        <li><a href="<?php echo esc_url(get_template_directory_uri()); ?>/contact">Contact</a></li>
        <li class="menu-icon sp" id="toggleBtn"><span></span></li>
      </ul>
    </header>
    <main>
      <div class="menu" id="menu-box">
        <ul class="sp_menu">
          <li><a href="<?php echo esc_url(get_template_directory_uri()); ?>/company">Company</a></li>
          <li><a href="<?php echo esc_url(get_template_directory_uri()); ?>/liver">Livers</a></li>
          <li><a href="<?php echo esc_url(get_template_directory_uri()); ?>/contact">Contact</a></li>
        </ul>
      </div>
      <?php wp_head(); ?>