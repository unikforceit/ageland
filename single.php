<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 */
get_header();
if (is_active_sidebar('sidebar-1')) {
    $main = 'col-lg-8';
    $sidebar = 'col-lg-4';
} else {
    $main = 'col-lg-12';
    $sidebar = 'col-lg-12';
}
?>
    <!-- blog area five start here  -->
    <section class="blog_details_main">
        <div class="container">
            <div class="row">
                <div class="<?php echo esc_attr($main); ?>">
                    <div class="blog_details_single_p">
                        <?php if (have_posts()) :

                            /* Start the Loop */
                            while (have_posts()) : the_post();

                                get_template_part('template-parts/singlecontent');

                            endwhile;
                        else :

                            get_template_part('template-parts/content', 'none');

                        endif; ?>
                    </div>
                    <div class="ageland-comment-box">
                        <?php
                        if (comments_open() || get_comments_number()) :
                            comments_template();
                        endif;
                        ?>
                    </div>
                </div>
                <div class="<?php echo esc_attr($sidebar); ?>">
                    <?php get_template_part('layouts/sidebar', 'right'); ?>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>