<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header class="l-header p-header">
    <div class="p-header__inner">
        <div class="p-header__logo">
            <img class="c-logo" src="<?php echo get_template_directory_uri() ?>/assets/img/common/logo.svg" alt="ロゴ">
        </div>
        <div class="p-hamburger__menu c-hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</header>
