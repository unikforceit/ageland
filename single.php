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
    <!-- Start Main content -->
    <section class="main-content">
        <div class="archive-section">
            <div class="container">
                <div class="row">
                    <div class="<?php echo esc_attr($main); ?>">
                        <?php if (have_posts()) :

                            /* Start the Loop */
                            while (have_posts()) : the_post();

                                get_template_part('template-parts/singlecontent');

                            endwhile;
                        else :

                            get_template_part('template-parts/content', 'none');

                        endif;

                        if (comments_open() || get_comments_number()) :
                            comments_template();
                        endif;
                        
                        ?>
                    </div>
                    <div class="<?php echo esc_attr($sidebar); ?> wow animate__fadeInUp" data-wow-duration="2s">
                        <?php get_template_part('layouts/sidebar', 'right'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Main content -->

    <!-- Start Related Airticles -->
    <section class="relatedBlogs mt-n-20">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-11">
                    <div class="section-header text-center pb-67">
                        <span class="sub-title">Blogs</span>
                        <h3 class="title">Related Airticles</h3>
                        <p class="info">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit
                            officia consequat duis enim velit mollit. Exercitation veniam.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="blog-item">
                        <div class="blog-thumb">
                            <img src="assets/img/Blog/blog_4.png" alt="">
                        </div>
                        <a href="blog-details.html" class="blog-hover">
                            <img src="assets/img/Icon/blog_hover.svg" alt="">
                        </a>
                        <div class="blog-info">
                            <a href="blog-details.html" class="title">Everything You Should Know About Return</a>
                            <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint...</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-item">
                        <div class="blog-thumb">
                            <img src="assets/img/Blog/blog_5.png" alt="">
                        </div>
                        <a href="blog-details.html" class="blog-hover">
                            <img src="assets/img/Icon/blog_hover.svg" alt="">
                        </a>
                        <div class="blog-info">
                            <a href="blog-details.html" class="title">Faster Airport Internet, Better Cloud</a>
                            <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint...</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-item">
                        <div class="blog-thumb">
                            <img src="assets/img/Blog/blog_6.png" alt="">
                        </div>
                        <a href="blog-details.html" class="blog-hover">
                            <img src="assets/img/Icon/blog_hover.svg" alt="">
                        </a>
                        <div class="blog-info">
                            <a href="blog-details.html" class="title">5 Winning Voice Search Marketing Tips</a>
                            <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Related Airticles -->

<?php get_footer(); ?>