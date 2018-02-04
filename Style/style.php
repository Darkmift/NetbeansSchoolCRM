<!--PErsonal CSS-->
<?php
$top;
if (isset($GLOBALS['caller_page'])) {
    switch ($GLOBALS['caller_page']) {
        case 'index':
            $top = '5%';
            break;
        case 'admin':
            $top = '0';
            break;
        case 'login':
            $top = '0';
            break;
    }
}
?>
<style>
    ::-webkit-scrollbar {
        display: none;
    }

    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
        position: fixed;
        top: 0;
        height: 5%;
        width: 100%;
        z-index: 5;
        margin-bottom: 0;
        border-radius: 0;
        padding-bottom: 1%;
    }

    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {
        position: absolute;
        top: 5%;
        width: 100%;
        height: auto;
    }

    /* Set right Ads nav */
    .sidenav-right {
        position: fixed;
        right:0;
        top: <?php echo $top; ?>;
        bottom: 5%;
        width:10%;
        padding-top: 1%;
        background-color: #f1f1f1;
        height: 100%;
    }
    .mainDiv{
        position: fixed;
        right:10%;
        left:10%;
        top:<?php echo $top; ?>;
        bottom: 5%;
        overflow: scroll;
    }
    .MidDiv{
        margin:-2% 1% 2% 4%;
    }
    /* Set left links nav */
    .sidenav-left {
        position: fixed;
        left:0;
        top:<?php echo $top; ?>;
        bottom: 5%;
        width:10%;
        padding-top: 1%;
        background-color: #f1f1f1;
        height: 100%;
    }
    /*test*/
    .sidenav2-left {
        position: fixed;
        left:0;
        top:<?php echo $top; ?>;
        bottom: 5%;
        width:10%;
        padding-top: 1%;
        color: white;
        background-color: #202020;
        height: 100%;
    }

    /* Set black background color, white text and some padding,set fixed to bottom */
    footer {
        z-index:-5;
        position: fixed;
        bottom: 0;
        left:10%;
        right:10%;
        background-color: #555;
        color: white;
        height: 5%;
        text-align: center;
        /*        padding: 15px;*/
    }
    footer p{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
        .sidenav {
            height: auto;
            padding: 15px;
        }
        .row.content {height:auto;} 
    }
</style>
