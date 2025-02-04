<?php

function wpcurso_customizer($wp_customize)
{

	$wp_customize->add_section(
		'sec_copyright',
		array(
			'title' => 'Copyright',
			'description' => 'Copyright Section'
		)
	);

	$wp_customize->add_setting(
		'set_copyright',
		array(
			'type' => 'theme_mod',
			'default' => 'Copyright X - All rights reserved',
			'sanitize_callback' => 'wp_filter_nohtml_kses'
		)
	);

	$wp_customize->add_control(
		'set_copyright',
		array(
			'label' => 'Copyright',
			'description' => 'Please, type your copyright information here',
			'section' => 'sec_copyright',
			'type' => 'text'
		)
	);
}
add_action('customize_register', 'wpcurso_customizer');
