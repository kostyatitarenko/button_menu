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
            `name_menu` varchar(40) NOT NULL,
            `position` varchar(40) NOT NULL
            -- `value_option` varchar(40) NOT NULL,
            --  PRIMARY KEY(`id_option`)
        ) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT = 1;";

        $keys = array_keys($all_menu);
        if ($all_menu) {
            $name_menu_first = $keys[0];
        } else {
            $name_menu_first = '';
        }
        $sql2 = "INSERT INTO `$table_name` (name_menu, position) VALUES ('%s','right_bottom');";
        $query = $wpdb->prepare($sql2,$name_menu_first);
        $wpdb->query($sql);
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
    include_once("includes/view.php");
}

add_action('admin_menu', 'button_menu_admin_menu');
