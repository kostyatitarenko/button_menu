<?php
 include_once("/../includes/functions.php");

 $show_button_menu = getShowButton();
 if ($show_button_menu[0][0] == 'yes') {
     ?>
<div style="position:fixed;width:500px; height:40px;top:50px; right:20px; background:red;">
    <?php echo $show_button_menu[0][0]; ?>
</div>

<?php
 }
