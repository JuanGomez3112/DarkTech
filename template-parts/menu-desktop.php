<div class="menu--header">
    <div class="ctn-logo">
        <?php the_custom_logo(); ?>
    </div>

    <!-- Menu -->
    <?php $config_menu = array(
        "container" => "nav",
        "container_class" => "nav--menu--header",
        "menu_class" => "menu--horizontal",
        "theme_location" => "menu-header-nav"
    );
    wp_nav_menu($config_menu); ?>
    <!-- Menu -->

    <a href="<?php the_permalink(60) ?>">¡Hazte Tech!</a>
    <i class="fa-solid fa-bars" id="bar-button"></i>
</div>