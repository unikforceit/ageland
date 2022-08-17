<?php
$arg = [
    'cat' => '<span class="niotitle">' . esc_html__('Category', 'ageland') . '</span>',
    'tag' => '<span  class="niotitle">' . esc_html__('Tag', 'ageland') . '</span>',
    'author' => '<span  class="niotitle">' . esc_html__('Author', 'ageland') . '</span>',
    'year' => '<span  class="niotitle">' . esc_html__('Year', 'ageland') . '</span>',
    'notfound' => '<span  class="niotitle">' . esc_html__('Not found', 'ageland') . '</span>',
    'search' => '<span  class="niotitle">' . esc_html__('Search for', 'ageland') . '</span>',
    'marchive' => '<span  class="niotitle">' . esc_html__('Monthly archive', 'ageland') . '</span>',
    'yarchive' => '<span  class="niotitle">' . esc_html__('Yearly archive', 'ageland') . '</span>',
];

if (is_home() && get_option('page_for_posts')) {
    $title = 'Blog';
} elseif (is_front_page()) {
    $title = 'Front Page';
} else {
    $title = get_the_title();
}
?>
<!-- Start Main Header -->
<header id="main-header" class="main-header">
    <div class="menu-header">
        <div class="container">
            <div class="main-menu">
                <div class="row justify-content-between align-items-center">
                    <!-- logo -->
                    <div class="col-lg-2 col-md-4 col-sm-8 logo-col">
                        <div class="logo">
                            <?php ageland_logo(); ?>
                        </div>
                    </div>
                    <!-- Menu -->
                    <div class="col-lg-10 col-md-8 col-sm-4 menu-col">
                        <div class="main_menu_wrap d-flex justify-content-end align-items-center">
                            <!--Main Menu-->
                            <div class="main-menu-navigation">
                                <nav class="navigation-main-area ul-li">
                                    <?php
                                    echo str_replace(['menu-item-has-children', 'sub-menu'], ['dropdown', 'dropdown-menu'],
                                        wp_nav_menu(array(
                                                'container' => false,
                                                'echo' => false,
                                                'menu_id' => 'main-menu',
                                                'theme_location' => 'primary',
                                                'fallback_cb' => 'ageland_no_main_nav',
                                                'items_wrap' => '<ul>%3$s</ul>',
                                            )
                                        ));
                                    ?>
                                </nav>
                            </div>
                            <!-- Start Mobile Menu -->
                            <div class="mobile_menu position-relative">
                                <div class="mobile_menu_button open_mobile_menu">
                                    <i class="fas fa-bars"></i>
                                </div>
                                <div class="mobile_menu_wrap">
                                    <div class="mobile_menu_overlay open_mobile_menu"></div>
                                    <div class="mobile_menu_content">
                                        <div class="mobile_menu_close open_mobile_menu">
                                            <i class="fas fa-times"></i>
                                        </div>
                                        <div class="m-brand-logo">
                                            <?php ageland_logo(); ?>
                                        </div>
                                        <nav class="mobile-main-navigation  clearfix ul-li">
                                            <?php
                                            echo str_replace(['menu-item-has-children', 'sub-menu'], ['dropdown', 'dropdown-menu'],
                                                wp_nav_menu(array(
                                                        'container' => false,
                                                        'echo' => false,
                                                        'menu_id' => 'm-main-nav',
                                                        'theme_location' => 'primary',
                                                        'fallback_cb' => 'ageland_no_main_nav',
                                                        'items_wrap' => '<ul class="navbar-nav text-capitalize clearfix">%3$s</ul>',
                                                    )
                                                ));
                                            ?>
                                        </nav>

                                    </div>
                                </div>
                            </div>
                            <!-- Start Menu Button -->
                            <div class="menu_btn d-flex align-items-center flex-wrap">
                                <div class="header_btn">
                                    <a href="#"><?php echo esc_html('Sey, Hello!'); ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- End Main Header -->

<!-- Start Breadcrumb -->
<section class="inner-page-banner">
    <div class="container">
        <div class="pagination ul-li">
            <?php ageland_unit_breadcumb(); ?>
        </div>
        <h1 class="page-title"><?php echo esc_html('Blog Details'); ?></h1>
    </div>
</section>
<!-- End Breadcrumb -->