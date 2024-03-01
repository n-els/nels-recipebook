<?php

class RecipeBook
{

    public static function init()
    {
        // require_once __DIR__ . '/cmb2/init.php';
        self::loadAssets();
        self::load_admin_options();
        self::load_post_types();
        self::load_taxonomies();
        self::load_custom_fields();
        self::load_custom_columns();
        self::load_helpers();
    }

    public static function loadAssets()
    {
        // add js files etc
    }

    public static function load_admin_options()
    {
        require_once __DIR__ . '/inc/admin.php';
    }

    public static function load_post_types()
    {
        require_once __DIR__ . '/inc/post-types/index.php';
    }

    public static function load_taxonomies()
    {
        require_once __DIR__ . '/inc/taxonomies/index.php';
    }

    public static function load_custom_fields()
    {
        require_once __DIR__ . '/inc/custom-fields.php';
    }

    public static function load_custom_columns()
    {
        require_once __DIR__ . '/inc/custom-columns.php';
    }

    public static function load_helpers()
    {
        require_once __DIR__ . '/inc/helpers.php';
    }
}
