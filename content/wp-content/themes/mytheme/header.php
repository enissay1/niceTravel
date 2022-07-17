<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <?php
    wp_nav_menu([
   'theme_location' => 'header',
   'container' => false,
   'menu_class' => 'navbar-nav mr-auto'
    ]); ?>
      <form class="d-flex" role="search">
        <?= get_search_form() ?>
      </form>
    </div>
  </div>
</nav>
    <div class="container">