<?php

// Enable Bughed on development
if ( wp_get_environment_type() !== 'production' ) {
    function load_bugherd() { ?>
        <!-- Bugherd -->
        <script type="text/javascript" src="https://www.bugherd.com/sidebarv2.js?apikey=xunwkfarbvamuqrpcanvxq" async="true"></script>
    <?php }
    add_action( 'wp_head', 'load_bugherd' );
}

// Add Google Tag Manager to head
function append_gtm_header () { ?>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-TDSV2NZ');</script>
    <!-- End Google Tag Manager -->
<?php }
add_action( 'wp_head', 'append_gtm_header' );

// Add Google Tag Manger to body
function append_gtm_body () { ?>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TDSV2NZ" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
<?php }
add_action( 'wp_body_open', 'append_gtm_body' );

if (!function_exists('vinfen_enqueue_styles')) :
    function vinfen_enqueue_styles() {
        wp_enqueue_style( 'vinfen-style', get_stylesheet_uri(), array( 'heretic-style' ), wp_get_theme()->get( 'Version' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'vinfen_enqueue_styles' );


if (!function_exists('vinfen_scripts')) :
    function vinfen_scripts() {
        wp_enqueue_script( 'vinfen-script', get_stylesheet_directory_uri().'/main.js', array('jquery'), '1.0', true );
    }
endif;
add_action( 'wp_enqueue_scripts', 'vinfen_scripts' );

include( 'inc/vinfen-hooks.php' );