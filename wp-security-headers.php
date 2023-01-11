<?php 
/*
Plugin Name: WordPress Security Headers
Plugin URI: https://github.com/moveaheadmedia/wp-security-headers
Description: A WordPress plugin that is designed to add security headers to your website.
Version: 1.0.0
Author: Ali Sal
Author URI: https://moveaheadmedia.com/
*/


function mam_wordpress_security_headers() {
	header( 'X-XSS-Protection: 1; mode=block' );
	header( 'X-Content-Type-Options: nosniff' );
	header( 'X-Frame-Options: SAMEORIGIN' );
	header( 'X-Content-Security-Policy: default-src \'self\'; script-src \'self\';' );
	header( 'Strict-Transport-Security: max-age=31536000' );
	header("Content-Security-Policy: default-src 'self'; script-src https: 'unsafe-inline'; style-src https: 'unsafe-inline'; img-src * data:; connect-src *; font-src *; frame-src: *;");	header( 'Referrer-Policy: no-referrer-when-downgrade' );
	header('Permissions-Policy: accelerometer=(), ambient-light-sensor=(), autoplay=(), battery=(), camera=(), cross-origin-isolated=(), display-capture=(), document-domain=(), encrypted-media=(), execution-while-not-rendered=(), execution-while-out-of-viewport=(), fullscreen=(), geolocation=(), gyroscope=(), keyboard-map=(), magnetometer=(), microphone=(), midi=(), navigation-override=(), payment=(), picture-in-picture=(), publickey-credentials-get=(), screen-wake-lock=(), sync-xhr=(), usb=(), web-share=(), xr-spatial-tracking=(), clipboard-read=(), clipboard-write=(), gamepad=(), speaker-selection=(), conversion-measurement=(), focus-without-user-activation=(), hid=(), idle-detection=(), interest-cohort=(), serial=(), sync-script=(), trust-token-redemption=(), window-placement=(), vertical-scroll=()');
}
add_action( 'send_headers', 'mam_wordpress_security_headers' );
