<?php get_header() ?>

<section class="seccion-single">
    <?php get_template_part('template-parts/breadcrumb-title') ?>
    <div class="ctn-single">
        <?php the_content(); ?>
    </div>
</section>

<?php get_footer() ?>