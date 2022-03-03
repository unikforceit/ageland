<?php 

class ageland_theme_hooks
{

    function __construct()
    {

        add_action('wp_body_open', array(&$this, 'render_preloader'));
        add_action('wp_body_open', array(&$this, 'render_scroll_top'));

    }

    function render_preloader()
    {

        if (ageland_theme_option('enb_pre') == '1') {
            ?>
            <div class="preloader">
                <div class="vertical-centered-box">
                    <div class="content">
                        <div class="loader-circle"></div>
                        <div class="loader-line-mask">
                            <div class="loader-line"></div>
                        </div>
                        <?php ageland_logo();?>
                    </div>
                </div>
            </div>
            <?php
        }
    }

    function render_scroll_top()
    {

        if (ageland_theme_option('enb_scroll')) {
            ?>
                <div class="scroll-top">
                    <i class="fas fa-arrow-up"></i>
                </div>
            <?php
        }
    }
}

new ageland_theme_hooks();