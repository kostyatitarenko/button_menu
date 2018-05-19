<?php
/*
Plugin Name: Button Menu
Plugin URI:
Description:
Version: 1.0.0
Author: Kostya
Author URI:
*/

function button_menu_install()
{
    global $wpdb;
    $table_name = $wpdb->prefix . 'options_button_menu';
    $all_menu = get_registered_nav_menus();
   

    if ($wpdb->get_var("SHOW TABLES LIKE $table_name") != $table_name) {
        $sql = "CREATE TABLE IF NOT EXISTS `$table_name` (
            -- `id_option` int(11) NOT NULL AUTO_INCREMENT,
            `show_button` varchar(40) NOT NULL,
            `show_in_mobile` varchar(40) NOT NULL,
            `name_menu` varchar(40) NOT NULL,
            `position` varchar(40) NOT NULL,
            `structure` varchar(40) NOT NULL,
            `form` varchar(40) NOT NULL,
            `type_button` varchar(40) NOT NULL,
            `type_button_value` varchar(40) NOT NULL,
            `type_button_value_icon` varchar(40) NOT NULL,
            `color_text` varchar(40) NOT NULL,
            `color_background` varchar(40) NOT NULL,
            `font_size` varchar(40) NOT NULL
            
            -- `value_option` varchar(40) NOT NULL,
            --  PRIMARY KEY(`id_option`)
        ) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT = 1;";

        $keys = array_keys($all_menu);
        if ($all_menu) {
            $name_menu_first = $keys[0];
        } else {
            $name_menu_first = '';
        }
        $wpdb->query($sql);

        $sql2 = "INSERT INTO `$table_name` (show_button,show_in_mobile, name_menu, position, structure, form, type_button,type_button_value,type_button_value_icon, color_text, color_background,font_size) 
                VALUES ('yes','yes','%s','right_bottom', 'horizontal_line','squire','text','Menu','fa-reorder', '#000000','transparent','14');";
        $query = $wpdb->prepare($sql2, $name_menu_first);
        $wpdb->query($query);
    }
}

function button_menu_uninstall()
{
    global $wpdb;
    $table_name = $wpdb->prefix . 'options_button_menu';
    $sql ="DROP TABLE IF  EXISTS  `$table_name`";
    $wpdb->query($sql);
}

function button_menu_delete()
{
    global $wpdb;
    $table_name = $wpdb->prefix . 'options_button_menu';
    $sql ="DROP TABLE IF  EXISTS  `$table_name`";
    $wpdb->query($sql);
}

register_activation_hook(__FILE__, 'button_menu_install');
register_deactivation_hook(__FILE__, 'button_menu_uninstall');
register_uninstall_hook(__FILE__, 'button_menu_delete');

function button_menu_admin_menu()
{
    add_menu_page('Button Menu', 'Button Menu', 8, 'button_menu', 'button_menu_editor', 'dashicons-menu');
}

function button_menu_editor()
{
    include_once("includes/view_admin.php");
}
add_action('admin_menu', 'button_menu_admin_menu');


function showButton()
{
    include_once("view/show_button.php");
}
add_action('wp_head', 'showButton');





function button_menu_scripts()
{
    wp_enqueue_script('button_menu_script', plugins_url('includes/assets/js/common.js', __FILE__), array('jquery'), null);
    
    wp_enqueue_style('button_menu_style', plugins_url('includes/assets/css/style.css', __FILE__));
}
add_action('wp_enqueue_scripts', 'button_menu_scripts');

function button_menu_scripts_admin()
{
    wp_enqueue_script('button_menu_script', plugins_url('includes/assets/js/common-admin.js', __FILE__), '', null);
    wp_enqueue_script('wp-color-picker');
    
    wp_enqueue_style('button_menu_style', plugins_url('includes/assets/css/style-admin.css', __FILE__), '', null);
}
add_action('admin_footer', 'button_menu_scripts_admin');
