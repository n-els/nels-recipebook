<?php

function nerb_taxonomy_rezept_kochutensilien()
{

    $labels = array(
        'name'                       => _x('Kochutensilien', 'Taxonomy General Name', 'nerb'),
        'singular_name'              => _x('Kochutensilie', 'Taxonomy Singular Name', 'nerb'),
        'menu_name'                  => __('Kochutensilien', 'nerb'),
        'all_items'                  => __('Alle Kochutensilien', 'nerb'),
        'parent_item'                => __('Übergeordnete Kochutensilie', 'nerb'),
        'parent_item_colon'          => __('Übergeordnete Kochutensilie:', 'nerb'),
        'new_item_name'              => __('Neue Kochutensilie', 'nerb'),
        'add_new_item'               => __('Neue Kochutensilie hinzufügen', 'nerb'),
        'edit_item'                  => __('Kochutensilie bearbeiten', 'nerb'),
        'update_item'                => __('Kochutensilie aktualisieren', 'nerb'),
        'separate_items_with_commas' => __('Kochutensilien mit Kommas trennen', 'nerb'),
        'add_or_remove_items'        => __('Kochutensilie hinzufügen', 'nerb'),
        'choose_from_most_used'      => __('Aus den meisten verwendeten Kochutensilien auswählen', 'nerb'),
        'popular_items'              => __('Beliebte Kochutensilien', 'nerb'),
        'search_items'               => __('Kochutensilie suchen', 'nerb'),
        'not_found'                  => __('Keine Kochutensilie gefunden', 'nerb'),
        'no_terms'                   => __('Keine Kochutensilie', 'nerb'),
        'items_list'                 => __('Liste der Kochutensilien', 'nerb'),
        'items_list_navigation'      => __('Navigation der Kochutensilien', 'nerb'),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => false,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
        'show_in_rest'               => true
    );
    register_taxonomy('kochutensilie', array('rezept'), $args);
}

add_action('init', 'nerb_taxonomy_rezept_kochutensilien', 0);
