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
