<?php get_header() ?>

<section class="nosotros-page">
    <div class="title-resumen">
        <?php get_template_part('template-parts/breadcrumb-title') ?>
        <?php the_content() ?>
    </div>

    <div class="contenido-nosotros">
        <div class="col">
            <?php if (get_field('nuestro_enfoque')) : ?>
                <div class="info-nosotros">
                    <h3 class="sub-titulo">Nuestro Enfoque</h3>
                    <?php the_field('nuestro_enfoque') ?>
                </div>
            <?php endif; ?>

            <?php if (has_post_thumbnail()) : ?>
                <div class="img-nosotros">
                    <?php the_post_thumbnail() ?>
                </div>
            <?php endif; ?>

            <?php if (get_field('nuestro_compromiso')) : ?>
                <div class="info-nosotros">
                    <h3 class="sub-titulo">Nuestro Compromiso</h3>
                    <?php the_field('nuestro_compromiso') ?>
                </div>
            <?php endif; ?>

            <?php if (get_field('nuestra_historia')) : ?>
                <div class="info-nosotros">
                    <h3 class="sub-titulo">Nuestra Historia</h3>
                    <?php the_field('nuestra_historia') ?>
                </div>
            <?php endif; ?>



            <?php if (get_field('nuestra_mision')) : ?>
                <div class="info-nosotros">
                    <h3 class="sub-titulo">Nuestra Misión</h3>
                    <?php the_field('nuestra_mision') ?>
                </div>
            <?php endif; ?>

            <?php $imagen_secundaria = get_field('imagen_secundaria-nosotros');
            if (get_field('imagen_secundaria-nosotros')) : ?>
                <div class="img-nosotros">
                    <img src="<?php echo esc_url($imagen_secundaria['url']) ?>" alt="">
                </div>
            <?php endif; ?>

            <?php if (get_field('nuestra_vision')) : ?>
                <div class="info-nosotros">
                    <h3 class="sub-titulo">Nuestra Visión</h3>
                    <?php the_field('nuestra_vision') ?>
                </div>
            <?php endif; ?>

            <?php if (get_field('nuestra_valores')) : ?>
                <div class="info-nosotros">
                    <h3 class="sub-titulo">Nuestra Valores</h3>
                    <?php the_field('nuestra_valores') ?>
                </div>
            <?php endif; ?>

            <?php if (get_field('unete_a_nosotros')) : ?>
                <div class="info-nosotros">
                    <h3 class="sub-titulo">Únete a Nosotros</h3>
                    <?php the_field('unete_a_nosotros') ?>
                </div>
            <?php endif; ?>


        </div>
    </div>
</section>

<?php if (get_field('cta-nosotros')) : ?>
    <div class="fondo-transparente cta-nosotros">
        <div class="info-cta">
            <?php the_field('cta-nosotros') ?>
            <?php get_template_part('template-parts/redes-sociales') ?>
        </div>
    </div>
<?php endif; ?>


<?php get_footer() ?>