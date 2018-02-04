<?php
$GLOBALS['caller_page'] = 'index';
include 'Frame/head.php';
include 'Frame/Nav_Top.php';
?>

<div class="mainDiv container-fluid text-center">    
    <div class="row content">
        <?php
        //include 'Frame/sidenav_left.php';
        include 'Frame/sidenav_left2.php';
        include 'Frame/container_main.php';
        include 'Frame/sidenav_right.php';
        ?>
    </div>
</div>
<?php
include 'Frame/footer.php';
