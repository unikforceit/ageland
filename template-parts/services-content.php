<?php
/**
 * Template part for displaying services
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 */
?>
<div id="post-<?php the_ID(); ?>" <?php post_class('col-md-3'); ?>>
    <div class="single_service_page">
        <div class="icon">
            <?php
            $meta = ageland_service_meta('service_icon');
            $met = isset($meta['id']) ? $meta['id'] : '';
            echo wp_get_attachment_image($met);
            ?>
            <img src="<?php echo get_template_directory_uri();?>/assets/img/service4bg.png" class="show" alt="BG" />
            <img src="<?php echo get_template_directory_uri();?>/assets/img/service4bg_hv.png" class="hide" alt="BG hover" />
        </div>
        <h4><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h4>
        <p><?php the_excerpt();?></p>
    </div>
    <!--/.single_service_page-->
</div>