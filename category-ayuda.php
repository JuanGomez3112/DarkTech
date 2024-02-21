<?php get_header() ?>

<div class="category-ayuda">
    <?php get_template_part('template-parts/portada-ayuda') ?>

    <div class="items-ayuda">
        <?php
        $args = array(
            'post_type' => 'ayuda',
            'category_name' => 'ayuda',
            'order' => 'asc',

        );
        $the_query = new WP_Query($args); ?>
        <?php if ($the_query->have_posts()) :  ?>
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <a href="<?php the_permalink(); ?>" class="fondo-transparente">
                    <div class="contenido-items">
                        <?php fontawesome(get_field('icono_fontawesome')); ?>
                        <h5><?php the_title() ?></h5>
                    </div>
                </a>
            <?php endwhile ?>
        <?php endif; 
        wp_reset_postdata(); ?>
    </div>
</div>

<?php get_footer() ?>