<div id="sidebar">

    <!-- Logo -->
    <img id="logo" src="<?php echo get_template_directory_uri(); ?>/images/spotify-logo.svg" />

    <!-- Navigation -->
    <?php  
      wp_get_nav_menu_items( "Navigation", $args = array(
          'menu_class'        => "nav-links", // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
          'container'         => "div", // (string) Whether to wrap the ul, and what to wrap it with. Default 'div'.
          'container_id'      => "menu", // (string) The ID that is applied to the container.
          'theme_location'    => "primary", // (string) Theme location to be used. Must be registered with register_nav_menu() in order to be selectable by the user.
          'container_class'   => "", // (string) Class that is applied to the container. Default 'menu-{menu slug}-container'.
          'menu_id'           => "menu-primary", // (string) The ID that is applied to the ul element which forms the menu. Default is the menu slug, incremented.
      ) );
    ?>
    <!-- <div id="nav">
        <div class="page-link-button active">
            <ion-icon name="home-sharp"></ion-icon>
            Home
        </div>
        <div class="page-link-button">
            <ion-icon name="search-sharp"></ion-icon>
            Search
        </div>
        <div class="page-link-button">
            <ion-icon name="library-sharp"></ion-icon>
            Your Library
        </div>
    </div> -->
</div>