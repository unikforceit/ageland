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

<!-- header part -->
<header class="header_part classic_header dark_color">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-xl justify-content-between align-items-center">
                    <div class="pu_logo_area">
                        <?php ageland_logo(); ?>
                        <?php ageland_logo('navbar-brand sticky_logo'); ?>
                    </div>
                    <div class="main_nav_wrapper d-flex justify-content-end">
                        <div class="main_nav collapse navbar-collapse justify-content-end"
                             id="navbarNavDropdown">
                            <?php
                            echo str_replace(['menu-item-has-children', 'sub-menu'], ['dropdown', 'dropdown-menu'],
                                wp_nav_menu( array(
                                        'container' => false,
                                        'echo' => false,
                                        'menu_id' => 'main-menu',
                                        'theme_location' => 'primary',
                                        'fallback_cb'=> 'ageland_no_main_nav',
                                        'items_wrap' => '<ul class="navbar-nav">%3$s</ul>',
                                    )
                                ));
                            ?>
                        </div>
                        <div class="header_right_btn">
                            <div class="pu_collaps_menu_icon offcanvus_menu_trigger navbar-toggler collapsed mr-0">
                                <div class="burger_icon">
                                    <span class="burger_icon_top"></span>
                                    <span class="burger_icon_bottom"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- header part end -->
<!-- off canvus menu -->
<div class="off_canvus_menu">
    <div class="off_canvus_menu_iner">
        <div class="off_canvus_menu_iner_logo">
            <?php ageland_logo('off_canvus_logo'); ?>
            <div class="popup-close-button close_icon">
                <i class="fas fa-times"></i>
            </div>
        </div>
        <div class="off_canvus_menu_iner_content">
            <nav class="navbar">
                <?php
                echo str_replace(['menu-item-has-children', 'sub-menu'], ['dropdown', 'dropdown-menu'],
                    wp_nav_menu( array(
                            'container' => false,
                            'echo' => false,
                            'menu_id' => 'main-menu',
                            'theme_location' => 'primary',
                            'fallback_cb'=> 'ageland_no_main_nav',
                            'items_wrap' => '<ul class="navbar-nav">%3$s</ul>',
                        )
                    ));
                ?>
            </nav>
        </div>
    </div>
</div>
<div class="offcanvas_overlay"></div>
<!--broadcramp-->
<header class="inner_broadcramp" data-bg-img="<?php echo get_template_directory_uri().'/assets/img/banner.jpg'?>">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="broadcramp_inside_hdr">
                    <h4><?php echo esc_html($title); ?></h4>
                    <?php ageland_unit_breadcumb(); ?>
                </div>
                <!--/.broadcramp_inside_hdr-->
            </div>
        </div>
    </div>
    <!--/.container-->
</header>
<!--broadcramp-->