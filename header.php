<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <?php wp_head(); ?>
</head>

<body>
    <div class="full-page">
        <header>
            <div class="options-bar" id="optionsBar">
                    <div class="option">
                        <!-- Phone -->
                        <div class="icon-option">
                            <i class="fa-solid fa-phone"></i>
                            <?php
                            $phone_number_raw = get_theme_mod('phone_number', '');
                            $phone_number_clean = preg_replace('/[^0-9]/', '', $phone_number_raw);
                            ?>
                            <a href="tel:<?php echo esc_attr($phone_number_clean); ?>" target="_blank" >
                                <?php echo esc_html($phone_number_raw); ?>
                            </a>
                        </div>

                        <!-- Email -->
                        <div class="icon-option">
                            <i class="fa-solid fa-envelope"></i>
                            <a href="mailto:<?php echo esc_attr(get_theme_mod('email_address', '')); ?>" target="_blank"><?php echo esc_html(get_theme_mod('email_address', '')); ?></a>
                        </div>

                        <!-- Business Hours -->
                        <div class="icon-option">
                            <i class="fa-solid fa-clock"></i>
                            <p><?php echo esc_html(get_theme_mod('business_hours', '')); ?></p>
                        </div>

                        <!-- Search Form -->
                        <form class="icon-option" id="frmSearch" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
                            <i class="fa-solid fa-magnifying-glass"></i>
                            <input type="search" id="keywords" placeholder="<?php echo esc_attr(get_theme_mod('search_placeholder', 'Search...')); ?>" value="<?php echo get_search_query(); ?>" name="s">
                        </form>
                    </div>
                <?php get_template_part('template-parts/redes-sociales') ?>
            </div>
            <?php get_template_part('template-parts/menu-desktop') ?>
            <?php get_template_part('template-parts/menu-movil') ?>
        </header>

        <main>