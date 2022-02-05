<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 */
get_header();
?>
    <!--case studies-->
    <section class="case_studies_page">
        <div class="container">
            <div class="row">
                <?php if (have_posts()) :

                    /* Start the Loop */
                    while (have_posts()) : the_post();

                        get_template_part('template-parts/project', 'content');

                    endwhile;
                else :

                    get_template_part('template-parts/content', 'none');

                endif; ?>
                <div class="w-100 my-3"></div>
                <div class="col-md-12">
                    <div class="pagination-post">
                        <?php ageland_pagination(); ?>
                    </div>
                    <!--/.pagination-post-->
                </div>
            </div>
        </div>
        <!--/.container-->
    </section>
    <!--case studies-->
<?php get_footer(); ?>