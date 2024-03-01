<?php

// Felder mit CMB2 für Zutatengruppen Taxonomie:

function nerb_zutatengruppe_custom_metabox()
{
    $metabox = new_cmb2_box(array(
        'id' => 'nerb_zutatengruppe',
        'title' => __('Zutatengruppe Eigenschaften', 'text_domain'),
        'object_types' => array('term'),
        'taxonomies' => array('zutatengruppe'),
        'show_names' => true,
        'context' => 'normal',
        'priority' => 'high',
        'closed' => true

    ));

    // title
    $metabox->add_field(array(
        'name' => 'Zutatengruppe Basisinformationen',
        'id' => 'basic_information_title',
        'type' => 'title',
    ));


    // $metabox->add_field(array(
    //     'name' => 'Zugehöriges Rezept',
    //     'desc' => 'Zu welchem Rezept gehört diese Zutatengruppe?',
    //     'id' => 'related_recipe',
    //     'type' => 'select',
    //     'options' => nerb_get_recipes_as_options(),

    // ));

    // title
    $metabox->add_field(array(
        'name' => 'Zutaten',
        'id' => 'ingredients_group_title',
        'type' => 'title',
    ));

    $ingredients_group_field_group = $metabox->add_field(array(
        'id' => 'ingredients_group',
        'type' => 'group',
        'options' => array(
            'group_title' => __('Zutat {#}', 'text_domain'),
            'add_button' => __('Zutat hinzufügen', 'text_domain'),
            'remove_button' => __('Zutat entfernen', 'text_domain'),
            'sortable' => true,
        ),
    ));

    $metabox->add_group_field($ingredients_group_field_group, array(
        'name' => 'Zutat',
        'id' => 'ingredient_name',
        'desc' => 'Name der Zutat',
        'type' => 'text',
    ));

    $metabox->add_group_field($ingredients_group_field_group, array(
        'name' => 'Menge',
        'id' => 'ingredient_quantity',
        'desc' => 'Menge der Zutat',
        'type' => 'text_small',
        'attributes' => array(
            'type' => 'number',
        )
    ));

    $metabox->add_group_field($ingredients_group_field_group, array(
        'name' => 'Einheit',
        'id' => 'ingredient_unit',
        'desc' => 'Einheit der Menge',
        'type' => 'select',
        'options' => nerb_get_units_as_options(),
    ));


    $metabox = new_cmb2_box(array(
        'id' => 'nerb_test',
        'title' => 'test',
        'object_types' => array('term'),
        'taxonomies' => array('zutatengruppe'),
        'show_names' => true,
        'context' => 'normal',
        'priority' => 'high',
        'closed' => true

    ));
}

add_action('cmb2_admin_init', 'nerb_zutatengruppe_custom_metabox', 99);

// Rezeptfelder
function nerb_rezept_custom_metabox()
{

    $metabox_basic_information = new_cmb2_box(array(
        'id' => 'nerb_recipe_basic_information',
        'title' => __('Rezept Eigenschaften', 'text_domain'),
        'object_types' => array('rezept'),
        'show_names' => true,
        'context' => 'side',
        'priority' => 'high',
        'closed' => false

    ));

    // Wichtige Notiz
    $metabox_basic_information->add_field(array(
        'name' => 'Wichtige Notiz',
        'desc' => 'Wichtige Notiz',
        'id' => 'notice',
        'type' => 'text',
    ));

    // Zubereitungszeit, Kochzeit, Portionen

    $metabox_basic_information->add_field(array(
        'name' => 'Zubereitungszeit',
        'desc' => 'Zubereitungszeit in Minuten',
        'id' => 'preparation_time',
        'type' => 'text_small',
        'attributes' => array(
            'type' => 'number',
        )
    ));

    $metabox_basic_information->add_field(array(
        'name' => 'Kochzeit',
        'desc' => 'Kochzeit in Minuten',
        'id' => 'cooking_time',
        'type' => 'text_small',
        'attributes' => array(
            'type' => 'number',
        )
    ));

    $metabox_basic_information->add_field(array(
        'name' => 'Portionen',
        'desc' => 'Portionen',
        'id' => 'servings',
        'type' => 'text_small',
        'attributes' => array(
            'type' => 'number',
        )
    ));

    $metabox_basic_information->add_field(array(
        'name' => 'Schwierigkeitsgrad',
        'desc' => 'Schwierigkeitsgrad',
        'id' => 'difficulty',
        'type' => 'select',
        'options' => array(
            'einfach' => 'Einfach',
            'mittel' => 'Mittel',
            'schwer' => 'Schwer',
        ),
        'default' => '1'

    ));

    $metabox_preparation_steps = new_cmb2_box(array(
        'id' => 'nerb_recipe_preparation_steps',
        'title' => __('Zubereitungsschritte', 'text_domain'),
        'object_types' => array('rezept'),
        'show_names' => true,
        'context' => 'normal',
        'priority' => 'high',
        'closed' => true
    ));


    $preperation_steps_group_field = $metabox_preparation_steps->add_field(array(
        'id' => 'ingredients_group',
        'type' => 'group',
        'title' => 'Zubereitungsschritte',
        'options' => array(
            'group_title' => __('Schritt {#}', 'text_domain'),
            'add_button' => __('Schritt hinzufügen', 'text_domain'),
            'remove_button' => __('Schritt entfernen', 'text_domain'),
            'sortable' => true,
        ),
    ));

    $metabox_preparation_steps->add_group_field($preperation_steps_group_field, array(
        'name' => 'Zubereitungsschritt',
        'id' => 'preparation_step',
        'type' => 'wysiwyg',
    ));
}

add_action('cmb2_admin_init', 'nerb_rezept_custom_metabox', 99);


function nerb_get_recipes_as_options()
{
    $recipes = get_posts(array(
        'post_type' => 'rezept',
        'posts_per_page' => -1
    ));
    $options = array();
    foreach ($recipes as $recipe) {
        $options[$recipe->ID] = $recipe->post_title;
    }
    return $options;
}


function nerb_get_units_as_options()
{
    $units = get_terms(array(
        'taxonomy' => 'einheit',
        'hide_empty' => false
    ));
    $options = array();
    foreach ($units as $unit) {
        $options[$unit->term_id] = $unit->name;
    }
    return $options;
}
