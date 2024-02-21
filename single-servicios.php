<?php get_header() ?>

<div class="single-servicios">
    <div class="portada-servicios">
        <div class="breadcrumb-servicios">
            <?php echo do_shortcode("[breadcrumb]"); ?>
            <div class="contenido-descripcion">
                <div class="titulo-servicios">
                    <div class="titulo">
                        <?php fontawesome(get_field('icono_fontawesome')); ?>
                        <h1><?php the_title(); ?></h1>
                    </div>
                </div>
                <div class="descripcion-servicios">
                    <?php the_content() ?>
                    <a class="boton" href="http://localhost/implementech/inicia-tu-proyecto/">Iniciar Proyecto</a>'
                </div>
            </div>
        </div>
        <span></span>
        <?php the_post_thumbnail() ?>
    </div>

    <div class="informacion-servicios">
        <div class="col">

            <div class="beneficios">
                <div class="titulo-info">
                    <i class="fa-solid fa-check"></i>
                    <h3>Beneficios & Ventajas</h3>
                </div>
                <div class="info-beneficios">
                    <?php
                    $beneficios = get_field("beneficios_servicios");
                    $beneficios_array = explode("\n", $beneficios);
                    if (!empty($beneficios_array)) {
                        $total_elementos = count($beneficios_array);
                        $inicio = 1;
                        $finalizacion = $total_elementos - 2;
                        for ($i = $inicio; $i < $finalizacion; $i++) {
                            $beneficio = trim($beneficios_array[$i]);

                            if (!empty($beneficio)) {
                                echo '<div class="lista_beneficios"><i class="fa-solid fa-circle-check"></i> ' . $beneficio . '</div>';
                            }
                        }
                    } else {
                        echo "No hay elementos en la lista.";
                    }
                    ?>
                </div>
            </div>

            <div class="imagen-servicio">
                <?php the_post_thumbnail(); ?>
            </div>

            <div class="detalles">
                <div class="titulo-info">
                    <i class="fa-solid fa-screwdriver-wrench"></i>
                    <h3>Detalles Técnicos</h3>
                </div>
                <p><?php the_field("detalles_servicios") ?></p>
            </div>

            <div class="implementacion">
                <div class="titulo-info">
                    <i class="fa-solid fa-list-check"></i>
                    <h3>Información sobre el Proceso de Implementación</h3>
                </div>
                <p><?php the_field("implementacion_servicios") ?></p>
            </div>

            <div class="equipo">
                <div class="titulo-info">
                    <i class="fa-solid fa-clipboard-user"></i>
                    <h3>Información sobre el Equipo</h3>
                </div>
                <p><?php the_field("equipo_servicios") ?></p>
            </div>

            <div class="ejemplos">
                <div class="titulo-info">
                    <i class="fa-solid fa-book"></i>
                    <h3>Ejemplos Específicos</h3>
                </div>
                <p><?php the_field("ejemplos_servicios") ?></p>
            </div>

            <div class="otra-informacion">
                <div class="titulo-info">
                    <i class="fa-solid fa-circle-info"></i>
                    <h3>Otra Información Relevante</h3>
                </div>
                <div class="info_otra-informacion">
                    <ul>
                        <li><a href="">Precios y opciones de paquetes personalizados.</a></li>
                        <li><a href="">Tiempos de entrega estimados para diferentes tipos de proyectos.</a></li>
                        <li><a href="">Política de privacidad y seguridad de datos.</a></li>
                        <li><a href="">Contacto y formas de comunicación con nuestro equipo.</a></li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

    <aside class="proceso">
        <h3>Proceso de implementación</h3>
        <div class="grafico-proceso">
            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="37" viewBox="0 0 1142 37" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M37.8188 19.4892C37.2856 29.2072 29.2366 36.9231 19.3854 36.9231C9.18934 36.9231 0.923828 28.6576 0.923828 18.4615C0.923828 8.26551 9.18934 0 19.3854 0C28.9261 0 36.7766 7.23728 37.7462 16.5214C37.8287 16.5073 37.9135 16.5 38 16.5H376.333C377.313 7.22617 385.159 0 394.692 0C404.225 0 412.071 7.22617 413.051 16.5H743C743.113 16.5 743.224 16.5126 743.33 16.5363C744.292 7.24505 752.146 0 761.692 0C771.225 0 779.071 7.22617 780.051 16.5H1104C1104.07 16.5 1104.14 16.5052 1104.21 16.5153C1105.19 7.23409 1113.04 0 1122.57 0C1132.77 0 1141.04 8.26551 1141.04 18.4615C1141.04 28.6576 1132.77 36.9231 1122.57 36.9231C1112.73 36.9231 1104.68 29.2094 1104.14 19.4934C1104.09 19.4978 1104.05 19.5 1104 19.5H780.125C779.586 29.2129 771.54 36.9231 761.692 36.9231C751.837 36.9231 743.786 29.2012 743.258 19.4779C743.174 19.4924 743.088 19.5 743 19.5H413.125C412.586 29.2129 404.54 36.9231 394.692 36.9231C384.844 36.9231 376.798 29.2129 376.259 19.5H38C37.9387 19.5 37.8782 19.4963 37.8188 19.4892ZM410.154 18.4615C410.154 27.0007 403.231 33.9231 394.692 33.9231C386.153 33.9231 379.23 27.0007 379.23 18.4615C379.23 9.92237 386.153 3 394.692 3C403.231 3 410.154 9.92237 410.154 18.4615ZM777.154 18.4615C777.154 27.0007 770.231 33.9231 761.692 33.9231C753.153 33.9231 746.23 27.0007 746.23 18.4615C746.23 9.92237 753.153 3 761.692 3C770.231 3 777.154 9.92237 777.154 18.4615ZM1122.57 33.9231C1131.11 33.9231 1138.04 27.0007 1138.04 18.4615C1138.04 9.92237 1131.11 3 1122.57 3C1114.04 3 1107.11 9.92237 1107.11 18.4615C1107.11 27.0007 1114.04 33.9231 1122.57 33.9231Z" fill="url(#paint0_linear_1162_686)" />
                <defs>
                    <linearGradient id="paint0_linear_1162_686" x1="1141" y1="18" x2="1136.23" y2="-55.6069" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#B6C304" />
                        <stop offset="1" stop-color="#44F2B2" />
                    </linearGradient>
                </defs>
            </svg>
            <ul>
                <li>Inicio y Planificación</a>
                <li>Diseño y Configuración</a>
                <li>Ejecución y Desarrollo</a>
                <li>Pruebas y Entrega</a>
            </ul>
        </div>

    </aside>

    <div class="iniciar-proyecto fondo-transparente">
        <div class="titulo-descripcion">
            <h3>Listo para llevar tu proyecto al siguiente nivel</h3>
            <p>Comienza tu viaje digital con nosotros hoy mismo.</p>
        </div>
        <div class="botones">
            <a class="boton" href="//localhost/implementech/inicia-tu-proyecto/">Iniciar Proyecto</a>'
            <a href="" class="boton">Solicitar Consulta</a>
        </div>
    </div>

    <div class="otros-servicios">
        <?php
        $args = array(
            'post_type' => 'servicios',
            'order' => 'rand',
            'posts_per_page' => 4,
        );
        $the_query = new WP_Query($args);
        $servicio_actual = get_the_ID();
        ?>
        <?php if ($the_query->have_posts()) : ?>
            <h3>Otros servicios</h3>
            <div class="lista-servicios">
                <?php while ($the_query->have_posts()) : $the_query->the_post();
                    if (get_the_ID() !== $servicio_actual) {
                ?>
                        <a href="<?php the_permalink() ?>" class="fondo-transparente">
                            <div class="servicio">
                                <?php fontawesome(get_field('icono_fontawesome')); ?>
                                <h6><?php the_title() ?></h6>
                            </div>
                        </a>
                <?php
                    }
                endwhile;
                ?>
            </div>
        <?php
            wp_reset_postdata();
        endif;
        ?>
    </div>


</div>

<?php get_footer() ?>