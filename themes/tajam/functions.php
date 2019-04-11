<?php
show_admin_bar(false);

function styles_including() {
    wp_enqueue_style('slick', get_stylesheet_directory_uri() . "/assets/slick/slick.css");
    wp_enqueue_style('main', get_stylesheet_directory_uri() . "/css/main.css");
}

add_action('wp_enqueue_scripts', 'styles_including');

function js_including() {
    wp_enqueue_script('jquery_321', get_stylesheet_directory_uri() . "/assets/jquery-3.2.1.min.js", [], '', true);
    wp_enqueue_script('slick', get_stylesheet_directory_uri() . "/assets/slick/slick.min.js", [], '', true);
    wp_enqueue_script('main', get_stylesheet_directory_uri() . "/js/min/app.js", [], '', true);
}

add_action('wp_enqueue_scripts', 'js_including');

function user_customizer($wp_customize) {
    $wp_customize->add_section('header_section', array(
        'title' => __('Site header', 'Tajam'),
    ));

    $wp_customize->add_setting('logo_image', array(
        'default' => 'Logo image'
    ));

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'logo_image_upload',
            array(
                'label'      => __( 'Upload a logo', 'Tajam' ),
                'section'    => 'header_section',
                'settings'   => 'logo_image'
            )
        )
    );


    $wp_customize->add_section('footer_section', array(
        'title' => __('Site footer', 'Tajam'),
    ));

    $wp_customize->add_setting('logo_image_footer', array(
        'default' => 'Logo image'
    ));

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'logo_image_upload_footer',
            array(
                'label'      => __( 'Upload a logo', 'Tajam' ),
                'section'    => 'footer_section',
                'settings'   => 'logo_image_footer'
            )
        )
    );


    $wp_customize->add_setting('footer_text', array(
        'default' => ''
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'footer_text', array(
        'label' => __('Enter text ', 'Tajam'),
        'section' => 'footer_section'
    )));


    $wp_customize->add_setting('footer_location', array(
        'default' => ''
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'footer_location', array(
        'label' => __('Enter address ', 'Tajam'),
        'section' => 'footer_section'
    )));

    $wp_customize->add_setting('footer_tel', array(
        'default' => ''
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'footer_tel', array(
        'label' => __('Enter phone number ', 'Tajam'),
        'section' => 'footer_section'
    )));


    $wp_customize->add_setting('footer_social_facebook', array(
        'default' => ''
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'footer_social_facebook', array(
        'label' => __('Facebook link ', 'Tajam'),
        'section' => 'footer_section'
    )));
////////
    $wp_customize->add_setting('footer_social_twitter', array(
        'default' => ''
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'footer_social_twitter', array(
        'label' => __('Twitter link ', 'Tajam'),
        'section' => 'footer_section'
    )));

    $wp_customize->add_setting('footer_social_dribbble', array(
        'default' => ''
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'footer_social_dribbble', array(
        'label' => __('Dribbble link ', 'Tajam'),
        'section' => 'footer_section'
    )));

    $wp_customize->add_setting('footer_social_instagram', array(
        'default' => ''
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'footer_social_instagram', array(
        'label' => __('Instagram link ', 'Tajam'),
        'section' => 'footer_section'
    )));

    $wp_customize->add_setting('footer_social_google', array(
        'default' => ''
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'footer_social_google', array(
        'label' => __('Google+ link ', 'Tajam'),
        'section' => 'footer_section'
    )));

    $wp_customize->add_setting('footer_social_youtube', array(
        'default' => ''
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'footer_social_youtube', array(
        'label' => __('YouTube link ', 'Tajam'),
        'section' => 'footer_section'
    )));

}

add_action('customize_register', 'user_customizer');


function nav_menus_setup() {
    register_nav_menu('header', 'Header navigation');
    register_nav_menu('footer', 'Footer navigation');
}

add_action('after_setup_theme', 'nav_menus_setup');


function currentYear(){
    return date('Y');
}


?>