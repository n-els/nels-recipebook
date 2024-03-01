<?php

// Custom Post Type Rezept

function nerb_rezept_post_type()
{
    $labels = array(
        'name'                => _x('Rezepte', 'Post Type General Name', 'nerb'),
        'singular_name'       => _x('Rezept', 'Post Type Singular Name', 'nerb'),
        'menu_name'           => __('Rezepte', 'nerb'),
        'parent_item_colon'   => __('Parent Rezept', 'nerb'),
        'all_items'           => __('Alle Rezepte', 'nerb'),
        'view_item'           => __('Rezept ansehen', 'nerb'),
        'add_new_item'        => __('Neues Rezept hinzufügen', 'nerb'),
        'add_new'             => __('Neues Rezept', 'nerb'),
        'edit_item'           => __('Rezept bearbeiten', 'nerb'),
        'update_item'         => __('Rezept aktualisieren', 'nerb'),
        'search_items'        => __('Rezept suchen', 'nerb'),
        'not_found'           => __('Keine Rezepte gefunden', 'nerb'),
        'not_found_in_trash'  => __('Keine Rezepte im Papierkorb gefunden', 'nerb'),
        'featured_image'      => __('Rezeptbild', 'nerb'),
        'set_featured_image'  => __('Rezeptbild festlegen', 'nerb'),
        'remove_featured_image' => __('Rezeptbild entfernen', 'nerb'),
        'use_featured_image'  => __('Rezeptbild benutzen', 'nerb'),
        'archives'            => __('Rezeptarchiv', 'nerb'),
        'insert_into_item'    => __('Rezept einstellen', 'nerb'),
        'uploaded_to_this_item' => __('Rezept hochgeladen', 'nerb'),
        'filter_items_list'   => __('Rezeptliste filtern', 'nerb'),
        'items_list_navigation' => __('Rezeptnavigation', 'nerb'),
        'items_list'          => __('Rezeptliste', 'nerb'),

    );
    $args = array(
        'label'               => __('Rezepte', 'nerb'),
        'description'         => __('Rezepte', 'nerb'),
        'labels'              => $labels,
        'supports'            => array('title', 'editor', 'thumbnail', 'revisions'),
        'taxonomies'          => array('category', 'post_tag', 'zutatengruppe'),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-carrot',
        'show_in_admin_bar'   => true,
        'show_in_nav_menus'   => true,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
        'show_in_rest'        => true
    );
    register_post_type('rezept', $args);
}

add_action('init', 'nerb_rezept_post_type');
