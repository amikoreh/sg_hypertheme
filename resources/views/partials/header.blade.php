<?php

//Check necessary plugins
//get_template_part('app/plugin-check');

//Get the background image
$addional_image = get_field('additional_size');
$lazy_background_image = get_field('lazy_background_image');
$lazy_background_image_sm = get_field('lazy_background_image_sm');

?>

<!-- Beginn Header -->
<header class="bg-responsive banner lazyload"  data-sizes="auto"

<?php //Add the responsive background image only for matching templates
  if(is_page_template(array('page-templates/frontpage.php')) && $lazy_background_image): ?>
  data-bgset="<?php if($addional_image) { echo $lazy_background_image_sm['url']; ?> [(max-width: 768px)] |<?php } ?>
  <?php echo $lazy_background_image['url']; ?>"
<?php endif; ?>

><!-- Close Header -->
     <nav class="navbar navbar-toggleable-md navbar-light ">

      <div class="logo navbar-brand">

       <?php

       // Use the custom logo if uploaded in customizer
       $custom_logo_id = get_theme_mod( 'custom_logo' );
       $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );

       if(has_custom_logo()) {

          the_custom_logo();

        } else { // Otherwise use the default sg_hypertheme_company_name logo ?>

         <h1>
          <a class="brand" href="<?= esc_url(home_url('/')); ?>">
           <img src="<?php echo THEME_DIR_URI; ?>/assets/images/amigo_logo.svg" data-fallback="<?php echo get_template_directory_uri() ?>/assets/amigo_logo@2x.png" alt="logo">
          </a>
         </h1>

       <?php } ?>

      </div>

       <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>

       <?php
       if (has_nav_menu('primary_navigation')) :
          wp_nav_menu( array(
              'menu'              => 'primary_navigation',
              'theme_location'    => 'primary_navigation',
              'depth'             => 2,
              'container'         => 'div',
              'container_class'   => 'collapse navbar-collapse',
              'container_id'      => 'navbarSupportedContent',
              'menu_class'        => 'navbar-nav mr-auto',
              'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
              'walker'            => new wp_bootstrap_navwalker())
          );
       endif;
       ?>
     </nav>

   </div>
  </div>

<?php /*
<header class="banner">
  <div class="container">
    <a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
  </div>
</header>
*/
?>