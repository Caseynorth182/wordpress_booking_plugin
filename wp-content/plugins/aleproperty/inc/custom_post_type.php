<?php
if (!class_exists('aleProperty_custom_post_type')) {


    class aleProperty_custom_post_type
    {
        public  function register()
        {
            add_action('init', [$this, 'custom_post_type']);
        }

        public function custom_post_type()
        {
            register_post_type('property', [
                'public' => true,
                'has_archive' => true,
                'rewrite' => ['slug' => 'properties '],
                'label' => 'Property',
                'supports' => ['title', 'editor', 'thumbnail']
            ]);

            register_post_type('agent', [
                'public' => true,
                'has_archive' => true,
                'rewrite' => ['slug' => 'agents '],
                'label' => 'Agents',
                'supports' => ['title', 'editor', 'thumbnail'],
                'show_in_rest' => true
            ]);

            register_taxonomy('location', 'property', [
                'label'                 => '', // определяется параметром $labels->name
                'labels'                => [
                    'name'              => _x('Location', 'aleproperty'),
                    'singular_name'     => _x('Location', 'aleproperty'),
                    'search_items'      => esc_html__('Search Location', 'aleproperty'),
                    'all_items'         => esc_html__('All Location', 'aleproperty'),
                    'view_item '        => esc_html__('View Location', 'aleproperty'),
                    'parent_item'       => esc_html__('Parent Location', 'aleproperty'),
                    'parent_item_colon' => esc_html__('Parent Location:', 'aleproperty'),
                    'edit_item'         => esc_html__('Edit Location', 'aleproperty'),
                    'update_item'       => esc_html__('Update Location', 'aleproperty'),
                    'add_new_item'      => esc_html__('Add New Location', 'aleproperty'),
                    'new_item_name'     => esc_html__('New Location Name', 'aleproperty'),
                    'menu_name'         => esc_html__('Location', 'aleproperty'),
                    'back_to_items'     => esc_html__('← Back to Location', 'aleproperty'),
                ],
                'description'           => '', // описание таксономии
                'public'                => true,
                'publicly_queryable'    => null, // равен аргументу public
                'show_in_nav_menus'     => true, // равен аргументу public
                'show_ui'               => true, // равен аргументу public
                'show_in_menu'          => true, // равен аргументу show_ui
                'show_tagcloud'         => true, // равен аргументу show_ui
                'show_in_quick_edit'    => null, // равен аргументу show_ui
                'hierarchical'          => false,
                'show_admin_column' => true,
                'rewrite'               => ['slug' => 'properties/location'],
                'query_var'             => true, // название параметра запроса
                'capabilities'          => array(),
                'meta_box_cb'           => null, // html метабокса. callback: `post_categories_meta_box` или `post_tags_meta_box`. false — метабокс отключен.
                'show_admin_column'     => false, // авто-создание колонки таксы в таблице ассоциированного типа записи. (с версии 3.5)
                'show_in_rest'          => null, // добавить в REST API
                'rest_base'             => null, // $taxonomy
                // '_builtin'              => false,
                //'update_count_callback' => '_update_post_term_count',
            ]);
            register_taxonomy('property-type', 'property', [
                'label'                 => '', // определяется параметром $labels->name
                'labels'                => [
                    'name'              => _x('Type', 'aleproperty'),
                    'singular_name'     => _x('Type', 'aleproperty'),
                    'search_items'      => esc_html__('Search Type', 'aleproperty'),
                    'all_items'         => esc_html__('All Type', 'aleproperty'),
                    'view_item '        => esc_html__('View Type', 'aleproperty'),
                    'parent_item'       => esc_html__('Parent Type', 'aleproperty'),
                    'parent_item_colon' => esc_html__('Parent Type:', 'aleproperty'),
                    'edit_item'         => esc_html__('Edit Type', 'aleproperty'),
                    'update_item'       => esc_html__('Update Type', 'aleproperty'),
                    'add_new_item'      => esc_html__('Add New Type', 'aleproperty'),
                    'new_item_name'     => esc_html__('New Type Name', 'aleproperty'),
                    'menu_name'         => esc_html__('Type', 'aleproperty'),
                    'back_to_items'     => esc_html__('← Back to Type', 'aleproperty'),
                ],
                'description'           => '', // описание таксономии
                'public'                => true,
                'publicly_queryable'    => null, // равен аргументу public
                'show_in_nav_menus'     => true, // равен аргументу public
                'show_ui'               => true, // равен аргументу public
                'show_in_menu'          => true, // равен аргументу show_ui
                'show_tagcloud'         => true, // равен аргументу show_ui
                'show_in_quick_edit'    => null, // равен аргументу show_ui
                'hierarchical'          => false,
                'show_admin_column' => true,
                'rewrite'               => ['slug' => 'properties/type'],
                'query_var'             => true, // название параметра запроса
                'capabilities'          => array(),
                'meta_box_cb'           => null, // html метабокса. callback: `post_categories_meta_box` или `post_tags_meta_box`. false — метабокс отключен.
                'show_admin_column'     => false, // авто-создание колонки таксы в таблице ассоциированного типа записи. (с версии 3.5)
                'show_in_rest'          => null, // добавить в REST API
                'rest_base'             => null, // $taxonomy
                // '_builtin'              => false,
                //'update_count_callback' => '_update_post_term_count',
            ]);
        }
    }
}

if (class_exists('aleProperty_custom_post_type')) {
    $aleProperty_custom_post_type = new aleProperty_custom_post_type();
    $aleProperty_custom_post_type->register();
}