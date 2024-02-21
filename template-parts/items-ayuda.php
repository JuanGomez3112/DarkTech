<?php
$category = get_queried_object();
$args = array(
    'post_type' => 'ayuda',
    'name' => $category->slug,
    'posts_per_page' => 1
);
$help_posts = new WP_Query($args);
if ($help_posts->have_posts()) {
    while ($help_posts->have_posts()) {
        $help_posts->the_post(); ?>
        <div class="portada-items-ayuda">
            <div class="breadcrumb-search">
                <div class="breadcrumb-title">
                    <?php echo do_shortcode("[breadcrumb]"); ?>
                    <div class="titulo-icon">
                        <?php fontawesome(get_field('icono_fontawesome')); ?>
                        <h1><?php the_title(); ?></h1>
                    </div>
                </div>
                <div class="ctn-search">
                    <h2>¿Tienes preguntas o necesitas soporte técnico?</h2>
                    <p>Nuestra misión es resolver tus problemas tecnológicos de manera rápida y sencilla. En esta página, encontrarás toda la ayuda que necesitas para solucionar tus inquietudes.</p>
                    <div class="search-group">
                        <div class="search">
                            <input type="search" name="" id="" placeholder="Encuentra respuestas y soluciones aquí...">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </div>
                    </div>
                </div>
            </div>
            <span></span>
            <?php if (has_post_thumbnail()) {
                the_post_thumbnail();
            } else {
                echo '<img src="' . get_template_directory_uri() . '/img/ayuda/ayuda.jpg">';
            }
            ?>
        </div> <?php
            }
            wp_reset_postdata();
        } else {
                ?>
    <div class="portada-items-ayuda">
        <div class="breadcrumb-search">
            <div class="breadcrumb-title">
                <?php echo do_shortcode("[breadcrumb]"); ?>
                <div class="titulo-icon">
                    <h1><?php echo esc_html($category->name); ?></h1> <!-- Muestra el nombre de la categoría si no se encuentra un post relacionado -->
                </div>
            </div>
            <div class="ctn-search">
                <h2>¿Tienes preguntas o necesitas soporte técnico?</h2>
                <p>Nuestra misión es resolver tus problemas tecnológicos de manera rápida y sencilla. En esta página, encontrarás toda la ayuda que necesitas para solucionar tus inquietudes.</p>
                <div class="search-group">
                    <div class="search">
                        <input type="search" name="" id="" placeholder="Encuentra respuestas y soluciones aquí...">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                </div>
            </div>
        </div>
        <span></span>
        <?php if (has_post_thumbnail()) {
                the_post_thumbnail();
            } else {
                echo '<img src="' . get_template_directory_uri() . '/img/ayuda/ayuda.jpg">';
            } ?>
    </div>
<?php
        }
?>