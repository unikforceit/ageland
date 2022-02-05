<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 */
get_header();
?>

<!--case-single-details-->
<section class="case_single_details">
    <div class="container">
        <div class="row">
            <?php if (have_posts()) :

                /* Start the Loop */
                while (have_posts()) : the_post();

                    get_template_part('template-parts/project', 'single');

                endwhile;
            else :

                get_template_part('template-parts/content', 'none');

            endif; ?>
        </div>
    </div>
    <!--/.container-->
    <img src="<?php echo get_template_directory_uri()?>/assets/img/img1.png" alt="#" class="shape-one" />
    <img src="<?php echo get_template_directory_uri()?>/assets/img/img2.png" alt="#" class="shape-two" />
    <img src="<?php echo get_template_directory_uri()?>/assets/img/img3.png" alt="#" class="shape-three" />
    <img src="<?php echo get_template_directory_uri()?>/assets/img/img4.png" alt="#" class="shape-four" />
    <img src="<?php echo get_template_directory_uri()?>/assets/img/img5.png" alt="#" class="shape-five" />
    <img src="<?php echo get_template_directory_uri()?>/assets/img/img6.png" alt="#" class="shape-six" />
</section>
<!--case-single-details-->
<?php get_footer(); ?>