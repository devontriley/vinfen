<?php

/*
 * Add different logo to footer
 */
function vinfen_footer_logo( $logo ) {
    $footerLogo = get_field( 'footer_logo', 'option' );
    return wp_get_attachment_image( $footerLogo['ID'], 'full' ) ?? $logo;
}
add_filter( 'heretic_footer_logo', 'vinfen_footer_logo' );