<?php
 include_once("/../includes/values.php");

 if ($show_button_menu_value == 'yes') {
     ?>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

<div id="menu_button_perfect" class="menu_button_perfect_styles <?php 
    if ($position_menu_value) {
        echo ' menu_button_perfect_position_'.$position_menu_value;
    }
     if ($structure_menu_value) {
         echo ' menu_button_perfect_structure_'.$structure_menu_value;
     } ?>">
    <div class="button_meu_perfect" <?php
         if ($color_text_menu_value && $font_size_menu_value ) {
            echo "style=color:$color_text_menu_value; font-size:".$font_size_menu_value."px" ;
        }
    ?>>

        <?php if ($type_button_menu_value_type=="text") {
         ?>
        <span>
            <?php echo $type_button_menu_value_value; ?>
        </span>
        <?php
     }
     if ($type_button_menu_value_type=="icon") {
         ?>
        <i class="fa <?php  echo $type_button_menu_icon_value; ?>"></i>
        <?php
     } ?>
    </div>
    <?php wp_nav_menu($args_menu_button); ?>
</div>

<?php
 }
