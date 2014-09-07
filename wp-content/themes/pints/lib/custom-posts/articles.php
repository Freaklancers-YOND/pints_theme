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
?>
