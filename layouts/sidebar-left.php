<?php

if ( ageland_theme_option('sidebar_left')) {
	do_action('ageland_sidebar_left');
} else {
	if ( is_active_sidebar('sidebar-2')){
		echo '<div class="blog-sidebar">';
		dynamic_sidebar('sidebar-2');
		echo '</div>';
	}
}