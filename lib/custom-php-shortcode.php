<?php
// ADD CUSTOM PHP THEME SHORTCODE
function custom_add_php_shortcode_func( $atts ) {

  // Attributes
  extract( shortcode_atts(
    array(
      'part' => '',
    ), $atts )
  );

  // Code
  $file = $part;
      ob_start();
      get_template_part( $file );
      return ob_get_clean();
}
add_shortcode( 'add_php_shortcode', 'custom_add_php_shortcode_func' );
?>
