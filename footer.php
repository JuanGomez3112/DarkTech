<footer>
    <div class="seccion1">
        <?php $custom_logo_id = get_theme_mod('custom_logo');
        echo wp_get_attachment_image($custom_logo_id, 'logo-footer'); ?>
        <nav>
            <?php
            wp_nav_menu(array(
                'theme_location' => 'menu-footer',
                'container' => 'ul',
                'menu_class' => 'menu--principal--footer'
            ));
            ?>
        </nav>
    </div>
    <div class="seccion2">
        <div class="terminos--politicas">
            <a href="">Política de privacidad</a>
            <a href="">Términos y condiciones</a>
            <a href="">Código de conducta</a>
        </div>
        <div class="apps">
            <h6>Descarga la App en </h6>
            <div class="tiendas--apps">
                <a >
                    <i class="fa-brands fa-app-store-ios"></i>
                    <p>App Store</p>
                </a>
                <a>
                    <i class="fa-brands fa-google-play"></i>
                    <p>Google Play</p>
                </a>
            </div>
        </div>
    </div>
    <div class="seccion3">
        <?php get_template_part('template-parts/redes-sociales') ?>
        <p>&copy; <?php echo date('Y') ?> Todos los derechos reservados</p>
    </div>
</footer>
</div>

<?php wp_footer(); ?>
</body>

</html>