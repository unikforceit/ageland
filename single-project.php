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
    <img src="<?php echo get_template_directory_uri()?>/assets/img/img1.png" alt="shape 1" class="shape-one" />
    <img src="<?php echo get_template_directory_uri()?>/assets/img/img2.png" alt="shape 2" class="shape-two" />
    <img src="<?php echo get_template_directory_uri()?>/assets/img/img3.png" alt="shape 3" class="shape-three" />
    <img src="<?php echo get_template_directory_uri()?>/assets/img/img4.png" alt="shape 4" class="shape-four" />
    <img src="<?php echo get_template_directory_uri()?>/assets/img/img5.png" alt="shape 5" class="shape-five" />
    <img src="<?php echo get_template_directory_uri()?>/assets/img/img6.png" alt="shape 6" class="shape-six" />
</section>
<!--case-single-details-->
<?php get_footer(); ?>