<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
</head>

<body>
  <header class="media__header">
    <div class="header__logo">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="article-logo">
        <img src="<?php echo get_template_directory_uri(); ?>/img/estramedia__logo.png" alt="logo">
      </a>
    </div>
    <nav class="header__nav nav" id="nav">
      <ul class="flex__item">
        <li class="nav__list"><a href="<?php echo esc_url(home_url('/')); ?>category/html" class="nav__link">HTML</a>
        </li>
        <li class="nav__list"><a href="<?php echo esc_url(home_url('/')); ?>category/css" class="nav__link">CSS</a></li>
        <li class="nav__list"><a href="<?php echo esc_url(home_url('/')); ?>category/javascript"
            class="nav__link">JavaScript</a></li>
        <li class="nav__list"><a href="<?php echo esc_url(home_url('/')); ?>category/php" class="nav__link">PHP</a></li>
        <li class="nav__list"><a href="<?php echo esc_url(home_url('/')); ?>category/mysql" class="nav__link">MySQL</a>
        </li>
      </ul>
    </nav>
    <div class="nav_menu" id="menu">
      <span class="menu__line--top"></span>
      <span class="menu__line--middle"></span>
      <span class="menu__line--bottom"></span>
    </div>
  </header>