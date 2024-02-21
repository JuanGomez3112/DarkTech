<?php get_header() ?>

<?php
$args = array(
    'post_type' => 'cliente',
    'order' => 'asc',

);
$the_query = new WP_Query($args); ?>
<?php if ($the_query->have_posts()) : ?>
    <section class="seccion-clientes">
        <div class="landing-clientes">
            <div class="formulario-testimonio">
                <div class="breadcrumb-clientes">
                    <?php get_template_part('template-parts/breadcrumb-title') ?>
                </div>

                <div class="ctn-contenido">
                    <div class="info-formulario">
                        <h2><?php the_field('titulo_form_testimonio') ?></h2>
                        <p><?php the_field('descripcion_form_testimonio') ?></p>
                        <div class="botones-clientes">
                        <a href="" class="boton">
                            <i class="fa-solid fa-eye"></i>
                            <label for="">Ver mas testimonios</label>
                        </a>
                        <a class="boton">
                            <i class="fa-solid fa-comments"></i>
                            <label for="wsf-1-field-1">Contactarnos</label>
                        </a>
                    </div>
                    </div>

                    <!-- Formulario de Testimonio -->
                    <form class="form-container" id="form-testimonio" action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post" enctype="multipart/form-data">
                        <div class="testimonio">
                            <label for="testimonio">Testimonio:</label>
                            <textarea id="testimonio" name="testimonio" rows="4" maxlength="200" required placeholder="Escribe aquí tu testimonio"></textarea>
                        </div>

                        <div class="nombre">
                            <label for="nombre">Nombre:</label>
                            <input type="text" id="nombre" name="nombre" required placeholder="ej. Juan Peréz">
                        </div>

                        <div class="profesion">
                            <label for="profesion">Profesión:</label>
                            <input type="text" id="profesion" name="profesion" placeholder="ej. Programador" required>
                        </div>

                        <div class="empresa">
                            <label for="empresa">Empresa:</label>
                            <input type="text" id="empresa" name="empresa" placeholder="ej. Implementech" required>
                        </div>

                        <div class="foto">
                            <label for="foto">Foto <span>(opcional)</span>:</label>
                            <input type="file" id="foto" name="foto" accept="image/*">
                        </div>

                        <div class="ctn-valoracion">
                            <div class="valoracion">
                                <input type="radio" id="estrella5" name="valoracion" value="5" required>
                                <label for="estrella5">&#9733;</label>
                                <input type="radio" id="estrella4" name="valoracion" value="4">
                                <label for="estrella4">&#9733;</label>
                                <input type="radio" id="estrella3" name="valoracion" value="3">
                                <label for="estrella3">&#9733;</label>
                                <input type="radio" id="estrella2" name="valoracion" value="2">
                                <label for="estrella2">&#9733;</label>
                                <input type="radio" id="estrella1" name="valoracion" value="1">
                                <label for="estrella1">&#9733;</label>
                            </div>
                        </div>

                        <div class="checkbox">
                            <label for="condiciones_privacidad">
                                <input type="checkbox" id="condiciones_privacidad" name="condiciones_privacidad" required>
                                Al enviar este formulario aceptas nuestra <a href="#">política de privacidad</a>
                            </label>
                        </div>

                        <div class="button">
                            <button type="submit" id="enviar-testimonio-btn" style="opacity: 0.4;" disabled>Enviar Testimonio</button>
                        </div>

                        <input type="hidden" name="action" value="procesar_testimonio">
                    </form>
                    <!-- Formulario de Testimonio -->

                </div>
            </div>
            <span></span>
            <?php the_post_thumbnail() ?>
        </div>

        <div class="cont-clientes">
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <a href="<?php the_field('link_cliente'); ?>" class="items-clientes" target="_blank">
                    <div class="titulo-user">
                        <h4><?php the_title() ?></h4>
                        <p><?php the_field('usuario_cliente'); ?></p>
                    </div>
                    <?php the_post_thumbnail() ?>
                    <span></span>
                </a>
            <?php endwhile ?>
        </div>
    </section>
<?php wp_reset_postdata();
endif; ?>

<?php get_footer() ?>