<?php
function save_options($name_menu, $position)
{
    global $wpdb;
    $name_menu = trim($name_menu);
    $position = trim($position);
    if ($name_menu == '' || $position == '') {
        return false;
    }
    $table = $wpdb->prefix . 'options_button_menu';
    $t ="UPDATE $table SET name_menu='%s', position='%s'";

    $query_update = $wpdb->prepare($t, $name_menu, $position);
    $result = $wpdb->query($query_update);

    if ($result === false) {
        die('Error database');
    }
    
    return true;
}

function getNameMenu()
{
    global $wpdb;
    $tab = $wpdb->prefix . 'options_button_menu';
    $v = "SELECT name_menu FROM $tab LIMIT 1";
    return $wpdb->get_results($v, ARRAY_N);
}
function getPosition()
{
    global $wpdb;
    $tab = $wpdb->prefix . 'options_button_menu';
    $v = "SELECT position FROM $tab LIMIT 1";
    return $wpdb->get_results($v, ARRAY_N);
}
