<?php

/**
 * Functions and definitions
 *
 * @link https://dihensen.do/themes
 *
 * @since Darktech Implementech 2.0
 */


if (!function_exists('darktech_setup')) {
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     *
     * @since Darktech Implementech 2.0
     * 
     *
     * @return void
     */
    function darktech_setup()
    {

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
		 * Let WordPress manage the document title.
		 * This theme does not use a hard-coded <title> tag in the document head,
		 * WordPress will provide it for us.
		 */
        add_theme_support('title-tag');

        /**
         * Add post-formats support.
         */
        add_theme_support(
            'post-formats',
            array(
                'link',
                'aside',
                'gallery',
                'image',
                'quote',
                'status',
                'video',
                'audio',
                'chat',
            )
        );

        /*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * https://dihensen.do/themes
		 */
        add_theme_support('post-thumbnails');

        register_nav_menus(
            array(
                'menu-header-nav' => __('Menu Header'),
                'menu-footer' => __('Menu Footer')
            )
        );

        /*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
        add_theme_support(
            'html5',
            array(
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'style',
                'script',
                'navigation-widgets',
            )
        );

        /*
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
        $logo_width  = 64;
        $logo_height = 64;

        add_theme_support(
            'custom-logo',
            array(
                'height'               => $logo_height,
                'width'                => $logo_width,
                'flex-width'           => true,
                'unlink-homepage-logo' => false,
            )
        );

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');

        // Add support for Block Styles.
        add_theme_support('wp-block-styles');

        // Add support for full and wide align images.
        add_theme_support('align-wide');




        /*
		* Adds starter content to highlight the theme on fresh sites.
		* This is done conditionally to avoid loading the starter content on every
		* page load, as it is a one-off operation only needed once in the customizer.
		*/


        // Add support for responsive embedded content.
        add_theme_support('responsive-embeds');

        // Add support for custom line height controls.
        add_theme_support('custom-line-height');

        // Add support for link color control.
        add_theme_support('link-color');

        // Add support for experimental cover block spacing.
        add_theme_support('custom-spacing');

        // Add support for custom units.
        // This was removed in WordPress 5.6 but is still required to properly support WP 5.5.
        add_theme_support('custom-units');

        // Remove feed icon link from legacy RSS widget.
        add_filter('rss_widget_feed_link', '__return_empty_string');


        function darktech_scripts_styles()
        {
            // Estilos
            wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css', array(), '1.0.0');
            wp_enqueue_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css', array(), '6.4.2');
            wp_enqueue_style('slick', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array(), '1.8.1');
            wp_enqueue_style('slick-theme', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css', array(), '1.8.1');

            wp_deregister_script('jquery');
            wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js', array(), '3.6.0', true);
            wp_enqueue_script('slick', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), '1.8.1', true);
            wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array('jquery', 'slick'), '1.0.0', true);
        }
        add_action('wp_enqueue_scripts', 'darktech_scripts_styles');



        function agregar_opciones_de_personalizacion($wp_customize)
        {
            // Sección para opciones de color
            $wp_customize->add_section('paleta_de_colores', array(
                'title' => 'Paleta de Colores',
                'priority' => 30,
            ));

            // Opción para el color principal
            $wp_customize->add_setting('color_principal', array(
                'default' => '#000033',
                'sanitize_callback' => 'sanitize_hex_color',
            ));

            $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'color_principal', array(
                'label' => 'Color Principal',
                'section' => 'paleta_de_colores',
                'settings' => 'color_principal',
            )));

            // Opción para el color secundario
            $wp_customize->add_setting('color_secundario', array(
                'default' => '#B6C304',
                'sanitize_callback' => 'sanitize_hex_color',
            ));

            $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'color_secundario', array(
                'label' => 'Color Secundario',
                'section' => 'paleta_de_colores',
                'settings' => 'color_secundario',
            )));

            // Opción para el color de fondo
            $wp_customize->add_setting('color_fondo', array(
                'default' => '#EDF6F9',
                'sanitize_callback' => 'sanitize_hex_color',
            ));

            $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'color_fondo', array(
                'label' => 'Color de Fondo',
                'section' => 'paleta_de_colores',
                'settings' => 'color_fondo',
            )));

            // Opción para el color terciario
            $wp_customize->add_setting('color_terciario', array(
                'default' => '#110BBF',
                'sanitize_callback' => 'sanitize_hex_color',
            ));

            $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'color_terciario', array(
                'label' => 'Color Terciario',
                'section' => 'paleta_de_colores',
                'settings' => 'color_terciario',
            )));

            // Opción para el color contraste
            $wp_customize->add_setting('color_contraste', array(
                'default' => '#44F2B2',
                'sanitize_callback' => 'sanitize_hex_color',
            ));

            $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'color_contraste', array(
                'label' => 'Color de Contraste',
                'section' => 'paleta_de_colores',
                'settings' => 'color_contraste',
            )));
        }
        add_action('customize_register', 'agregar_opciones_de_personalizacion');


        function agregar_css_personalizado()
        {
            $color_principal = get_theme_mod('color_principal', '#000033');
            $color_secundario = get_theme_mod('color_secundario', '#B6C304');
            $color_contraste = get_theme_mod('color_contraste', '#44F2B2');
            $color_fondo = get_theme_mod('color_fondo', '#EDF6F9');
            $color_terciario = get_theme_mod('color_terciario', '#110BBF');
            

            // Otras variables de color que desees
            $css_personalizado = "
            :root {
                --color-principal: $color_principal;
                --color-secundario: $color_secundario;
                --color-contraste: $color_contraste;
                --color-fondo: $color_fondo;
                --color-terciario: $color_terciario;
                -
                /* Define más variables de color aquí */ ";

            wp_add_inline_style('style', $css_personalizado);
        }

        add_action('wp_enqueue_scripts', 'agregar_css_personalizado');

        function my_customizer_options($wp_customize)
        {
            // Sección de contacto
            $wp_customize->add_section('contact_section', array(
                'title' => __('Información de contacto', 'text-domain'),
                'priority' => 30,
            ));

            // Opción para el número de teléfono
            $wp_customize->add_setting('phone_number', array(
                'default' => '',
                'sanitize_callback' => 'sanitize_text_field',
            ));

            $wp_customize->add_control('phone_number', array(
                'label' => __('Número de teléfono', 'text-domain'),
                'section' => 'contact_section',
                'type' => 'text',
            ));

            // Opción para la dirección de correo electrónico
            $wp_customize->add_setting('email_address', array(
                'default' => '',
                'sanitize_callback' => 'sanitize_email',
            ));

            $wp_customize->add_control('email_address', array(
                'label' => __('Dirección de correo electrónico', 'text-domain'),
                'section' => 'contact_section',
                'type' => 'email',
            ));

            // Opción para el horario de atención
            $wp_customize->add_setting('business_hours', array(
                'default' => '',
                'sanitize_callback' => 'sanitize_text_field',
            ));

            $wp_customize->add_control('business_hours', array(
                'label' => __('Horario de atención', 'text-domain'),
                'section' => 'contact_section',
                'type' => 'text',
            ));

            // Opción para el marcador de posición del formulario de búsqueda
            $wp_customize->add_setting('search_placeholder', array(
                'default' => 'Buscar...',
                'sanitize_callback' => 'sanitize_text_field',
            ));

            $wp_customize->add_control('search_placeholder', array(
                'label' => __('Marcador de posición del formulario de búsqueda', 'text-domain'),
                'section' => 'contact_section',
                'type' => 'text',
            ));
        }

        add_action('customize_register', 'my_customizer_options');

        function excerpt($limit)
        {
            $excerpt = explode(' ', get_the_excerpt(), $limit);
            array_pop($excerpt);
            $excerpt = implode(" ", $excerpt) . '...';
            $excerpt = preg_replace('`[[^]]*]`', '', $excerpt);
            return $excerpt;
        };

        function fontawesome($icon_name)
        {
            $icon_name = get_field('icono_fontawesome');
            if (!empty($icon_name)) {
                echo '<i class="fa-solid fa-' . esc_attr($icon_name) . '"></i>';
            }
        };


        function fetchFaqData($category, $tag)
        {
            $args = array(
                'post_type' => 'new-help',
                'category_name' => $category,
                'tag' => $tag,

            );
            return new WP_Query($args);
        }

        function displayFaqs($faqs, $tagName)
        {
            if ($faqs->have_posts()) {
                echo '<h4>' . $tagName . ':</h4>'; // Título refleja el nombre de la etiqueta
                echo '<div class="ctn-dropdown fondo-transparente">';
                while ($faqs->have_posts()) {
                    $faqs->the_post();
                    echo '<div class="ctn-pregunta">';
                    echo '<div class="title-pregunta" id="drop-on-' . get_the_ID() . '">';
                    echo '<h5>' . get_the_title() . '</h5>';
                    echo '<i class="fa-solid fa-caret-right"></i>';
                    echo '</div>';
                    echo '<div class="contenido-pregunta">';
                    the_content();
                    echo '</div>';
                    echo '</div>';
                }
                echo '</div>';
            }
            wp_reset_postdata();
        }

        require_once get_template_directory() . '/includes/widgets.php';

        // Añadir soporte para opciones de tema personalizadas
        add_action('customize_register', 'personalizar_redes_sociales');

        function personalizar_redes_sociales($wp_customize)
        {
            // Sección de redes sociales
            $wp_customize->add_section('redes_sociales', array(
                'title' => 'Redes Sociales',
                'priority' => 30,
            ));

            // Campo para Facebook
            $wp_customize->add_setting('facebook_url', array(
                'default' => '',
                'sanitize_callback' => 'esc_url_raw',
            ));

            $wp_customize->add_control('facebook_url', array(
                'label' => 'URL de Facebook',
                'section' => 'redes_sociales',
                'type' => 'text',
            ));

            // Campo para Instagram
            $wp_customize->add_setting('instagram_url', array(
                'default' => '',
                'sanitize_callback' => 'esc_url_raw',
            ));

            $wp_customize->add_control('instagram_url', array(
                'label' => 'URL de Instagram',
                'section' => 'redes_sociales',
                'type' => 'text',
            ));

            // Campo para Twitter
            $wp_customize->add_setting('twitter_url', array(
                'default' => '',
                'sanitize_callback' => 'esc_url_raw',
            ));

            $wp_customize->add_control('twitter_url', array(
                'label' => 'URL de Twitter',
                'section' => 'redes_sociales',
                'type' => 'text',
            ));

            // Campo para Linkedin
            $wp_customize->add_setting('linkedin_url', array(
                'default' => '',
                'sanitize_callback' => 'esc_url_raw',
            ));

            $wp_customize->add_control('linkedin_url', array(
                'label' => 'URL de Linkedin',
                'section' => 'redes_sociales',
                'type' => 'text',
            ));
        }


        // ---------------------



        // Función para obtener las URL de las redes sociales desde las opciones del tema
        function obtener_redes_sociales()
        {
            $redes_sociales = array(
                'facebook' => get_theme_mod('facebook_url'),
                'instagram' => get_theme_mod('instagram_url'),
                'twitter' => get_theme_mod('twitter_url'),
                'linkedin' => get_theme_mod('linkedin_url'),
            );
            return $redes_sociales;
        }

        // Función para mostrar los iconos de las redes sociales
        function mostrar_iconos_redes_sociales()
        {
            $redes_sociales = obtener_redes_sociales();

            echo '<div class="redes-sociales">';
            foreach ($redes_sociales as $red => $url) {
                if (!empty($url)) {
                    echo '<a class="icon-option" href="' . esc_url($url) . '" target="_blank"><i class="fa-brands fa-' . esc_attr($red) . '"></i></a>';
                }
            }
            echo '</div>';
        }

        function obtener_info_contacto()
        {
            $info_contacto = array(
                'email' => get_theme_mod('email_address'),
                'phone' => get_theme_mod('phone_number'),
            );
            return $info_contacto;
        }

        // add_action('after_setup_theme', 'C5i_Template_setup');


        // Registra un tipo de publicación personalizado para testimonios
        function registrar_testimonios()
        {
            $args = array(
                'public' => true,
                'label'  => 'Testimonios',
                'supports' => array('title', 'editor', 'thumbnail'),
            );
            register_post_type('testimonio', $args);
        }
        add_action('init', 'registrar_testimonios');

        // Agregar columna de miniatura en la lista de testimonios
        function agregar_columna_miniatura($columns)
        {
            $columns['miniatura'] = 'Miniatura';
            return $columns;
        }
        add_filter('manage_testimonio_posts_columns', 'agregar_columna_miniatura');

        // Mostrar contenido de la columna miniatura
        function mostrar_contenido_columna_miniatura($column, $post_id)
        {
            if ($column === 'miniatura') {
                echo get_the_post_thumbnail($post_id, array(50, 50));
            } else {
                // Manejar otros casos/columnas si es necesario
            }
        }
        add_action('manage_testimonio_posts_custom_column', 'mostrar_contenido_columna_miniatura', 10, 2);

        // Permitir ordenar por miniatura
        function permitir_ordenar_por_miniatura($columns)
        {
            $columns['miniatura'] = 'miniatura';
            return $columns;
        }
        add_filter('manage_edit-testimonio_sortable_columns', 'permitir_ordenar_por_miniatura');

        function ordenar_por_miniatura($query)
        {
            if (!is_admin() || !$query->is_main_query()) {
                return;
            }

            if ($query->get('orderby') === 'miniatura') {
                $query->set('orderby', 'meta_value');
                $query->set('meta_key', '_thumbnail_id');
            }
        }
        add_action('pre_get_posts', 'ordenar_por_miniatura');

        // Agregar metabox para testimonios destacados
        function agregar_metabox_destacado()
        {
            add_meta_box(
                'metabox-destacado',
                'Destacar Testimonio',
                'contenido_metabox_destacado',
                'testimonio',
                'side',
                'default'
            );
        }
        add_action('add_meta_boxes', 'agregar_metabox_destacado');

        function contenido_metabox_destacado($post)
        {
            $destacado = get_post_meta($post->ID, '_testimonio_destacado', true);
            echo '<label><input type="checkbox" name="testimonio_destacado" ' . checked($destacado, 'on', false) . '> Destacar este testimonio</label>';
        }

        function guardar_metabox_destacado($post_id)
        {
            if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
                return;
            }

            if (isset($_POST['testimonio_destacado'])) {
                update_post_meta($post_id, '_testimonio_destacado', 'on');
            } else {
                delete_post_meta($post_id, '_testimonio_destacado');
            }
        }
        add_action('save_post', 'guardar_metabox_destacado');

        // Función para procesar el formulario de testimonios
        function procesar_testimonio()
        {
            
            // Verificar si es una solicitud POST y si se ha enviado el formulario de testimonio
            if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['action']) && $_POST['action'] === 'procesar_testimonio') {
                $formulario_url = esc_url($_SERVER['REQUEST_URI']); // Obtiene la URL actual
                
                // Campos requeridos
                $campos_requeridos = array('nombre', 'profesion', 'empresa', 'testimonio', 'valoracion');

                // Validar que todos los campos requeridos estén presentes y no estén vacíos
                foreach ($campos_requeridos as $campo) {
                    if (!isset($_POST[$campo]) || empty($_POST[$campo])) {
                        // Si falta algún campo requerido, simplemente no hagas ninguna acción y permite que el formulario se procese normalmente
                        return;
                    }
                }

                // Obtener datos del formulario
                $nombre = sanitize_text_field($_POST["nombre"]);
                $profesion = sanitize_text_field($_POST["profesion"]);
                $empresa = sanitize_text_field($_POST["empresa"]);
                $testimonio_texto = sanitize_textarea_field($_POST["testimonio"]);
                $valoracion = intval($_POST["valoracion"]);

                // Sanitizar imagen
                $imagen_url = '';
                if (!empty($_FILES['foto']['tmp_name'])) {
                    $imagen = media_handle_upload('foto', 0);
                    if (!is_wp_error($imagen)) {
                        $imagen_url = wp_get_attachment_url($imagen);
                    }
                }

                // Crear un nuevo testimonio como un post personalizado
                $nuevo_testimonio = wp_insert_post(array(
                    'post_type' => 'testimonio',
                    'post_title' => $nombre,
                    'post_content' => $testimonio_texto,
                    'post_status' => 'publish',
                ));

                // Verificar si la inserción fue exitosa
                if (is_wp_error($nuevo_testimonio)) {
                    // Puedes agregar un mensaje de error si es necesario
                    return;
                }

                // Asociar la imagen al testimonio si se proporcionó
                if (!empty($imagen_url)) {
                    set_post_thumbnail($nuevo_testimonio, attachment_url_to_postid($imagen_url));
                }

                // Almacenar metadatos adicionales
                update_post_meta($nuevo_testimonio, 'valoracion', $valoracion);
                update_post_meta($nuevo_testimonio, 'profesion', $profesion);
                update_post_meta($nuevo_testimonio, 'empresa', $empresa);

                // Redireccionar después de procesar el formulario
                wp_redirect($formulario_url);

                // Limpiar campos
                $_POST = array();

                exit();
            }

            add_action('template_redirect', 'procesar_testimonio');
        }
        add_action('admin_post_procesar_testimonio', 'procesar_testimonio');
        add_action('admin_post_nopriv_procesar_testimonio', 'procesar_testimonio');

        // Función para obtener y mostrar testimonios con Slick Carousel
        function mostrar_testimonios_con_carrusel()
        {
            ob_start();

            $testimonios = get_posts(array(
                'post_type' => 'testimonio',
                'posts_per_page' => -1,
            ));

            if ($testimonios) {
                echo '<section class="testimonios-slider">';
                echo '<h3>Testimonios de Nuestros Clientes</h3>';
                echo '<div class="slick-carousel">';

                foreach ($testimonios as $testimonio) {
                    $nombre = esc_html(get_the_title($testimonio->ID));
                    $testimonio_texto = esc_html(get_the_content(null, false, $testimonio->ID));
                    $valoracion = intval(get_post_meta($testimonio->ID, 'valoracion', true));
                    $profesion = esc_html(get_post_meta($testimonio->ID, 'profesion', true));
                    $empresa = esc_html(get_post_meta($testimonio->ID, 'empresa', true));

                    echo '<div class="info-testimonio">';
                    echo '<div class="img-user-testimonio">';

                    // Mostrar imágenes del usuario
                    $imagen_url = get_the_post_thumbnail_url($testimonio->ID, array(80, 80));
                    if ($imagen_url) {
                        echo '<img src="' . esc_url($imagen_url) . '" alt="' . $nombre . '">';
                    } else {
                        // Obtener la inicial del nombre
                        $inicial = strtoupper(substr($nombre, 0, 1));

                        // Colores aleatorios
                        $colores = array(
                            array('#EDF6F9', '#000033'),
                            array('#44F2B2', '#000033'),
                            array('#B6C304', '#EDF6F9'),
                            array('#44F2B2', '#110BBF'),  // Fondo: Turquesa, Letra: Azul intenso
                            array('#B6C304', '#EDF6F9'), // Fondo: Amarillo verdoso, Letra: Blanco
                            array('#EDF6F9', '#44F2B2'), // Fondo: Blanco, Letra: Turquesa
                            array('#EDF6F9', '#110BBF'), // Fondo: Blanco, Letra: Azul intenso
                        );


                        // Seleccionar un conjunto aleatorio de colores
                        $color = $colores[array_rand($colores)];

                        echo '<div class="img-inicial" style="background-color: ' . esc_attr($color[0]) . '; color: ' . esc_attr($color[1]) . ';">' . $inicial . '</div>';
                    }

                    echo '</div>';
                    echo '<div class="info-user">';
                    echo '<h4>' . $nombre . '</h4>';

                    // Mostrar la profesión y la empresa
                    if ($profesion || $empresa) {
                        echo '<p>' . "$profesion - $empresa" . '</p>';
                    }

                    echo '<div class="valoracion">';

                    // Mostrar la valoración
                    for ($i = 1; $i <= 5; $i++) {
                        $icon = ($i <= $valoracion) ? 'star selected' : 'star';
                        echo '<i class="fas fa-' . $icon . '"></i>';
                    }

                    echo '</div>';
                    echo '</div>';
                    echo '<div class="testimonio-user">';
                    echo '<i class="fas fa-quote-left"></i>';
                    echo '<p>' . $testimonio_texto . '</p>';
                    echo '<i class="fas fa-quote-right"></i>';
                    echo '</div>';
                    echo '</div>';
                }

                echo '</div>';
                echo '<div class="paginacion-simple"></div>';
                echo '</div>';
                echo '</section>';
            } else {
            }

            $output = ob_get_clean();
            echo $output;
        }
    }
    add_action('after_setup_theme', 'darktech_setup');
}
add_action('after_setup_theme', 'darktech_setup');
