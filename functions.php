<?php

// Add theme supports
add_theme_support('custom-background');
add_theme_support('post-thumbnails');
add_theme_support('custom-header');

// Register navigation menus
register_nav_menus(array(
    'primary-menu' => 'Primary Menu'
));

// Register sidebar
register_sidebar(array(
    'name' => 'Sidebar Location',
    'id' => 'sidebar'
));

// Add Customizer settings
function custom_theme_customize_register($wp_customize)
{
    // Logo setting
    $wp_customize->add_setting('custom_logo', array(
        'default' => '',
        'sanitize_callback' => 'absint', // Ensure value is an integer
    ));

    // Primary Menu setting
    $wp_customize->add_setting('primary_menu_location', array(
        'default' => 'primary-menu',
        'sanitize_callback' => 'sanitize_key', // Ensure value is a valid key
    ));

    // Add controls for logo and primary menu
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'custom_logo', array(
        'label' => __('Select Logo', 'text-domain'),
        'section' => 'title_tagline',
        'settings' => 'custom_logo',
    )));

    $wp_customize->add_control('primary_menu_location', array(
        'label' => __('Select Primary Menu', 'text-domain'),
        'section' => 'menu_locations',
        'type' => 'select',
        'choices' => get_registered_nav_menus(), // Get registered menu locations
    ));
}
add_action('customize_register', 'custom_theme_customize_register');
