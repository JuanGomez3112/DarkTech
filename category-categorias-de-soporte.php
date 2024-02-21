<?php get_header() ?>
<div class="categoria-de-soporte">
    <?php get_template_part('template-parts/items-ayuda') ?>

    <div class="contenido-soporte">
        <div class="contenido-post">
            <?php
            $category = get_queried_object();
            $post_with_category_name = get_page_by_title($category->name, OBJECT, 'ayuda');
            if ($post_with_category_name) {
                echo apply_filters('the_content', $post_with_category_name->post_content);
            }
            ?>
        </div>
        <?php
        $args = array(
            'post_type' => 'new-help',
            'category_name' => 'categorias-de-soporte',
            'order' => 'asc',
            'posts_per_page' => -1
        );
        $the_query = new WP_Query($args); ?>
        <?php if ($the_query->have_posts()) : ?>
            <div class="items-soportes">
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <a href="<?php the_permalink() ?>" class="fondo-transparente"><?php the_title() ?></a>
                <?php endwhile ?>
            </div>
        <?php wp_reset_postdata();
        endif; ?>
    </div>
</div>

<?php get_footer() ?>