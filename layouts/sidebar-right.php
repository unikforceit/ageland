<?php

if ( ageland_theme_option('sidebar')) {
	do_action('ageland_sidebar');
} else {
	if ( is_active_sidebar('sidebar-1')){
		echo '<div class="blog-sidebar">';
		dynamic_sidebar('sidebar-1');
		echo '</div>';
	}
}