<?php get_header(); ?>

<section class="search">
    <?php get_template_part('template-parts/portada-search'); ?>

    <section class="resultados-search">
        <h3>Resultados de la búsqueda: "<?php echo esc_html(get_search_query()); ?>"</h3>
        <?php if (have_posts()) :
            $total_results = $wp_query->found_posts; ?>
            <p>Total encontrados: <?php echo esc_html($total_results); ?></p>

            <div class="items-resultados">
                <?php while (have_posts()) : the_post(); ?>
                    <a class="resultado-item" href="<?php the_permalink(); ?>">
                        <div class="img-resultados">
                            <?php if (has_post_thumbnail()) {
                                the_post_thumbnail();
                            } else {
                                echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/assets/search-img.jpg">';
                            } ?>
                        </div>
                        <div class="info-resultados fondo-transparente">
                            <h4 class="entry-title"><?php the_title(); ?></h4>
                            <p><?php echo esc_html(wp_trim_words(get_the_excerpt(), 20)); ?></p>
                        </div>
                    </a>
                <?php endwhile; ?>
            </div>

        <?php else : ?>
            <p>No se encontraron resultados.</p>
        <?php endif; ?>
    </section>

</section>

<?php get_footer(); ?>
