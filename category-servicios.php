<?php get_header() ?>


<?php
$args = array(
    'post_type' => 'servicios',
    'order' => 'asc',

);
$the_query = new WP_Query($args); ?>
<?php if ($the_query->have_posts()) : ?>
    <section class="servicios">
    <?php get_template_part('template-parts/breadcrumb-title') ?>
        <div class="ctn-servicios">
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <div class="servicio fondo-transparente">
                    <div class="icons">
                        <?php fontawesome(get_field('icono_fontawesome')); ?>
                        <a href="<?php the_permalink() ?>">
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                    <div class="info">
                        <h3><?php the_title() ?></h3>
                        <p><?php echo excerpt('12'); ?></p>
                    </div>
                </div>
            <?php endwhile ?>
        </div>
    </section>
<?php wp_reset_postdata();
endif; ?>

<?php get_footer() ?>