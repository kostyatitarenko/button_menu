<?php
 include_once("functions.php");

$show_button_menu = getShowButton();
$show_button_menu_value = $show_button_menu[0][0];

$show_button_menu_in_mobile = getShowButtonInMobile();
$show_button_menu_in_mobile_value = $show_button_menu_in_mobile[0][0];

$name_menu = getNameMenu();
$name_menu_value = $name_menu[0][0];

$position_menu = getPosition();
$position_menu_value = $position_menu[0][0];

$structure_menu = getStructure();
$structure_menu_value = $structure_menu[0][0];

$from_menu = getForm();
$from_menu_value = $from_menu[0][0];

$type_button_menu =getTypeButton();
$type_button_menu_value_type = $type_button_menu[0][0];

$type_button_menu_value =getTypeButtonValue();
$type_button_menu_value_value = $type_button_menu_value[0][0];

$type_button_menu_icon =getTypeButtonValueIcon();
$type_button_menu_icon_value = $type_button_menu_icon[0][0];

$color_text_menu =getColorText();
$color_text_menu_value = $color_text_menu[0][0];

$color_background_menu =getColorBackground();
$color_background_menu_value = $color_background_menu[0][0];

$font_size_menu = getFontSize();
$font_size_menu_value = $font_size_menu[0][0];

$args_menu_button = array(
	'theme_location'  => $name_menu_value,
	'menu'            => '', 
	'container'       => 'div', 
	'container_class' => '', 
	'container_id'    => '',
	'menu_class'      => 'menu', 
	'menu_id'         => '',
	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'before'          => '',
	'after'           => '',
	'link_before'     => '',
	'link_after'      => '',
	'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
	'depth'           => 0,
	'walker'          => '',
);

