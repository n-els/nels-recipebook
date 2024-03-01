<?php

// Custom Taxonomy: Zutatengruppe (nur für Rezepte)

function nerb_taxonomy_rezept_zutatengruppe()
{
    $labels = array(
        'name'                       => _x('Zutatengruppen', 'Taxonomy General Name', 'nerb'),
        'singular_name'              => _x('Zutatengruppe', 'Taxonomy Singular Name', 'nerb'),
        'menu_name'                  => __('Zutatengruppen', 'nerb'),
        'all_items'                  => __('Alle Zutatengruppen', 'nerb'),
        'parent_item'                => __('Übergeordnete Zutatengruppe', 'nerb'),
        'parent_item_colon'          => __('Übergeordnete Zutatengruppe:', 'nerb'),
        'new_item_name'              => __('Neue Zutatengruppe', 'nerb'),
        'add_new_item'               => __('Neue Zutatengruppe hinzufügen', 'nerb'),
        'edit_item'                  => __('Zutatengruppe bearbeiten', 'nerb'),
        'update_item'                => __('Zutatengruppe aktualisieren', 'nerb'),
        'separate_items_with_commas' => __('Zutatengruppen mit Kommas trennen', 'nerb'),
        'add_or_remove_items'        => __('Zutatengruppe hinzufügen oder entfernen', 'nerb'),
        'choose_from_most_used'      => __('Aus den meisten verwendeten Zutatengruppen auswählen', 'nerb'),
        'popular_items'              => __('Beliebte Zutatengruppen', 'nerb'),
        'search_items'               => __('Zutatengruppe suchen', 'nerb'),
        'not_found'                  => __('Keine Zutatengruppe gefunden', 'nerb'),
        'no_terms'                   => __('Keine Zutatengruppe', 'nerb'),
        'items_list'                 => __('Liste der Zutatengruppen', 'nerb'),
        'items_list_navigation'      => __('Navigation der Zutatengruppen', 'nerb'),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => false,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
        'show_in_rest'               => true,

    );
    register_taxonomy('zutatengruppe', array('rezept'), $args);
}

add_action('init', 'nerb_taxonomy_rezept_zutatengruppe', 0);
