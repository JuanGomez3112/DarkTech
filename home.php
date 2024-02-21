<?php get_header() ?>

<!-- Hero Title -->
<?php
$args = array(
    'post_type' => 'post',
    'tag' => 'hero-title',
    'order' => 'desc',
    'posts_per_page' => 1
);

$the_query = new WP_Query($args);

if ($the_query->have_posts()) : ?>
    <section class="hero-title">
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

            <div class="cont-title">
                <h2><?php the_title(); ?></h2>
                <?php the_content(); ?>
                <?php $enlace_1 = get_field('enlace_1');
                if ($enlace_1) :
                    echo '<a class="boton" href="' . esc_url($enlace_1['url']) . '">' . esc_html($enlace_1['title']) . '</a>';
                endif; ?>
            </div>
            <div class="cont-img">
                <?php the_post_thumbnail(); ?>
            </div>

        <?php
        endwhile;
        wp_reset_postdata(); ?>
    </section>
<?php endif; ?>
<!-- Hero Title -->


<!-- ¿Por qué elegirnos? -->
<?php
$args = array(
    'post_type' => 'post',
    'tag' => 'porque-elegirnos',
    'order' => 'asc',

);
$the_query = new WP_Query($args);
if ($the_query->have_posts()) : ?>
    <section class="porque-elegirnos">
        <h3>¿Por qué elegirnos?</h3>
        <div class="opciones">
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <div class="opcion">
                    <a href="<?php the_permalink() ?>">
                        <?php fontawesome(get_field('icono_fontawesome')); ?>
                        <h6><?php the_title() ?></h6>
                    </a>
                    <p><?php echo excerpt('24'); ?></p>

                </div>
            <?php endwhile ?>
        </div>
    </section>
<?php wp_reset_postdata();
endif; ?>
<!-- ¿Por qué elegirnos? -->

<!-- Slide de Marcas  -->
<section class="slide-marcas">
    <img src="<?php echo get_template_directory_uri();  ?>/img/assets/lineas-curvas.png" alt="">
    <?php echo do_shortcode('[logocarousel id="182"]'); ?>
</section>
<!-- Slide de Marcas  -->


<!-- Soluciones Para Empresas -->
<?php
$args = array(
    'post_type' => 'post',
    'tag'   =>     'servicios',
    'order' => 'desc',
    'posts_per_page' => 1
);

$the_query = new WP_Query($args);

if ($the_query->have_posts()) : ?>
    <section class="servicios-index">
        <span></span>
        <div class="info">
            <h3><?php the_title(); ?></h3>
            <div class="contenido">
                <?php the_content(); ?>
            </div>
            <a class="boton" href="<?php echo get_category_link(4); ?>">Más Servicios</a>
        </div>
        <div class="cnt-servicios-index">
            <?php
            $args = array(
                'post_type' => 'servicios',
                'order' => 'asc',
                'posts_per_page' => 4
            );
            $servicios_query = new WP_Query($args);
            if ($servicios_query->have_posts()) : ?>
                <?php
                $service_count = 1;
                while ($servicios_query->have_posts()) : $servicios_query->the_post(); ?>
                    <a href="<?php the_permalink() ?>" class="servicio fondo-transparente servicio-<?php echo $service_count; ?>">
                        <?php fontawesome(get_field('icono_fontawesome')); ?>
                        <h5><?php the_title(); ?></h5>
                    </a>
                <?php $service_count++;
                endwhile; ?>
            <?php endif;
            wp_reset_postdata();
            ?>
        </div>

    </section>
<?php endif; ?>
<!-- Soluciones Para Empresas -->


<!-- Testimonios De Clientes  -->
<?php mostrar_testimonios_con_carrusel(); ?>
<!-- Testimonios De Clientes  -->


<!-- CTA -->
<section class="fondo-transparente cta-index">
    <span></span>
    <div class="cont-cta">
        <div class="frase-cta">
            <h3>¿Listo para descubrir cómo nuestra tecnología puede transformar tu negocio?</h3>
            <p>Solicita una consulta gratuita o una demostración personalizada hoy mismo y déjanos mostrarte el futuro en acción.</p>
        </div>
        <div class="botones-cta">
        <?php $phone_number_raw = get_theme_mod('phone_number', '');
        $phone_number_clean = preg_replace('/[^0-9]/', '', $phone_number_raw); ?>
            <a class="boton" href="https://api.whatsapp.com/send?phone=<?php echo esc_attr($phone_number_clean); ?>&text=Hola%2C%20Me%20encantar%C3%ADa%20agendar%20una%20consulta%20para%20explorar%20posibles%20soluciones%20tecnol%C3%B3gicas.%20%C2%BFSer%C3%ADa%20posible%20coordinar%20una%20reuni%C3%B3n%3F%20%C2%A1Gracias!%0A"><i class="fa-brands fa-whatsapp"></i>¡Agenda tu Consulta!</a>
            <a class="boton" href="">Ver la Tecnología en Acción</a>
        </div>
    </div>
</section>
<!-- CTA -->


<?php get_footer() ?>