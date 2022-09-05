<?php

if (ageland_theme_option('footer-sidebar')) {
    do_action('ageland_footer_sidebar');
} else {
    if (is_active_sidebar('footer-sidebar')) {
        dynamic_sidebar('footer-sidebar');
    }
}