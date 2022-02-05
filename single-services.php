<?php
/**
 * The template for displaying all single services
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 */
get_header();
?>
<!--service details page-->
<section class="service_details_page">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="service_sidebar_wid">
                    <div class="service_r_post">
                        <h3>Recent Post</h3>
                        <div class="line"></div>
                        <ul>
                            <li><a href="#">Software Design</a></li>
                            <li><a href="#">Degital Marketing</a></li>
                            <li><a href="#">SEO Marketing</a></li>
                            <li><a href="#">E-commerce Website</a></li>
                            <li><a href="#">Branding Design</a></li>
                            <li><a href="#">UI/UX Design</a></li>
                        </ul>
                    </div>
                    <!--/.service_r_post-->
                    <div class="customer_support_c">
                        <i class="fas fa-headphones"></i>
                        <h4>Got any Questions?</h4>
                        <h4><strong>call us today</strong></h4>
                        <h2>1-800-369-8527</h2>
                        <p>support@zemenconsult.net</p>
                    </div>
                    <!--/.customer_support_c-->
                    <div class="service_banner">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/sidebar1.jpg" alt="Sidebar Image" />
                    </div>
                    <!--/.service_banner-->
                </div>
                <!--/.service_sidebar_wid-->
            </div>
            <?php if (have_posts()) :

                /* Start the Loop */
                while (have_posts()) : the_post();

                    get_template_part('template-parts/services', 'single');

                endwhile;
            else :

                get_template_part('template-parts/content', 'none');

            endif; ?>
        </div>
    </div>
    <!--/.container-->
</section>
<!--service details page-->
<?php get_footer(); ?>