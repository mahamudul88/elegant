<!DOCTYPE html>
<html lang="language_attributes">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div class="header-sec py-3 <?php if(is_admin_bar_showing()){ echo "admin-bar"; }; ?>">
    <div class="container">
        <div class="header-menu d-flex flex-wrap justify-content-between align-items-center">
            <div class="logo">
                <a href="<?php echo esc_url(home_url()); ?>">
                    <?php 
                    if(has_custom_logo()){
                        echo wp_get_attachment_image(get_theme_mod('custom_logo'), 'full');
                    } else{
                        bloginfo( 'name' );
                    }  
                    ?>
                </a>
            </div>
            <div class="h-menu d-flex flex-wrap gap-4 align-items-center justify-content-end">
                    <div class="menu-trigger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                <div class="top-menu">
                    <?php
                        if( has_nav_menu( 'primarymenu' ) ){
                            wp_nav_menu( array(
                                'theme_location' => 'primarymenu',
                                'container'      => ''
                            ) );
                        }
                    ?>
                </div>
                <div class="register-button">
                    <a href="http://localhost/elegant/register/"><?php echo esc_html__("Register", "elegant"); ?></a>
                </div>
            </div>
        </div>
    </div>
    <div class="mobile-menu">
        <div class="m-menu-wrap">
            <?php wp_nav_menu(array(
                'theme_location' => 'primarymenu',
                'container'      => ''
            )); ?>
        </div>
    </div>
</div>
