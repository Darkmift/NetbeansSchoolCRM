<!--this is the head,ends a body tag start-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>    
            <?php
            if (isset($GLOBALS['caller_page'])) {
                switch ($GLOBALS['caller_page']) {
                    case 'index':
                        echo 'index';
                        break;
                    case 'login':
                        echo 'login';
                        break;
                    case 'admin':
                        echo 'admin';
                        break;
                    default:
                        echo 'undefined';
                        break;
                }
            }
            ?>
        </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <?php
        include 'Style/style.php';
        include 'Style/style_navbar_left.php';
        if (isset($GLOBALS['caller_page']) && $GLOBALS['caller_page'] === 'login') {
            include 'Style/login_template_style.php';
        }
        ?>
    </head>
    <body>