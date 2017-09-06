<?php

include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

//$acf = 'advanced-custom-fields/acf.php';
$acfpro = 'advanced-custom-fields-pro/acf.php';
$bss = 'bootstrap-4-shortcodes/bootstrap-shortcodes.php';
$wpr = 'wp-retina-2x/wp-retina-2x.php';

//Check if ACF is activated
if ( is_plugin_inactive( $acfpro ) || is_plugin_inactive( $bss ) || is_plugin_inactive( $wpr ) ): ?>

<div class="container ml-5 mr-5 ml-sm-auto mr-sm-auto mt-5">
 <div class="row justify-content-md-center">
  <div class="alert alert-warning text-center col col-lg-6" role="alert">
   <p><strong>Warning!</strong> This theme needs the following plugins in order to run:</p>

   <p>

   <?php if (is_plugin_inactive( $acfpro )): ?>
     <a target="_blank" href="https://wordpress.org/plugins/advanced-custom-fields/">Advanced Custom Fields</a><br />
   <?php endif; ?>

   <?php if (is_plugin_inactive( $bss )): ?>
    <a target="_blank" href="https://github.com/ciromattia/bootstrap-4-shortcodes/">hhh for WordPress</a><br />
   <?php endif; ?>

   <?php if (is_plugin_inactive( $wpr )): ?>
    <a target="_blank" href="https://wordpress.org/plugins/wp-retina-2x/">WP Retina 2x</a><br />
   <?php endif; ?>

   </p>

    <p>Please install and activate the plugins, then reload this page.</p>
  </div>
 </div>
</div>


<?php exit; endif; ?>
