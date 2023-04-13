<?php  

 class custom_post{
    function init()
    {
        // Add Slider Custom post action
        add_action('init', [$this, 'awp_slider_custom_post_type']);

    /**
     * Register Custom Post Type
     */

    function awp_slider_custom_post_type()
    {

        $labels = array(
            'name'                  => _x('AWP Sliders', 'Post Type General Name', 'awpslider'),
            'singular_name'         => _x('AWP Slider', 'Post Type Singular Name', 'awpslider'),
            'menu_name'             => __('AWP Sliders', 'awpslider'),
            'name_admin_bar'        => __('AWP Slider', 'awpslider'),
            'archives'              => __('Item Archives', 'awpslider'),
            'attributes'            => __('Item Attributes', 'awpslider'),
            'parent_item_colon'     => __('Parent Item:', 'awpslider'),
            'all_items'             => __('All Items', 'awpslider'),
            'add_new_item'          => __('Add New Item', 'awpslider'),
            'add_new'               => __('Add New', 'awpslider'),
            'new_item'              => __('New Item', 'awpslider'),
            'edit_item'             => __('Edit Item', 'awpslider'),
            'update_item'           => __('Update Item', 'awpslider'),
            'view_item'             => __('View Item', 'awpslider'),
            'view_items'            => __('View Items', 'awpslider'),
            'search_items'          => __('Search Item', 'awpslider'),
            'not_found'             => __('Not found', 'awpslider'),
            'not_found_in_trash'    => __('Not found in Trash', 'awpslider'),
            'featured_image'        => __('Featured Image', 'awpslider'),
            'set_featured_image'    => __('Set featured image', 'awpslider'),
            'remove_featured_image' => __('Remove featured image', 'awpslider'),
            'use_featured_image'    => __('Use as featured image', 'awpslider'),
            'insert_into_item'      => __('Insert into item', 'awpslider'),
            'uploaded_to_this_item' => __('Uploaded to this item', 'awpslider'),
            'items_list'            => __('Items list', 'awpslider'),
            'items_list_navigation' => __('Items list navigation', 'awpslider'),
            'filter_items_list'     => __('Filter items list', 'awpslider'),
        );
        $args = array(
            'label'                 => __('AWP Slider', 'awpslider'),
            'description'           => __('AWP Slider Description', 'awpslider'),
            'labels'                => $labels,
            'supports'              => array('title', 'editor', 'thumbnail'),
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'       => 'page',
        );
        register_post_type('awp-slider', $args);
    }


 }

new custom_post();
?>