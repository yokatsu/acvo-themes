<?php
/**
 * Enqueue scripts
 */
function avante_scripts() {  
    wp_enqueue_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', array(), '4.1.3' );
    wp_enqueue_style('bootstrap-grid', get_template_directory_uri().'/css/bootstrap-grid.min.css', array(), '4.1.3' );
    wp_enqueue_style('fontawesome', get_template_directory_uri().'/css/font-awesome.min.css', array(), '5.8.1' );
    wp_enqueue_style('magnificpopup', get_template_directory_uri() . '/css/magnific-popup.css', array(), '1.1.0');
    wp_enqueue_style('slick', get_template_directory_uri().'/css/slick.css', array(), '1.9.0' );
    wp_enqueue_style('slick-theme', get_template_directory_uri().'/css/slick-theme.css', array('slick'), '1.9.0' );
    wp_enqueue_script('jquery-effects-core');
    wp_enqueue_script('bootstrap-bundle', get_template_directory_uri().'/js/bootstrap.bundle.min.js', array('jquery'), '4.1.3', true );
    wp_enqueue_script('slick', get_template_directory_uri() . '/js/slick.min.js', array('jquery'), '1.9.0', true);
    wp_enqueue_script('hoverintent', get_template_directory_uri() . '/js/hoverintent.min.js', array(), '4.1.3', true);
    wp_enqueue_script('avante-scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery', 'hoverintent'), '4.1.3', true);
    wp_enqueue_script('magnificpopup', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array('jquery'), '1.1.0', true );
    wp_enqueue_script('avante-magnific-init', get_template_directory_uri() . '/js/jquery.magnific-popup-init.js', array('jquery'), '1.1.0', true );
    // wp_enqueue_script('stylemin', get_template_directory_uri() . '/css/landingpage/stylemin.css');
    // wp_enqueue_script('helloelementor', get_template_directory_uri() . '/css/landingpage/helloelementor.css');
    // wp_enqueue_script('helloelementorthemestyle', get_template_directory_uri() . '/css/landingpage/helloelementorthemestyle.css');
    // wp_enqueue_script('elementor-animations', get_template_directory_uri() . '/css/landingpage/elementor-animations.css');
    // wp_enqueue_script('elementor-frontend-legacy', get_template_directory_uri() . '/css/landingpage/elementor-frontend-legacy.css');
    // wp_enqueue_script('elementor-frontend', get_template_directory_uri() . '/css/landingpage/elementor-frontend.css');
    // wp_enqueue_script('elementor-global', get_template_directory_uri() . '/css/landingpage/elementor-global.css');
    // wp_enqueue_script('elementor-icons-brands', get_template_directory_uri() . '/css/landingpage/elementor-icons-brands.css');
    // wp_enqueue_script('elementor-icons-regular', get_template_directory_uri() . '/css/landingpage/elementor-icons-regular.css');
    // wp_enqueue_script('elementor-icons-shared', get_template_directory_uri() . '/css/landingpage/elementor-icons-shared.css');
    // wp_enqueue_script('elementor-icons-solid', get_template_directory_uri() . '/css/landingpage/elementor-icons-solid.css');
    // wp_enqueue_script('elementor-icons', get_template_directory_uri() . '/css/landingpage/elementor-icons.css');
    // wp_enqueue_script('elementor-pro', get_template_directory_uri() . '/css/landingpage/elementor-pro.css');
    // wp_enqueue_script('elementor-post36', get_template_directory_uri() . '/css/landingpage/elementor-post36.css');
    // wp_enqueue_script('elementor-post159', get_template_directory_uri() . '/css/landingpage/elementor-post159.css');
    // wp_enqueue_script('elementor-post196', get_template_directory_uri() . '/css/landingpage/elementor-post196.css');
    // wp_enqueue_script('elementor-post4909', get_template_directory_uri() . '/css/landingpage/elementor-post4909.css');
    // wp_enqueue_script('elementor-post252', get_template_directory_uri() . '/css/landingpage/elementor-post262.css');
    // wp_enqueue_script('jquerylp', get_template_directory_uri() . '/css/landingpage/js/jquerycore.js');
    // wp_enqueue_script('elementorfront', get_template_directory_uri() . '/css/landingpage/js/elementor-frontend.js');
    // wp_enqueue_script('front-min', get_template_directory_uri() . '/css/landingpage/js/frontend-min.js');
    // wp_enqueue_script('front-mod', get_template_directory_uri() . '/css/landingpage/js/front-end-modules.js');
    // wp_enqueue_script('dialog', get_template_directory_uri() . '/css/landingpage/js/dialog-min.js');
    // wp_enqueue_script('lottie', get_template_directory_uri() . '/css/landingpage/js/lottie-min.js');
    // wp_enqueue_script('position', get_template_directory_uri() . '/css/landingpage/js/position-min.js');
    // wp_enqueue_script('share', get_template_directory_uri() . '/css/landingpage/js/share-link-min.js');
    // wp_enqueue_script('smartmenu', get_template_directory_uri() . '/css/landingpage/js/smartmenus.js');
    // wp_enqueue_script('stick', get_template_directory_uri() . '/css/landingpage/js/sticky.js');
    // wp_enqueue_script('swiper', get_template_directory_uri() . '/css/landingpage/js/swiper-min.js');
    // wp_enqueue_script('waypoints', get_template_directory_uri() . '/css/landingpage/js/waypoints-min.js');
    // wp_enqueue_script('banner', get_template_directory_uri() . '/css/landingpage/images/banner_graduacaoead.jpg');





    if( is_page_template( 'template-onepage.php' ) ) {
        wp_enqueue_script('avante-smoothscroll', get_template_directory_uri().'/js/smooth-scroll.js', array('jquery'), '1.0', true );
    }

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}  
add_action('wp_enqueue_scripts', 'avante_scripts');

/**
 * Registers an editor stylesheet for the theme.
 */
function avante_editor_styles() {
    add_editor_style( 'editor-style.css' );
}
add_action( 'admin_init', 'avante_editor_styles' );