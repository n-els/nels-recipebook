<?php

/**
 * Calculate the total time of a recipe.
 *
 * @param int $recipe_id The ID of the recipe.
 * @return int The total time of the recipe.
 */
function get_total_time_of_recipe($recipe_id)
{

    $cooking_time = get_post_meta($recipe_id, 'cooking_time', true);
    $preparation_time = get_post_meta($recipe_id, 'preparation_time', true);

    if (empty($cooking_time) && empty($preparation_time)) {
        return false;
    }

    $total_time = $cooking_time + $preparation_time;

    return $total_time;
}
