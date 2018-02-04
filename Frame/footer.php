
<footer class="container-fluid text-center">
    <?php
    if (isset($GLOBALS['caller_page'])) {
        switch ($GLOBALS['caller_page']) {
            case 'index':
                echo '<p>index page</p>';
                break;
            case 'login':
                echo '<style>'
                . 'footer{'
                . 'background-color:transparent!important;'
                . 'color:black!important;'
                . '}'
                . '</style>';
                echo '<p>'
                . 'Login Please Log in to continue'
                . '</p>';
                break;
            case 'admin':
                echo '<style>'
                . 'footer{'
                . 'background-color:transparent!important;'
                . 'color:black!important;'
                . '}'
                . '</style>';
                echo '<p>'
                . 'Welcome Administrator'
                . '</p>';
                break;
            default:
                echo 'undefined';
                break;
        }
    }
    ?>
</footer>

</body>
</html>
