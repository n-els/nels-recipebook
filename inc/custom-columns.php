<?php


/**
 * Modify the custom column headers for the given columns.
 *
 * @param array $columns The original array of column headers
 * @return array The modified array of column headers
 */
function nerb_rezept_custom_column_headers($columns)
{

    $columns = array(
        'cb' => $columns['cb'],
        'rezept_bild' => 'Bild',
        'title' => 'Name',
        'kochzeit' => 'Zeitaufwand',
        'schwierigkeit' => 'Schwierigkeit',
        'notiz' => 'Wichtige Notiz',
    );

    return $columns;
}

add_filter('manage_rezept_posts_columns', 'nerb_rezept_custom_column_headers');

/**
 * Function to customize column content based on column name and post ID.
 *
 * @param mixed $column The name of the column to customize.
 * @param int $post_id The ID of the post.
 */
function nerb_rezept_custom_column_content($column, $post_id)
{
    if ($column == 'kochzeit') {

        $total_time = get_total_time_of_recipe($post_id);

        if (empty($total_time)) {
            echo 'Nicht gesetzt';
            return;
        }

        echo $total_time . ' Minuten';
    }

    if ($column == 'schwierigkeit') {

        $difficulty = get_post_meta($post_id, 'difficulty', true);

        if (empty($difficulty)) {
            echo 'Nicht gesetzt';
            return;
        }

        echo $difficulty;
    }

    if ($column == 'rezept_bild') {
        echo get_the_post_thumbnail($post_id, 'thumbnail');
    }

    if ($column == 'notiz') {
        $notiz = get_post_meta($post_id, 'notiz', true);
        echo $notiz;
    }
}


add_action('manage_rezept_posts_custom_column', 'nerb_rezept_custom_column_content', 10, 2);


// // Spalte für das zugehörige Rezept in der Taxonomie-Übersicht hinzufügen
// function nerb_custom_taxonomy_columns($columns)
// {
//     $columns['related_recipe'] = __('Zugehöriges Rezept', 'nerb');

//     // disable unused columns
//     unset($columns['description']);
//     unset($columns['slug']);

//     return $columns;
// }

// add_filter('manage_edit-zutatengruppe_columns', 'nerb_custom_taxonomy_columns');

// // Inhalt für die benutzerdefinierte Spalte bereitstellen
// function nerb_custom_taxonomy_column_content($content, $column_name, $term_id)
// {
//     if ('related_recipe' === $column_name) {
//         // Hole die Daten für das zugehörige Rezept
//         $related_recipe = get_term_meta($term_id, 'related_recipe', true);

//         // Zeige den Namen des zugehörigen Rezepts an (kann angepasst werden)
//         $content = $related_recipe ? get_the_title($related_recipe) : __('Nicht zugeordnet', 'nerb');
//     }
//     return $content;
// }

// add_filter('manage_zutatengruppe_custom_column', 'nerb_custom_taxonomy_column_content', 10, 3);
