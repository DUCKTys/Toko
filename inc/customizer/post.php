<?php
/**
* Posts Settings.
*
* @package Carpenter Shop
*/

$carpenter_shop_default = carpenter_shop_get_default_theme_options();

// Single Post Section.
$wp_customize->add_section( 'posts_settings',
	array(
	'title'      => esc_html__( 'Metainformation Settings', 'carpenter-shop' ),
	'priority'   => 35,
	'capability' => 'edit_theme_options',
	'panel'      => 'theme_option_panel',
	)
);

$wp_customize->add_setting('carpenter_shop_post_author',
    array(
        'default' => $carpenter_shop_default['carpenter_shop_post_author'],
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'carpenter_shop_sanitize_checkbox',
    )
);
$wp_customize->add_control('carpenter_shop_post_author',
    array(
        'label' => esc_html__('Enable Posts Author', 'carpenter-shop'),
        'section' => 'posts_settings',
        'type' => 'checkbox',
    )
);

$wp_customize->add_setting('carpenter_shop_post_date',
    array(
        'default' => $carpenter_shop_default['carpenter_shop_post_date'],
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'carpenter_shop_sanitize_checkbox',
    )
);
$wp_customize->add_control('carpenter_shop_post_date',
    array(
        'label' => esc_html__('Enable Posts Date', 'carpenter-shop'),
        'section' => 'posts_settings',
        'type' => 'checkbox',
    )
);

$wp_customize->add_setting('carpenter_shop_post_category',
    array(
        'default' => $carpenter_shop_default['carpenter_shop_post_category'],
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'carpenter_shop_sanitize_checkbox',
    )
);
$wp_customize->add_control('carpenter_shop_post_category',
    array(
        'label' => esc_html__('Enable Posts Category', 'carpenter-shop'),
        'section' => 'posts_settings',
        'type' => 'checkbox',
    )
);

$wp_customize->add_setting('carpenter_shop_post_tags',
    array(
        'default' => $carpenter_shop_default['carpenter_shop_post_tags'],
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'carpenter_shop_sanitize_checkbox',
    )
);
$wp_customize->add_control('carpenter_shop_post_tags',
    array(
        'label' => esc_html__('Enable Posts Tags', 'carpenter-shop'),
        'section' => 'posts_settings',
        'type' => 'checkbox',
    )
);