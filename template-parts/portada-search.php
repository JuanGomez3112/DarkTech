<div class="portada-ayuda">
    <div class="breadcrumb-search">
        <?php get_template_part('template-parts/breadcrumb-search') ?>
        <div class="ctn-search">
            <h2>Descubre y Explora</h2>
            <p>Tu solución está preparada. ¿Podemos ayudarte a encontrar algo más?</p>
            <div class="search-group">
                <form class="search" id="frmSearch" role="search">
                    <input type="search" id="keywords" value="<?php echo get_search_query(); ?>" name="s"  placeholder="Encuentra lo que buscas aquí...">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </form>
            </div>
        </div>
    </div>
    <span></span>
    <?php if (has_post_thumbnail()) {
        the_post_thumbnail();
    } else {
        echo '<img src="' . get_template_directory_uri() . '/img/assets/search.jpg">';
    }
    ?>
</div>