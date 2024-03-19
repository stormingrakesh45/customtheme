<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?> <?php wp_title() ?> <?php if (is_front_page()) {
                                                                bloginfo('description');
                                                            } ?> </title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <?php wp_head(); ?>
    <script src="<?php echo get_template_directory_uri(); ?>/path/to/font-awesome/script.js" crossorigin="anonymous">
    </script>


</head>

<body <?php body_class(); ?>>



    <header>
        <div class="navbar">
            <div class="header-section1">

                <?php $logoimg =  get_header_image() ?>
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <img class="logo" src="<?php echo esc_url($logoimg); ?>"></a>
            </div>


            <div class="header-section2">
                <div class="primarymenu"> <?php
                                            // Display primary menu
                                            wp_nav_menu(array(
                                                'theme_location' => 'primary-menu',
                                                'container' => false, // Remove default container
                                                'menu_class' => 'primary-menu-list' // Add custom class for styling
                                            ));
                                            ?>
                </div>
            </div>
        </div>

    </header>