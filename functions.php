<?php

// Enable Bughed on development
if ( wp_get_environment_type() !== 'production' ) {
    function load_bugherd() { ?>
        <!-- Bugherd -->
        <script type="text/javascript" src="https://www.bugherd.com/sidebarv2.js?apikey=xunwkfarbvamuqrpcanvxq" async="true"></script>
    <?php }
    add_action( 'wp_head', 'load_bugherd' );
}

if (!function_exists('vinfen_enqueue_styles')) :
    function vinfen_enqueue_styles() {
        wp_enqueue_style( 'vinfen-style', get_stylesheet_uri(), array( 'heretic-style' ), filemtime(get_stylesheet_directory() . '/style.css') );
    }
endif;
add_action( 'wp_enqueue_scripts', 'vinfen_enqueue_styles' );


if (!function_exists('vinfen_scripts')) :
    function vinfen_scripts() {
        wp_enqueue_script( 'vinfen-script', get_stylesheet_directory_uri().'/main.js', array('jquery'), filemtime(get_stylesheet_directory() . '/main.js'), true );
    }
endif;
add_action( 'wp_enqueue_scripts', 'vinfen_scripts' );

include( 'inc/vinfen-hooks.php' );