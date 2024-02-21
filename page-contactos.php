<?php get_header() ?>

<section class="seccion-contactos">
    <div class="landing-contactos">
        <div class="contenido-landing">
            <div class="breadcrumb-contactos">
                <?php get_template_part('template-parts/breadcrumb-title') ?>
            </div>
            <div class="ctn-contenido">
                <div class="col">
                    <h2>¿Listo para Transformar tu Negocio?</h2>
                    <p>"En Implemetech, estamos siempre listos para escuchar tus preguntas, sugerencias y comentarios mientras te acompañamos en el camino de convertirte en un Tech. ¡Conéctate con nosotros y juntos exploraremos el emocionante futuro de la tecnología!"</p>
                    <div class="botones-contactos">
                        <a href="#mapa" class="boton">
                            <i class="fa-solid fa-location-dot"></i>
                            Ubicación en el Mapa</label>
                        </a>
                        <a class="boton">
                            <i class="fa-solid fa-comments"></i>
                            <label for="wsf-1-field-1">Contactarnos</label>
                        </a>
                    </div>
                </div>
                <div class="col" id="col-form">
                    <h2>Conversemos sobre tu proyecto</h2>
                    <?php echo do_shortcode('[ws_form id="1"]'); ?>
                </div>

                <div class="ctn-redes">
                    <p>Conéctate con Nosotros</p>
                    <?php get_template_part('template-parts/redes-sociales') ?>
                </div>
            </div>

        </div>
        <span></span>
        <?php the_post_thumbnail() ?>
    </div>

    <div class="mapa" id="mapa">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3784.030926940158!2d-70.05102302372293!3d18.48225827034125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8eaf8b0c64552a9b%3A0x22434e39bdb2f382!2sDarlin%20Implementech!5e0!3m2!1ses!2sdo!4v1697156321355!5m2!1ses!2sdo" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <div class="informacion-contacto">
        <!-- Maps -->
        <a href="https://maps.app.goo.gl/u4db14p3MwCPmuWp7" target="_blank" class="fondo-transparente">
            <i class="fa-solid fa-location-dot"></i>
            <p>Buenas Noches #48, Hato Nuevo, Santo Domingo Oeste, Rep. Dom.</p>
        </a>

        <!-- Phone -->
        <?php $phone_number_raw = get_theme_mod('phone_number', '');
        $phone_number_clean = preg_replace('/[^0-9]/', '', $phone_number_raw); ?>
        <a href="tel:<?php echo esc_attr($phone_number_clean); ?>" target="_blank" class="fondo-transparente">
            <i class="fa-solid fa-phone"></i>
            <p><?php echo esc_html($phone_number_raw); ?></p>
        </a>

        <!-- Email -->
        <a href="mailto:<?php echo esc_attr(get_theme_mod('email_address', '')); ?>" target="_blank" class="fondo-transparente">
            <i class="fa-solid fa-envelope"></i>
            <p><?php echo esc_html(get_theme_mod('email_address', '')); ?></p>
        </a>
    </div>
</section>

<?php get_footer() ?>