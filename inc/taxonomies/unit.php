<?php

function nerb_taxonomy_rezept_einheit()
{

    $labels = array(
        'name'                       => _x('Einheiten', 'Taxonomy General Name', 'nerb'),
        'singular_name'              => _x('Einheit', 'Taxonomy Singular Name', 'nerb'),
        'menu_name'                  => __('Einheiten', 'nerb'),
        'all_items'                  => __('Alle Einheiten', 'nerb'),
        'parent_item'                => __('Übergeordnete Einheit', 'nerb'),
        'parent_item_colon'          => __('Übergeordnete Einheit:', 'nerb'),
        'new_item_name'              => __('Neue Einheit', 'nerb'),
        'add_new_item'               => __('Neue Einheit hinzufügen', 'nerb'),
        'edit_item'                  => __('Einheit bearbeiten', 'nerb'),
        'update_item'                => __('Einheit aktualisieren', 'nerb'),
        'separate_items_with_commas' => __('Einheiten mit Kommas trennen', 'nerb'),
        'add_or_remove_items'        => __('Einheit hinzufügen', 'nerb'),
        'choose_from_most_used'      => __('Aus den meisten verwendeten Einheiten auswählen', 'nerb'),
        'popular_items'              => __('Beliebte Einheiten', 'nerb'),
        'search_items'               => __('Einheit suchen', 'nerb'),
        'not_found'                  => __('Keine Einheit gefunden', 'nerb'),
        'no_terms'                   => __('Keine Einheit', 'nerb'),
        'items_list'                 => __('Liste der Einheiten', 'nerb'),
        'items_list_navigation'      => __('Navigation der Einheiten', 'nerb'),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => false,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
    );
    register_taxonomy('einheit', array('rezept'), $args);
}

add_action('init', 'nerb_taxonomy_rezept_einheit', 0);
