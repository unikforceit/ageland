<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 */

get_header();

$opt_404_page = ageland_theme_option('error_tmpl');
if ($opt_404_page) {
    echo do_shortcode('[INSERT_ELEMENTOR id="' . $opt_404_page . '"]');
} else {
    ?>
    <!-- Start Error -->
    <section class="error-section">
        <div class="error-element-1"><img src="<?php echo get_template_directory_uri() ?>/assets/img/shape/shape_1.png"
                                          alt=""></div>
        <div class="error-element-2"><img src="<?php echo get_template_directory_uri() ?>/assets/img/shape/shape_2.png"
                                          alt=""></div>
        <div class="error-element-3"><img src="<?php echo get_template_directory_uri() ?>/assets/img/shape/shape_3.png"
                                          alt=""></div>
        <div class="error-element-4"><img src="<?php echo get_template_directory_uri() ?>/assets/img/shape/shape_4.png"
                                          alt=""></div>
        <div class="error-wrap">
            <h4 class="title"><?php echo esc_html('404 Error'); ?></h4>
            <p class="info"><?php echo esc_html("The page you are looking for doesn't exist or has been moved"); ?></p>
            <a href="<?php echo esc_url(home_url('/')); ?>"
               class="error_btn"><?php echo esc_html('Back To Home'); ?></a>
        </div>
    </section>
    <!-- End Error -->
<?php }
get_footer();