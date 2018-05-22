<?php
 include_once(dirname(__FILE__)."/../includes/values.php");

 if ($show_button_menu_value == 'yes') {
     ?>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

<?php 
$class_menu;
     if ($position_menu_value) {
        $class_menu = ' menu_button_perfect_position_'.$position_menu_value;
     }
     if ($structure_menu_value) {
        $class_menu.= ' menu_button_perfect_structure_'.$structure_menu_value;
     } 
     if ($from_menu_value){
        $class_menu.= ' from_menu_'.$from_menu_value;
     }
     if ($show_button_menu_in_mobile_value == "no"){
        $class_menu.= ' no_mobile_menu_button';
     }
    
     ?>


<div id="menu_button_perfect" class="menu_button_perfect_styles  <?php echo $class_menu; ?>">
    <div class="button_meu_perfect" <?php  
         echo "style='color:$color_text_menu_value; font-size:".$font_size_menu_value. "px; color:$color_text_menu_value; background:$color_background_menu_value'" ;
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

     <div class="close_button"></div>

    </div>
    <?php wp_nav_menu($args_menu_button); ?>



</div>

<script>
jQuery(document).ready(function ($) {
    $(".open_btn").on("click", function (event) {
        $(".circle-nav div").toggleClass("open");
    });

    var menuList = document.querySelectorAll('#menu_button_perfect #menu_button_perfect_list li');
    var containerMenu = document.querySelector('#menu_button_perfect #menu_button_perfect_list');
    var vertical_line = $("#menu_button_perfect.menu_button_perfect_structure_vertical_line #menu_button_perfect_list");
    var horizontal_line = $("#menu_button_perfect.menu_button_perfect_structure_horizontal_line #menu_button_perfect_list");

    $('.button_meu_perfect').on("click", function () {
         $('.close_button').toggleClass('show-close');
         $('.button_meu_perfect>*').toggleClass('hide-menu_name');
         $('.close_button').removeClass('hide-menu_name');
    });
    

    if ($("#menu_button_perfect").hasClass("menu_button_perfect_structure_vertical_line") && $("#menu_button_perfect").hasClass("menu_button_perfect_position_left_bottom")) {
     
        $('.button_meu_perfect').on("click", function () {
            vertical_line.toggleClass('show_menu_toogle_vertical_line');
            var children = vertical_line.children();
            var i = 1;
            children.each(function(){
            var leftValue = 100*i
               $(this).css({
                    'bottom':leftValue+'px',
                    'background': '<?php echo $color_background_menu_value; ?>',
                    'font-size':'<?php echo $font_size_menu_value; ?>px',
                });
               i++;
            })
        });
    }
    if ($("#menu_button_perfect").hasClass("menu_button_perfect_structure_horizontal_line") && $("#menu_button_perfect").hasClass("menu_button_perfect_position_left_bottom")) {
        $('.button_meu_perfect').on("click", function () {
            horizontal_line.toggleClass('show_menu_toogle_horizontal_line');
            var children = horizontal_line.children();
            var i = 1;
            children.each(function(){
            var leftValue = 100*i
               $(this).css({
                'left':leftValue+'px',
                'background': '<?php echo $color_background_menu_value; ?>',
                'font-size':'<?php echo $font_size_menu_value; ?>px',
               });
               i++;
            })
        });
    }

    if ($("#menu_button_perfect").hasClass("menu_button_perfect_structure_horizontal_line") && $("#menu_button_perfect").hasClass("menu_button_perfect_position_right_bottom")) {
        $('.button_meu_perfect').on("click", function () {
            horizontal_line.toggleClass('show_menu_toogle_horizontal_line');
            var children = horizontal_line.children();
            var i = 1;
            children.each(function(){
            var leftValue = 100*i;
               $(this).css({
                'right':leftValue+'px',
                'background':'<?php echo $color_background_menu_value; ?>',
                'font-size':'<?php echo $font_size_menu_value; ?>px',
               });
               i++;
            })
        });
    }

    if ($("#menu_button_perfect").hasClass("menu_button_perfect_structure_vertical_line") && $("#menu_button_perfect").hasClass("menu_button_perfect_position_right_bottom")) {
        $('.button_meu_perfect').on("click", function () {
            vertical_line.toggleClass('show_menu_toogle_vertical_line');
            var children = vertical_line.children();
            var i = 1;
            children.each(function(){
            var leftValue = 100*i
               $(this).css({
                'bottom':leftValue+'px',
                'background':'<?php echo $color_background_menu_value; ?>',
                'font-size':'<?php echo $font_size_menu_value; ?>px',
               });
               i++;
            })
        });
    }

    if ($("#menu_button_perfect").hasClass("menu_button_perfect_structure_vertical_line") && $("#menu_button_perfect").hasClass("menu_button_perfect_position_right_top")) {
        $('.button_meu_perfect').on("click", function () {
            vertical_line.toggleClass('show_menu_toogle_vertical_line');
            var children = vertical_line.children();
            var i = 1;
            children.each(function(){
            var leftValue = 100*i
               $(this).css({
                'top':leftValue+'px',
                'background':'<?php echo $color_background_menu_value; ?>',
                'font-size':'<?php echo $font_size_menu_value; ?>px',
               });
               i++;
            })
        });
    }
    if ($("#menu_button_perfect").hasClass("menu_button_perfect_structure_horizontal_line") && $("#menu_button_perfect").hasClass("menu_button_perfect_position_right_top")) {
        $('.button_meu_perfect').on("click", function () {
            horizontal_line.toggleClass('show_menu_toogle_horizontal_line');
            var children = horizontal_line.children();
            var i = 1;
            children.each(function(){
            var leftValue = 100*i;
               $(this).css({
                'right':leftValue+'px',
                'background':'<?php echo $color_background_menu_value; ?>',
                'font-size':'<?php echo $font_size_menu_value; ?>px',
               });
               i++;
            })
        });
    }

    if ($("#menu_button_perfect").hasClass("menu_button_perfect_structure_horizontal_line") && $("#menu_button_perfect").hasClass("menu_button_perfect_position_left_top")) {
        $('.button_meu_perfect').on("click", function () {
            horizontal_line.toggleClass('show_menu_toogle_horizontal_line');
            var children = horizontal_line.children();
            var i = 1;
            children.each(function(){
            var leftValue = 100*i;
               $(this).css({
                'left':leftValue+'px',
                'background': '<?php echo $color_background_menu_value; ?>',
                'font-size':'<?php echo $font_size_menu_value; ?>px',
               });
               i++;
            })
        });
    }

    if ($("#menu_button_perfect").hasClass("menu_button_perfect_structure_vertical_line") && $("#menu_button_perfect").hasClass("menu_button_perfect_position_left_top")) {
        $('.button_meu_perfect').on("click", function () {
            vertical_line.toggleClass('show_menu_toogle_vertical_line');
            var children = vertical_line.children();
            var i = 1;
            children.each(function(){
            var leftValue = 100*i
               $(this).css({
                'top':leftValue+'px',
                'background': '<?php echo $color_background_menu_value; ?>',
                'font-size':'<?php echo $font_size_menu_value; ?>px',
               });
               i++;
            })
        });
    }

});

</script>

<?php
 }
