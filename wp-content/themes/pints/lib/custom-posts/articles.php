<?php
/*  ==========================================================================
    Change "Posts" to "Articles" 
    http://stackoverflow.com/a/12950041
    ========================================================================== */

    function change_post_menu_label() {
        global $menu;
        global $submenu;
        $menu[5][0] = __('Articles', 'roots');
        $submenu['edit.php'][5][0] = __('Articles', 'roots');
        $submenu['edit.php'][10][0] = __('Add Aritcles', 'roots');
        echo '';
    }
    function change_post_object_label() {
        global $wp_post_types;
        $labels = &$wp_post_types['post']->labels;
        $labels->name = __('Articles', 'roots');
        $labels->singular_name = __('Article', 'roots');
        $labels->add_new = __('Add Article', 'roots');
        $labels->add_new_item = __('Add Article', 'roots');
        $labels->edit_item = __('Edit Article', 'roots');
        $labels->new_item = __('Article', 'roots');
        $labels->view_item = __('View Article', 'roots');
        $labels->search_items = __('Search Articles', 'roots');
        $labels->not_found = __('No articles found', 'roots');
        $labels->not_found_in_trash = __('No articles found in Trash', 'roots');
    }
    add_action( 'init', 'change_post_object_label' );
    add_action( 'admin_menu', 'change_post_menu_label' );
    
    

    /*  ==========================================================================
    Init custom fields
    ========================================================================== */
    add_action('after_setup_theme', 'article_custom_fields', 11);
    function article_custom_fields() {

        if(function_exists("register_field_group")) {
            register_field_group(array (
                'id' => 'acf_article-fields',
                'title' => 'Article Fields',
                'fields' => array (
                    array (
                        'key' => 'field_article_format',
                        'label' => 'Article Format',
                        'name' => 'article_format',
                        'type' => 'radio',
                        'required' => 1,
                        'choices' => array (
                            'single_article' => 'Single Article',
                            'single_image' => 'Single Image',
                            'slider'=> 'Image slider',
                            'video' => 'Video',
                        ),
                        'other_choice' => 0,
                        'save_other_choice' => 0,
                        'default_value' => 'single_article',
                        'layout' => 'vertical',
                    ),
                ),
                'location' => array (
                    array (
                        array (
                            'param' => 'post_type',
                            'operator' => '==',
                            'value' => 'post',
                            'order_no' => 0,
                            'group_no' => 0,
                        ),
                    ),
                ),
                'options' => array (
                    'position' => 'side',
                    'layout' => 'default',
                    'hide_on_screen' => array (
                    ),
                ),
                'menu_order' => 0,
            ));
        }
    }

    ?>
