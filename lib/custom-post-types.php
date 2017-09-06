<?php

// Strings used throughout sg_hypertheme_dev_name.
require get_template_directory().'/theme-setup.php';

//FAQ custom post type

function cpt_faq() {

  $labels = array(
    'name'               => _x( 'FAQ', 'post type general name' ),
    'singular_name'      => _x( 'FAQ', 'post type singular name' ),
    'add_new'            => _x( 'Add','item'),
    'add_new_item'       => __( 'Add new item' ),
    'edit_item'          => __( 'Edit item' ),
    'new_item'           => __( 'New item' ),
    'all_items'          => __( 'All items' ),
    'view_item'          => __( 'View items' ),
    'search_items'       => __( 'Search items' ),
    'not_found'          => __( 'No items found' ),
    'not_found_in_trash' => __( 'No items found in trash' ),
    'parent_item_colon'  => '',
    'menu_name'          => 'FAQ'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'FAQ Management',
    'public'        => true,
    'menu_position' => 30,
    'exclude_from_search' => true,
    'show_in_admin_bar'   => false,
    'show_in_nav_menus'   => true,
    'publicly_queryable'  => false,
    'query_var'           => false,
    'supports'      => array( 'title','editor' ),
    'has_archive'   => false
  );
  register_post_type( 'faq', $args );

}

if($FAQ) {
 add_action( 'init', 'cpt_faq' );
}


//Client custom post type

function cpt_client() {

  $labels = array(
    'name'               => _x( 'Clients', 'post type general name' ),
    'singular_name'      => _x( 'Client', 'post type singular name' ),
    'add_new'            => _x( 'Add','client'),
    'add_new_item'       => __( 'Add new client' ),
    'edit_item'          => __( 'Edit client' ),
    'new_item'           => __( 'New client' ),
    'all_items'          => __( 'All clients' ),
    'view_item'          => __( 'View clients' ),
    'search_items'       => __( 'Search clients' ),
    'not_found'          => __( 'No clients found' ),
    'not_found_in_trash' => __( 'No clients found in trash' ),
    'parent_item_colon'  => '',
    'menu_name'          => 'Client'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Client Management',
    'public'        => true,
    'menu_position' => 30,
    'exclude_from_search' => true,
    'show_in_admin_bar'   => false,
    'show_in_nav_menus'   => true,
    'publicly_queryable'  => false,
    'query_var'           => false,
    'supports'      => array( 'title' ),
    'has_archive'   => false
  );
  register_post_type( 'client', $args );

}

if($CLIENTS) {
 add_action( 'init', 'cpt_client' );
}