<?php  include_once("functions.php"); ?>
<h1>Button Menu</h1>

<?php 
    
if (!empty($_POST)) {
    if (save_options(
        $_POST['show_button'],
        $_POST['show_in_mobile'],
        $_POST['name_menu'],
        $_POST['position'],
        $_POST['structure'],
        $_POST['form'],
        $_POST['type_button'],
        $_POST['type_button_value'],
        $_POST['type_button_value_icon'],
        $_POST['color_text'],
        $_POST['color_background'],
        $_POST['font_size']
    )) {
        // print_r($_POST);
    }
} else {
    $show_button = '';
    $show_in_mobile='';
    $name_menu = '';
    $position = '';
    $structure = '';
    $form = '';
    $type_button = '';
    $type_button_value = '';
    $type_button_value_icon='';
    $color_text = '';
    $color_background='';
    $font_size = '';
}
?>

<form method="post" id="form_options_button_menu">
    <div class="col-box">
        <h2>Show/hide menu</h2>
        <?php
$value_name_menu_in_db = getShowButton();

?>
        <input <?php if ($value_name_menu_in_db[0][0]=='yes') {
    echo 'checked';
} ?> name="show_button" id="show_button" type="checkbox" value='yes'>


<h2>Show/hide menu in mobile</h2>
        <?php
$value_name_menu_in_db = getShowButtonInMobile();

?>
        <input <?php if ($value_name_menu_in_db[0][0]=='yes') {
    echo 'checked';
} ?> name="show_in_mobile" id="show_in_mobile" type="checkbox" value='yes'>

        <h2>Menu selection</h2>

        <?php 
    $all_menu = get_registered_nav_menus();
    $value_name_menu_in_db = getNameMenu();
    ?>
        <select name="name_menu" id="name_menu">
            <option value="<?php echo $value_name_menu_in_db[0][0]; ?>">
                <?php echo $all_menu[$value_name_menu_in_db[0][0]] ; ?>
            </option>
            <?php 
        
        if ($all_menu) {
            foreach ($all_menu  as $key => $value) {
                if ($key != $value_name_menu_in_db[0][0]) {
                    ?>
            <option value="<?php echo $key; ?>">
                <?php echo $value; ?>
            </option>
            <?php
                }
            }
        }
        ?>
        </select>
        <h2>Position selection</h2>
        <select name="position" id="position">
            <?php 
    $allValue = array(
        'right_bottom' => 'Right Bottom',
        'left_bottom' => 'Left Bottom',
        'right_top' => 'Right Top',
        'left_top' => 'Left Top'
    );
    $value_name_menu_in_db = getPosition();
    ?>
            <option value="<?php echo $value_name_menu_in_db[0][0]; ?>">
                <?php echo $allValue[$value_name_menu_in_db[0][0]]; ?>
            </option>
            <?php 
        
        if ($allValue) {
            foreach ($allValue  as $key => $value) {
                if ($key != $value_name_menu_in_db[0][0]) {
                    ?>
            <option value="<?php echo $key; ?>">
                <?php echo $value; ?>
            </option>
            <?php
                }
            }
        }
        ?>

        </select>
        <br>

        <h2>Structure selection</h2>
        <select name="structure" id="structure">
            <?php 
    $allValue = array(
        'horizontal_line'=>'Horizontal line',
        'tree'=>'Tree',
        'vertical_line'=>'Vertical line'
    );
    $value_name_menu_in_db = getStructure();
    ?>
            <option value="<?php echo $value_name_menu_in_db[0][0]; ?>">
                <?php echo $allValue[$value_name_menu_in_db[0][0]]; ?>
            </option>
            <?php 
        
        if ($allValue) {
            foreach ($allValue  as $key => $value) {
                if ($key != $value_name_menu_in_db[0][0]) {
                    ?>
            <option value="<?php echo $key; ?>">
                <?php echo $value; ?>
            </option>
            <?php
                }
            }
        }
        ?>

        </select>
        <br>
    </div>
    <div class="col-box">
        <h2>Form selection</h2>
        <select name="form" id="form">
            <?php 
    $allValue = array(
        'squire'=>'Squire',
        'bubble'=>'Bubble'
    );
    $value_name_menu_in_db = getForm();
    ?>
            <option value="<?php echo $value_name_menu_in_db[0][0]; ?>">
                <?php echo $allValue[$value_name_menu_in_db[0][0]]; ?>
            </option>
            <?php 
        
        if ($allValue) {
            foreach ($allValue  as $key => $value) {
                if ($key != $value_name_menu_in_db[0][0]) {
                    ?>
            <option value="<?php echo $key; ?>">
                <?php echo $value; ?>
            </option>
            <?php
                }
            }
        }
        ?>

        </select>
        <br>

        <?php  $value_name_menu_in_db5 = getTypeButton(); ?>

        <h2>Selection button</h2>
        <input <?php if ($value_name_menu_in_db5[0][0]=='icon') {
            echo 'checked="true"';
        } ?> type="radio" id="icon_button" name="type_button" value="icon">Icon Button &nbsp; &nbsp;
        
        <input <?php if ($value_name_menu_in_db5[0][0]=='text') {
            echo 'checked="true"';
        } ?> type="radio" id="text_button" name="type_button" value="text">Text Button
        <br>

        <?php include ('fontawesome-select.php'); ?>
        <input class="<?php if ($value_name_menu_in_db5[0][0]=='text') { echo 'show-field'; }else{ echo 'hide-field';} ?>  " 
        type="text" id="text_in_button" name="type_button_value" 
        value="<?php $value_name_menu_in_db=getTypeButtonValue(); echo $value_name_menu_in_db[0][0]; ?>">


        <?php  $value_name_menu_in_db1 = getColorText(); ?>
        <h2>Selection color text</h2>
        <div class="box-color-text-select">
            <input type="text" id="color_text" name="color_text" data-type="color">
        </div>
        <?php  $value_name_menu_in_db2 = getColorBackground(); ?>
        <h2>Selection background color text</h2>
        <div class="box-color-background-select">
            <input type="text" id="color_background" name="color_background" data-type="color">
            <br>
        </div>
    </div>
    <div class="col-box">
        <h2>Font size menu items</h2>
        <?php  $value_name_menu_in_db = getFontSize(); ?>

        <input style="width: 40px;" type="text" id="font_size" name="font_size" value="<?php echo $value_name_menu_in_db[0][0] ?>"> px
        <div id="validate_font_size"></div>


    </div>
    <div style="clear:both;"></div>
    <input class="save_button_menu" type="submit" value="Save">
</form>


<script>
    jQuery(document).ready(function($) {
        $('input[data-type="color"]').wpColorPicker();
        $('.box-color-text-select .wp-picker-container .wp-color-result').css('background',
            '<?php echo $value_name_menu_in_db1[0][0]; ?>');
        $('.box-color-background-select .wp-picker-container .wp-color-result').css('background',
            '<?php echo $value_name_menu_in_db2[0][0]; ?>');
        var form = document.getElementById('form_options_button_menu');
        var font_size = document.getElementById('font_size');
        var validate_font_size = document.getElementById('validate_font_size');

        form.onsubmit = function(e) {
            var n = parseInt(font_size.value);
            if (isNaN(n)) {
                e.preventDefault();
                validate_font_size.innerHTML = 'Enter only number!';
            }

        }
        <?php 
            $color_text_menu =getColorText();
            $color_text_menu_value = $color_text_menu[0][0]; 
            $color_background_menu =getColorBackground();
            $color_background_menu_value = $color_background_menu[0][0];
        ?>

        $('.box-color-text-select input[type="text"]').val('<?php echo $color_text_menu_value; ?>');
        $('.box-color-background-select input[type="text"]').val('<?php echo $color_background_menu_value; ?>');

    });
</script>