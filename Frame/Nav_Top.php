<!--top navbar-->
<?php
if (isset($GLOBALS['caller_page'])) {
    switch ($GLOBALS['caller_page']) {
        case 'index':
            include 'Nav_Top/Nav_top_index.php';
            break;
        case 'login':
            break;
        default:
            echo 'undefined';
            break;
    }
}
?>
