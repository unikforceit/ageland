<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 */

get_header();

$opt_404_page = ageland_theme_option('error_tmpl');
if ($opt_404_page){
    echo do_shortcode('[INSERT_ELEMENTOR id="' . $opt_404_page . '"]');
}else {
?>
    <!--404 main_page-->
    <div class="error_page_main_con">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="inside">
                        <img src="<?php echo get_template_directory_uri()?>/assets/img/404.png" alt="#" />
                        <h4><?php echo esc_html("Something went wrong Page Can't Found");?></h4>
                        <a href="<?php echo esc_url( home_url( '/' ) );?>" class="btn"><?php echo esc_html('Back to Home');?></a>
                    </div>
                </div>
            </div>
        </div>
        <!--/.container-->
    </div>
    <!--404 main_page-->
    <?php }
    get_footer();