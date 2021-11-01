<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name') ?></title>

  <!-- Icon CDN -->
  <script type="module" src="https://unpkg.com/ionicons@5.2.3/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule="" src="https://unpkg.com/ionicons@5.2.3/dist/ionicons/ionicons.js"></script>

  <?php wp_head(); ?>
</head>

<body>
  <div id = "header" class="header">
  <?php  
      wp_nav_menu( $args = array(
          'menu_class'        => "nav-links", // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
          'container'         => "div", // (string) Whether to wrap the ul, and what to wrap it with. Default 'div'.
          'container_id'      => "menu", // (string) The ID that is applied to the container.
          'theme_location'    => "primary", // (string) Theme location to be used. Must be registered with register_nav_menu() in order to be selectable by the user.
          'container_class'   => "", // (string) Class that is applied to the container. Default 'menu-{menu slug}-container'.
          'menu_id'           => "menu-primary", // (string) The ID that is applied to the ul element which forms the menu. Default is the menu slug, incremented.
      ) );
    ?>
  </div>