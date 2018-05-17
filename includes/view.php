<?php  include_once("functions.php"); ?>
<h1>Button Menu</h1>

<?php 
    
if (!empty($_POST)) {
    if (save_options($_POST['name_menu'], $_POST['position'])) {
    }
} else {
    $name_menu = '';
    $position = '';
}
?>

<h2>
    <?php echo $name_menu; ?>
</h2>
<form method="post">
    <h2>Menu selection</h2>

    <?php 
    $all_menu = get_registered_nav_menus();
    $value_name_menu_in_db = getNameMenu ();
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
    $allPosition = array(
        'right_bottom' => 'Right Bottom',
        'left_bottom' => 'Left Bottom',
        'right_top' => 'Right Top',
        'left_top' => 'Left Top'
    );
    $value_name_menu_in_db2 = getPosition ();
    ?>
        <option value="<?php echo $value_name_menu_in_db2[0][0]; ?>">
            <?php echo $allPosition[$value_name_menu_in_db2[0][0]]; ?>
        </option>
        <?php 
        
        if ($allPosition) {
            foreach ($allPosition  as $key => $value) {
                if ($key != $value_name_menu_in_db2[0][0]) {
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
    <input type="submit" value="Save">
</form>