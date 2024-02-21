<?php get_header() ?>

<section class="seccion-proyecto">
    <div class="portada-proyecto">
        <div class="breadcrumb-proyecto">
            <?php get_template_part('template-parts/breadcrumb-title') ?>
            <div class="contenido-proyecto">
                <div class="descripcion-subtitulo">
                    <h3>¿Listo para Transformar tu Negocio?</h3>
                    <?php the_content() ?>
                </div>
                <?php echo do_shortcode('[ws_form id="2"]'); ?>
            </div>
        </div>
        <span></span>
        <?php the_post_thumbnail() ?>
    </div>
</section>

<?php get_footer() ?>