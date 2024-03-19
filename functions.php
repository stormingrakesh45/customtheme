<?php




add_theme_support('custom-background');
//function
register_nav_menus(
    array('primary-menu' => 'Top Menu')
);
add_theme_support('post-thumbnails');





add_theme_support('custom-header');




//function for sidebar 
register_sidebar(
    array(
        'name' => "Sidebar Location",
        "id" => "sidebar"
    )
);
