<?php
function save_options(
    $show_button,
    $show_in_mobile,
    $name_menu,
    $position,
    $structure,
    $form,
    $type_button,
    $type_button_value,
    $type_button_value_icon,
    $color_text,
    $color_background,
    $font_size
) {
    global $wpdb;
    $show_button = trim($show_button);
    if ($show_button == '') {
        $show_button = 'no';
    }
    $show_in_mobile = trim($show_in_mobile);
    if ($show_in_mobile == '') {
        $show_in_mobile = 'no';
    }
    $name_menu = trim($name_menu);
    $position = trim($position);
    $structure = trim($structure);
    $form = trim($form);
    $type_button = trim($type_button);
    $type_button_value = trim($type_button_value);
    if($type_button_value == ''){
        $type_button_value = 'Menu';
    }
    $type_button_value_icon = trim($type_button_value_icon);
    if($type_button_value_icon == ''){
        $type_button_value_icon = 'fa-reorder';
    }
    $color_text = trim($color_text);
    if ($color_text == '') {
        $color_text = '#000000';
    }
    $color_background = trim($color_background);
    if ($color_background == '') {
        $color_background = 'transparent';
    }
    $font_size = trim($font_size);
    if ($font_size == '') {
        $font_size = '14';
    }
    
    if ($show_button == '' ||$show_in_mobile==""|| $name_menu == '' || $position == '' ||  $structure == ""
     || $form == "" || $type_button ==""|| $type_button_value==""|| $type_button_value_icon=="" || $color_text == ""||$color_background==""
     || $font_size == "" || !is_numeric($font_size)) {
        return false;
    }
    $table = $wpdb->prefix . 'options_button_menu';
    $t ="UPDATE $table 
        SET show_button='%s',show_in_mobile='%s', name_menu='%s', position='%s', structure='%s', form='%s',type_button ='%s',type_button_value ='%s',type_button_value_icon='%s', color_text ='%s',color_background='%s',font_size='%s';";

    $query_update = $wpdb->prepare($t, $show_button,$show_in_mobile, $name_menu, $position, $structure, $form, $type_button,$type_button_value,$type_button_value_icon, $color_text, $color_background, $font_size);
    $result = $wpdb->query($query_update);

    if ($result === false) {
        
        die('Error database');
    }
    return true;
}


function getShowButton()
{
    global $wpdb;
    $tab = $wpdb->prefix . 'options_button_menu';
    $v = "SELECT show_button  FROM $tab LIMIT 1;";
    return $wpdb->get_results($v, ARRAY_N);
}

function getShowButtonInMobile()
{
    global $wpdb;
    $tab = $wpdb->prefix . 'options_button_menu';
    $v = "SELECT show_in_mobile  FROM $tab LIMIT 1;";
    return $wpdb->get_results($v, ARRAY_N);
}


function getNameMenu()
{
    global $wpdb;
    $tab = $wpdb->prefix . 'options_button_menu';
    $v = "SELECT name_menu FROM $tab LIMIT 1;";
    return $wpdb->get_results($v, ARRAY_N);
}
function getPosition()
{
    global $wpdb;
    $tab = $wpdb->prefix . 'options_button_menu';
    $v = "SELECT position FROM $tab LIMIT 1;";
    return $wpdb->get_results($v, ARRAY_N);
}
function getStructure()
{
    global $wpdb;
    $tab = $wpdb->prefix . 'options_button_menu';
    $v = "SELECT structure FROM $tab LIMIT 1;";
    return $wpdb->get_results($v, ARRAY_N);
}
function getForm()
{
    global $wpdb;
    $tab = $wpdb->prefix . 'options_button_menu';
    $v = "SELECT form FROM $tab LIMIT 1;";
    return $wpdb->get_results($v, ARRAY_N);
}

function getTypeButton()
{
    global $wpdb;
    $tab = $wpdb->prefix . 'options_button_menu';
    $v = "SELECT type_button FROM $tab LIMIT 1;";
    return $wpdb->get_results($v, ARRAY_N);
}

function getColorText()
{
    global $wpdb;
    $tab = $wpdb->prefix . 'options_button_menu';
    $v = "SELECT color_text FROM $tab LIMIT 1;";
    return $wpdb->get_results($v, ARRAY_N);
}

function getColorBackground()
{
    global $wpdb;
    $tab = $wpdb->prefix . 'options_button_menu';
    $v = "SELECT color_background FROM $tab LIMIT 1;";
    return $wpdb->get_results($v, ARRAY_N);
}

function getFontSize()
{
    global $wpdb;
    $tab = $wpdb->prefix . 'options_button_menu';
    $v = "SELECT font_size FROM $tab LIMIT 1;";
    return $wpdb->get_results($v, ARRAY_N);
}

function getTypeButtonValue()
{
    global $wpdb;
    $tab = $wpdb->prefix . 'options_button_menu';
    $v = "SELECT type_button_value FROM $tab LIMIT 1;";
    return $wpdb->get_results($v, ARRAY_N);
}

function getTypeButtonValueIcon()
{
    global $wpdb;
    $tab = $wpdb->prefix . 'options_button_menu';
    $v = "SELECT type_button_value_icon FROM $tab LIMIT 1;";
    return $wpdb->get_results($v, ARRAY_N);
}
