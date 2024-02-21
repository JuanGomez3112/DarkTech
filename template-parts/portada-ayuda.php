<div class="portada-ayuda">
    <div class="breadcrumb-search">
        <?php get_template_part('template-parts/breadcrumb-title') ?>
        <div class="ctn-search">
            <h2>¿Tienes preguntas o necesitas soporte técnico?</h2>
            <p>Nuestra misión es resolver tus problemas tecnológicos de manera rápida y sencilla. En esta página, encontrarás toda la ayuda que necesitas para solucionar tus inquietudes.</p>
            <div class="search-group">
                <form class="search" id="frmSearch" role="search">
                    <input type="search" id="keywords" value="<?php echo get_search_query(); ?>" name="s" placeholder="Encuentra respuestas y soluciones aquí...">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </fo>
            </div>
        </div>
    </div>
    <span></span>
    <?php if (has_post_thumbnail()) {
        the_post_thumbnail();
    } else {
        echo '<img src="' . get_template_directory_uri() . '/img/assets/ayuda.jpg">';
    }
    ?>
</div>