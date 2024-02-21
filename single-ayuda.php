<?php get_header() ?>

<div class="single-ayuda">
    <?php get_template_part('template-parts/items-ayuda') ?>

    <div class="cont-info">
        <?php the_content(); ?>

        <div class="cont-cat_info">
            <?php $faq_tags = get_terms('post_tag', array('taxonomy' => 'post_tag', 'hide_empty' => false));

            // Recorre las etiquetas y muestra las secciones de FAQ
            foreach ($faq_tags as $tag) {
                $faqs = fetchFaqData('faq', $tag->slug);
                if ($faqs->have_posts()) {
                    echo '<section>';
                    displayFaqs($faqs, $tag->name);
                    echo '</section>';
                }
            }
            ?>
        </div>

    </div>
</div>

<?php get_footer() ?>