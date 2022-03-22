<?php

require_once get_template_directory() . '/inc/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'ageland_register_required_plugins' );

function ageland_register_required_plugins() {

	$plugins = array(

		array(
			'name' => esc_attr__('Ageland Core','ageland'),
			'slug' => 'ageland-core',
			'source' => get_template_directory_uri() . '/plugin/ageland-core.zip',
			'required' => true,
			'version' => '1.0.0',
			'force_activation' => false,
			'force_deactivation' => false, 
			'external_url' => '',
		),
		array(
			'name' => esc_attr__('Contact Form 7','ageland'),
			'slug'=> 'contact-form-7', 
			'required' => true, 
			'force_activation'=> false,
			'force_deactivation' => false,
		),
        array(
			'name' => esc_attr__('Ageland Demo Importer','ageland'),
			'slug'=> 'one-click-demo-import',
			'required' => true,
			'force_activation'=> false,
			'force_deactivation' => false,
		),
		array(
			'name' => esc_attr__('Elementor','ageland'),
			'slug' => 'elementor', 
			'required' => true, 
			'version' => '', 
			'force_activation' => false, 
			'force_deactivation' => false,
			'external_url' => '',
		),
	);

    $config = array(
        'default_path' => '',
        'menu' => 'tgmpa-install-plugins',
        'has_notices' => true, 
        'dismissable' => true,
        'dismiss_msg' => '',
        'is_automatic' => false,
        'message'=> '',
    );

    tgmpa( $plugins, $config );

}