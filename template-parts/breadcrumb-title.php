<div class="breadcrumb-title">
    <?php echo do_shortcode("[breadcrumb]"); 
    if (is_category()) {
        // Si es una categoría, muestra el título de la categoría
        echo '<h1>' . single_cat_title('', false) . '</h1>';
    } elseif (is_single() || is_page()) {
        // Si es un post o una página, muestra el título del post o la página
        echo '<h1>' . get_the_title() . '</h1>';
    } else {
        // Si no se cumple ninguna de las condiciones anteriores, puedes hacer algo más
        echo '<h1>Título predeterminado</h1>';
    }
    ?>
</div>