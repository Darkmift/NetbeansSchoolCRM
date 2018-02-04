<?php
$GLOBALS['caller_page'] = 'admin';
include 'Frame/head.php';
?>

<div class="mainDiv container-fluid text-center">    
    <div class="row content">
        <?php
        include 'Administration/admin_nav_left.php';
        include 'Frame/container_main.php';
        ?>
    </div>
</div>
<?php
include 'Frame/footer.php';
