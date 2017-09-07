<?php
// ADD CUSTOM CDN FOR JQUERY

/************* ENQUEUE JS *************************/
// pull jquery from Google or Cloudflare's CDN. If it's not available, grab the local copy.
// Recommended Versions: 3.2.1, 2.2.4, 1.12.4
// Recommended CDN:
// // https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js
// // https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js

$url = 'https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js'; // the URL to check against  
//$test_url = @fopen($url,'r'); // test parameters
$test_url = wp_remote_fopen($url); // test parameters / CDN accessibility
if( $test_url !== false ) { // test if the URL exists  

    function load_external_jQuery() { // load external file  
        wp_deregister_script( 'jquery' ); // deregisters the default WordPress jQuery  
        wp_register_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js'); // register the external file  
        wp_enqueue_script('jquery'); // enqueue the external file  
    }
    add_action('wp_enqueue_scripts', 'load_external_jQuery'); // initiate the function  
} else {
    function load_local_jQuery() {
        wp_deregister_script('jquery'); // initiate the function  
        wp_register_script('jquery', THEME_DIR_URI.'/js/jquery.min.js', __FILE__, false, '1.12.4', true); // register the local file  
        wp_enqueue_script('jquery'); // enqueue the local file  
    }
    add_action('wp_enqueue_scripts', 'load_local_jQuery'); // initiate the function  
}
?>
