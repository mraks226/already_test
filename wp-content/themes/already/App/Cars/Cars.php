<?php

namespace App\Cars;

class Cars {
    public function __construct()
    {
        add_action('init', [__CLASS__, 'register_cars_type']);
    }

    public static function register_cars_type()
    {
        register_post_type('cars', [
            'labels' => [
                'name' => __('Cars', 'already'),
                'singular_name' => __('Car', 'already'),
                'add_new' => __('Add new', 'already'),
                'add_new_item' => __('Add new car', 'already'),
                'edit_item' => __('Edit car', 'already'),
                'new_item' => __('New car', 'already'),
                'view_item' => __('View car', 'already'),
                'search_items' => __('Search car', 'already'),
                'not_found' => __('Car not found', 'already'),
                'not_found_in_trash' => __('Car not found in trash', 'already'),
                'parent_item_colon' => '',
                'menu_name' => __('Cars', 'already'),

            ],
            'public' => false,
            'publicly_queryable' => false,
            'show_ui' => true,
            'show_in_menu' => true,
            'query_var' => true,
            'rewrite' => true,
            'capability_type' => 'post',
            'has_archive' => false,
            'hierarchical' => false,
            'menu_position' => null,
            'supports' => ['title', 'thumbnail'],
            'taxonomy' => true,
        ]);

        register_taxonomy( 'models', [ 'cars' ], [
            'label'                 => 'models',
            'labels'                => [
                'name'              => 'Models',
                'singular_name'     => 'Model',
                'search_items'      => 'Model',
                'all_items'         => 'All Models',
                'view_item '        => 'View Model',
                'parent_item'       => 'Parent Model',
                'parent_item_colon' => 'Parent Model:',
                'edit_item'         => 'Edit Model',
                'update_item'       => 'Update Model',
                'add_new_item'      => 'Add New Model',
                'new_item_name'     => 'New Model Name',
                'menu_name'         => 'Models',
                'back_to_items'     => '← Back to Models',
            ],
            'description'           => '',
            'public'                => true,
            'hierarchical'          => true,
            'rewrite'               => true,
            'capabilities'          => array(),
            'meta_box_cb'           => null,
            'show_admin_column'     => false,
            'show_in_rest'          => null,
            'rest_base'             => null,
        ] );

        register_taxonomy( 'types', [ 'cars' ], [
            'label'                 => 'types',
            'labels'                => [
                'name'              => 'Types',
                'singular_name'     => 'Type',
                'search_items'      => 'Type',
                'all_items'         => 'All Types',
                'view_item '        => 'View Type',
                'parent_item'       => 'Parent Type',
                'parent_item_colon' => 'Parent Type:',
                'edit_item'         => 'Edit Type',
                'update_item'       => 'Update Type',
                'add_new_item'      => 'Add New Type',
                'new_item_name'     => 'New Type Name',
                'menu_name'         => 'Types',
                'back_to_items'     => '← Back to Types',
            ],
            'description'           => '',
            'public'                => true,
            'hierarchical'          => true,
            'rewrite'               => true,
            'capabilities'          => array(),
            'meta_box_cb'           => null,
            'show_admin_column'     => false,
            'show_in_rest'          => null,
            'rest_base'             => null,
        ] );

        register_taxonomy( 'colors', [ 'cars' ], [
            'label'                 => 'colors',
            'labels'                => [
                'name'              => 'Colors',
                'singular_name'     => 'Color',
                'search_items'      => 'Color',
                'all_items'         => 'All Colors',
                'view_item '        => 'View Color',
                'parent_item'       => 'Parent Color',
                'parent_item_colon' => 'Parent Color:',
                'edit_item'         => 'Edit Color',
                'update_item'       => 'Update Color',
                'add_new_item'      => 'Add New Color',
                'new_item_name'     => 'New Color Name',
                'menu_name'         => 'Colors',
                'back_to_items'     => '← Back to Colors',
            ],
            'description'           => '',
            'public'                => true,
            'hierarchical'          => true,
            'rewrite'               => true,
            'capabilities'          => array(),
            'meta_box_cb'           => null,
            'show_admin_column'     => false,
            'show_in_rest'          => null,
            'rest_base'             => null,
        ] );

        register_taxonomy( 'years', [ 'cars' ], [
            'label'                 => 'years',
            'labels'                => [
                'name'              => 'Years',
                'singular_name'     => 'Year',
                'search_items'      => 'Year',
                'all_items'         => 'All Years',
                'view_item '        => 'View Year',
                'parent_item'       => 'Parent Year',
                'parent_item_colon' => 'Parent Year:',
                'edit_item'         => 'Edit Year',
                'update_item'       => 'Update Year',
                'add_new_item'      => 'Add New Year',
                'new_item_name'     => 'New Year Name',
                'menu_name'         => 'Years',
                'back_to_items'     => '← Back to Years',
            ],
            'description'           => '',
            'public'                => true,
            'hierarchical'          => true,
            'rewrite'               => true,
            'capabilities'          => array(),
            'meta_box_cb'           => null,
            'show_admin_column'     => false,
            'show_in_rest'          => null,
            'rest_base'             => null,
        ] );
    }
}