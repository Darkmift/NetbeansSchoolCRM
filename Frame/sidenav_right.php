<div class="col-sm-2 sidenav sidenav-right">
    <?php
    if (isset($GLOBALS['caller_page'])) {
        switch ($GLOBALS['caller_page']) {
            case 'index':
                echo '<div class="well">
                        <p>ADS</p>
                      </div>
                      <div class="well">
                        <p>ADS</p>
                      </div>';
                break;
            case 'login':
                echo '';
                break;
            default:
                echo 'undefined';
                break;
        }
    }
    ?>

</div>