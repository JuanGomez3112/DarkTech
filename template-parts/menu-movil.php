<div class="menu-movil" >
    <a href="<?php the_permalink(60) ?>">¡Hazte Tech!</a>

    <!-- Menu -->
    <?php $config_menu = array(
        "container" => "nav",
        "container_class" => "nav--menu--header",
        "menu_class" => "menu--horizontal",
        "theme_location" => "menu-header-nav"
    );
    wp_nav_menu($config_menu); ?>
    <!-- Menu -->

</div>