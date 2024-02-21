<?php 
if(!defined('ABSPATH')) die();

class RedesSocialesWidget extends WP_Widget
{
    public function __construct()
    {
        parent::__construct(
            'redes_sociales_widget',
            'Redes Sociales Widget',
            array('description' => 'Widget para mostrar íconos de redes sociales con enlaces')
        );
    }

    public function widget($args, $instance) {
        $title = apply_filters('widget_title', $instance['title']);
        $facebook_url = esc_url($instance['facebook_url']);
        $twitter_url = esc_url($instance['twitter_url']);
        $linkedin_url = esc_url($instance['linkedin_url']);
        $instagram_url = esc_url($instance['instagram_url']); ?>
        
        <div class="redes-sociales">
            <?php if (!empty($linkedin_url)) : ?>
                <a href="<?php echo $linkedin_url; ?>"><i class="fa-brands fa-linkedin"></i></a>
            <?php endif; ?>
    
            <?php if (!empty($facebook_url)) : ?>
                <a href="<?php echo $facebook_url; ?>"><i class="fa-brands fa-facebook"></i></a>
            <?php endif; ?>
    
            <?php if (!empty($instagram_url)) : ?>
                <a href="<?php echo $instagram_url; ?>"><i class="fa-brands fa-instagram"></i></a>
            <?php endif; ?>
    
            <?php if (!empty($twitter_url)) : ?>
                <a href="<?php echo $twitter_url; ?>"><i class="fa-brands fa-twitter"></i></a>
            <?php endif; ?>
        </div>
        <?php
    }
    

    public function form($instance)
    {
        $title = !empty($instance['title']) ? $instance['title'] : '';
        $facebook_url = !empty($instance['facebook_url']) ? $instance['facebook_url'] : '';
        $twitter_url = !empty($instance['twitter_url']) ? $instance['twitter_url'] : '';
        $linkedin_url = !empty($instance['linkedin_url']) ? $instance['linkedin_url'] : '';
        $instagram_url = !empty($instance['instagram_url']) ? $instance['instagram_url'] : '';

        // Agregar campos de entrada para las URLs de redes sociales
?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>">Título:</label>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('facebook_url'); ?>">URL de Facebook:</label>
            <input class="widefat" id="<?php echo $this->get_field_id('facebook_url'); ?>" name="<?php echo $this->get_field_name('facebook_url'); ?>" type="text" value="<?php echo esc_attr($facebook_url); ?>">
        </p>
        <!-- Repite este bloque para otras redes sociales -->
<?php
    }
}










?>